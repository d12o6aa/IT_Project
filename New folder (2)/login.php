<?php
require_once('index.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful.";
    } else {
        echo "Invalid login credentials.";
    }
}
?>