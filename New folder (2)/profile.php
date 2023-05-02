<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"href="profile.css">
    </head>
    <body>
    <?php
        $con =mysqli_connect('localhost', 'root', '', 'users') or die ('Error');
        if (isset($_POST["submit"])){
            $name1 = $_POST["fname"];
            $name2 = $_POST["lname"];
            $pass1 = $_POST["pass1"];
            $pass2 = $_POST["pass2"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            if (!empty($name1) && !empty($name2) && !empty($email) && !empty($pass1) && !empty($pass2) && !empty($phone)){
                $sql="UPDATE users SET fristname = '$name1', lastname = '$name2', password = '$pass1', confirmpassword = '$pass2', email = '$email', phone = '$phone' WHERE id=2";
                $update= mysqli_query($con, $sql) or die('failed');
                if ($update){
                    echo 'Updated Successfully !';
                }
            }else{
                echo 'All Fields are required';
            }
        }
        ?>
    <div class="form2">
        <form method="post">
        <div class="one">
                <h1>Edit Profile</h1>
                <br>
                <br>
                <input type="text"name="fname"id="fname"placeholder="First Name">
                <br>
                <br>
                <br>
                <input type="text"name="lname"id="lname"placeholder="Last Name">
                <br>
                <br>
                <br>
                <input type="password"name="pass1"id="pass1"placeholder="password">
                <br>
                <br>
                <br>
                <input type="password"name="pass2"id="pass2"placeholder="Confirm Password">
                <br>
                <br>
                <br>
                <input type="email"name="email"id="email"placeholder="Email">
                <br>
                <br>
                <br>
                <input type="tel"name="phone"id="phone"placeholder="Phone">
                <br>
                <br>
                <br>

                <button type="submit"name="submit"class="submit">Submit</button>
        </form>
    </div>
    </body>
</html>