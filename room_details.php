<?php
session_start();
require_once('setup.php');
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["room_id"])) {
        $id = intval(htmlspecialchars($_GET["room_id"]));
        $_SESSION['room_id'] = $id;
        $arrivalDate = $_SESSION['arrivalDate'];
        $departureDate = $_SESSION["departureDate"];

        $sql = "
    SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
    FROM room r
    LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
    LEFT JOIN amenity a ON a.id = ahr.amenity_id
    WHERE r.id = '$id'
    GROUP BY r.id";

    $result = $conn->query($sql);

    $room = $result->fetch_all(MYSQLI_ASSOC);
    echo $blade->run('room_details', ['room' => $room[0], 'checkin' => $arrivalDate, 'checkout' => $departureDate]);
    session_destroy();

    } 
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo 'Poronga', $id;
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
                VALUES ('$fullname', '$phone', '$email', '$checkin', '$checkout', '$message', '$room_id');";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        session_destroy();
        print_r('Listo tio lo has logrado');
    } else {
        print_r('Salio todo mal');
    }
}


