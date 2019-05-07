<?php
$host = "localhost";
$user = "root";
$psw = "root";
$db = "portfolio";

$conn = mysqli_connect($host, $user, $psw, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
 ?>
