<?php
include 'db.php';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$name = $_POST['name'];
$sql = "SELECT * FROM likes WHERE ip = '$ip' AND name = '$name'";
$res = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($res);
if ($rows >= 1) {
  echo "false";
}else {
  $sql = "INSERT INTO likes (ip, name) VALUES ('$ip', '$name')";
  mysqli_query($conn, $sql);
  $sqlgetrows = "SELECT * FROM likes WHERE name = '$name'";
  $res = mysqli_query($conn, $sqlgetrows);
  $rows = mysqli_num_rows($res);
  echo $rows;

}
 ?>
