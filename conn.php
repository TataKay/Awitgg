<?php
error_reporting(0);
$sname = "localhost";
$uname = "root";
$pass = "Ch@nel@#01@#";
$db = "exercises";

$conn = mysqli_connect($sname, $uname, $pass, $db);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
