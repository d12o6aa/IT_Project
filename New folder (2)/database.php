<?php
$server = "localhost";
$username = "root";
$password = "";
$databasename = "users";
$conn = mysqli_connect($server, $username, $password, $databasename);
if (!$conn){
    die("Something went wronge");
}
?>