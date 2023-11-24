<?php

require_once('setup.php');

$sql = "
SELECT r.*, GROUP_CONCAT(DISTINCT p.photos) AS photos,  GROUP_CONCAT(DISTINCT amenities) AS amenities FROM room r 
LEFT JOIN photo p ON r.id = p.room_id
LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id  
LEFT JOIN amenity a ON a.id = ahr.amenity_id
GROUP BY r.id";

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

// Assuming you want to fetch the data from the result set
$rooms = $result->fetch_all(MYSQLI_ASSOC);

// Render the Blade template with the fetched data
echo $blade->run('example', ['rooms' => $rooms]);
