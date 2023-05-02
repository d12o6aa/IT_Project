<?php
$server = "localhost";
$username = "root";
$password = "";
$databasename = "users";

// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// );

$conn = mysqli_connect($server, $username, $password, $databasename );

// $conn = new PDO($server, $username, $password , $option);

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!$conn){
    die("Something went wronge");
}
?>