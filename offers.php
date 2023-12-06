<?php

require_once('setup.php');

$sqlWithDiscount = "
  SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
  FROM room r
  LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
  LEFT JOIN amenity a ON a.id = ahr.amenity_id
  WHERE r.offer_price = true AND r.status = 'Available' 
  GROUP BY r.id
  LIMIT 5;";

$sqlWithoutDiscount = "
  SELECT r.*, (SELECT GROUP_CONCAT(DISTINCT photos) FROM photo WHERE room_id = r.id) AS all_photos, GROUP_CONCAT(DISTINCT a.amenities) AS all_amenities
  FROM room r
  LEFT JOIN amenities_has_room ahr ON r.id = ahr.room_id
  LEFT JOIN amenity a ON a.id = ahr.amenity_id
  WHERE r.offer_price = false AND r.status = 'Available' 
  GROUP BY r.id
  LIMIT 5;";

$resultWithDiscount = $conn->query($sqlWithDiscount);
$resultWithoutDiscount = $conn->query($sqlWithoutDiscount);

$roomsWithDiscount = $resultWithDiscount->fetch_all(MYSQLI_ASSOC);
$popularRooms = $resultWithoutDiscount->fetch_all(MYSQLI_ASSOC);

foreach ($roomsWithDiscount as &$room) {
  $room['priceWithDiscount'] = intval($room['price'] - ($room['price'] * ($room['discount'] / 100)));
}

echo $blade->run('offers', ['roomsWithDiscount' => $roomsWithDiscount, 'popularRooms' => $popularRooms]);
$conn->close();
