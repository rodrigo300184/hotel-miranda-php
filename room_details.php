<?php
session_start();
require_once('setup.php');

/* This information originates from the availability section 
on the index page and is then used when selecting a room in the rooms section.*/
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["room_id"])) {
    $id = intval(htmlspecialchars($_GET["room_id"]));
    $_SESSION['room_id'] = $id;
    $arrivalDate = $_SESSION['arrivalDate'];
    $departureDate = $_SESSION["departureDate"];

    $sql = "
          SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
          FROM room r
          LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
          LEFT JOIN amenity a ON a.id = ahr.amenity_id
          WHERE r.id = ?
          GROUP BY r.id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
    }

    $room = $result->fetch_all(MYSQLI_ASSOC);
    $_SESSION['selectedRoom'] = $room[0];

    $sqlRelatedRooms = "
          SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
          FROM room r
          LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
          LEFT JOIN amenity a ON a.id = ahr.amenity_id
          WHERE r.id != ? AND r.room_type = ?
          GROUP BY r.id";
    $stmt = $conn->prepare($sqlRelatedRooms);
    $stmt->bind_param("is", $id, $room[0]['room_type']);
    $stmt->execute();
    $result = $stmt->get_result();


    $relatedRooms = $result->fetch_all(MYSQLI_ASSOC);

    echo $blade->run('room_details', ['room' => $room[0], 'relatedRooms' => $relatedRooms, 'checkin' => $arrivalDate, 'checkout' => $departureDate]);
    unset($_SESSION['arrivalDate']);
    unset($_SESSION['departureDate']);
    /*This POST originates in the booking form in room_details*/
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["checkIn"]) && isset($_POST["checkOut"]) && isset($_POST["fullName"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {
        $checkin = htmlspecialchars($_POST["checkIn"]);
        $checkout = htmlspecialchars($_POST["checkOut"]);
        $fullname = htmlspecialchars($_POST["fullName"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $message = htmlspecialchars($_POST["message"]);
        $room_id = intval($_SESSION['room_id']);
        $sql = "INSERT INTO 
                booking (guest, phone_number, email, check_in, check_out, special_request, room_id)
                VALUES ( ?, ?, ?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $fullname, $phone, $email, $checkin, $checkout, $message, $room_id);

        if ($stmt->execute()) {
            $notification = array('message' => 'Your room has been booked.', 'error' => false);
        } else {
            $notification = array('message' => 'Something went wrong, please try again!', 'error' => true);
        }
        echo $blade->run('index', ['notification' => $notification]);
        $stmt->close();
        session_destroy();
    } else {
    }
} else {
    //This information originates from room-details when you check avalaibility on the selected room from rooms section. 
    $checkin = date("Y-m-d", strtotime($_GET['checkIn']));
    $checkout = date("Y-m-d", strtotime($_GET['checkOut']));
    $room_id = intval($_SESSION['room_id']);

    $sqlRelatedRooms = "
    SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
    FROM room r
    LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
    LEFT JOIN amenity a ON a.id = ahr.amenity_id
    WHERE r.id != ? AND r.room_type = (SELECT room_type FROM room WHERE id = ?)  
    GROUP BY r.id";
    $stmt = $conn->prepare($sqlRelatedRooms);
    $stmt->bind_param("ii", $room_id, $room_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $relatedRooms = $result->fetch_all(MYSQLI_ASSOC);

    $sql = "
          SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
          FROM room r
          LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
          LEFT JOIN amenity a ON a.id = ahr.amenity_id
          WHERE r.id = ?
          AND r.id NOT IN (
          SELECT b.room_id FROM booking b 
          WHERE (b.check_in <= ? AND ? <= b.check_out)
          OR (b.check_in <= ? AND b.check_out >= ?)
          OR (b.check_in >= ? AND b.check_out <= ?))
          GROUP BY r.id";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssss", $room_id, $checkin, $checkin, $checkout, $checkout, $checkin, $checkout);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $room = $result->fetch_all(MYSQLI_ASSOC);
        $notification = array('message' => 'The selected room is available within the selected dates.', 'error' => false);
        echo $blade->run('room_details', ['room' => $room[0], 'relatedRooms' => $relatedRooms, 'checkin' => $checkin, 'checkout' => $checkout, 'notification' => $notification]);
    } else {
        $notification = array('message' => 'The selected room is not available within the selected dates.', 'error' => true);
        echo $blade->run('room_details', ['room' => $_SESSION['selectedRoom'], 'relatedRooms' => $relatedRooms, 'notification' => $notification]);
    }
}
