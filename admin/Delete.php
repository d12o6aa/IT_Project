<?php


include 'database.php';
$id= isset($_GET['id']);

$sql = "DELETE FROM users WHERE id = " . $_GET['id'];


if ($conn->query($sql) === TRUE) {
  header("location:layout/access.php");
} else {
  echo "Error deleting record: " . $conn->error;
}



    // if($conn)
    //     echo "okkkkkkk";
    // else 
    //     echo "noooo";

    
    // echo "<h1 class='text-center'>Delete Member</h1>";
    // echo "<div class='container'>";

    //     $userid = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

    //     //$check = checkItem('id', 'users', $userid);

    //     if ($check > 0) {

    //         $stmt = $conn->prepare("DELETE FROM users WHERE id = :zuser");

    //         $stmt->bindParam(":zuser", $userid);

    //         $stmt->execute();

    //         $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Deleted</div>';

    //         redirectHome($theMsg, 'back');

    //     } else {

    //         $theMsg = '<div class="alert alert-danger">This ID is Not Exist</div>';

    //         redirectHome($theMsg);

    //     }
	
	// echo '</div>';

