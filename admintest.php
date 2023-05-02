<?php 
    session_start();
    if (isset($_SESSION['Username'])){
        header('location: home.php');
    }


    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $username= $_POST['user'];
        $passward = $_POST['pass'];

        $stmt = $con ->prepare(" SELECT Username, Password users WHERE Username = ? AND password=? AND idgroub=1 ");
        $stmt ->execute(array($username,$passward));
        $count = $stmt ->rowCount();

        if ($count > 0){
            $_SESSION['Username'] = $username;
            header('location: home.php');
            exit();
        }
    }



?>
