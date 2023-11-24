<?php

require_once('BladeOne.php');

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

// Server Connection

 $servername = "127.0.0.1:33061";
 $username = "root";
 $password = "mypassword";
 $database = "prueba_mysql_api_miranda";

// Create connection
 $conn = new mysqli($servername, $username, $password,$database);

//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

