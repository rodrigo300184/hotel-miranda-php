<?php

require_once('setup.php');

$sql = "
SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS photos, GROUP_CONCAT(DISTINCT a.amenities) AS amenities
FROM room r
LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
LEFT JOIN amenity a ON a.id = ahr.amenity_id
GROUP BY r.id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

$rooms = $result->fetch_all(MYSQLI_ASSOC);

echo $blade->run('index',['rooms' => $rooms]);