<?php
if (isset($_POST["s"])) {
  $v = $_POST["v"];
  $e = $_POST["e"];
  $t = $_POST["t"];
  $to = 'tamoseviciusj@gmal.com';
  $headers = "From: $e" . "\r\n" .
  "CC: $e";
  mail( $to, "Klausimas nuo: $v", $t, $headers);
  header("Location: ../index.php?message-sent");
  exit();
}
 ?>
