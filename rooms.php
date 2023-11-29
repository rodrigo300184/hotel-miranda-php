
<?php
session_start();
require_once('setup.php');

if (isset($_GET['arrivalDate']) && isset($_GET['departureDate'])) {

    $checkin = date("Y-m-d", strtotime($_GET['arrivalDate']));
    $_SESSION['arrivalDate'] = $checkin;
    $checkout = date("Y-m-d", strtotime($_GET['departureDate']));
    $_SESSION['departureDate'] = $checkout;
    $sql = "
    SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
    FROM room r
    LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
    LEFT JOIN amenity a ON a.id = ahr.amenity_id
    WHERE r.id NOT IN (SELECT b.room_id FROM booking b 
    WHERE (b.check_in <= '$checkin' AND '$checkin' <= b.check_out)
    OR (b.check_in <= '$checkout' AND b.check_out >= '$checkout')
    OR (b.check_in>= '$checkin' AND b.check_out <= '$checkout'))
    GROUP BY r.id;";
} else {
    $sql = "
    SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
    FROM room r
    LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
    LEFT JOIN amenity a ON a.id = ahr.amenity_id
    GROUP BY r.id";
}



$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

$rooms = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('rooms', ['rooms' => $rooms]);
