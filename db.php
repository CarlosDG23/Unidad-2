<?php
$user = "root";
$pass = "";
$host = "localhost";
$connection = mysqli_connect($host, $user, $pass);
$datab = "infrarojo";
$db = mysqli_select_db($connection,$datab);
if (!$db) {
 echo "Error: ";
}