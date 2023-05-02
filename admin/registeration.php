<!DOCTYPE html>
<html>
    <head>
        <title>Regiseration</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"href="register.css">
    </head>
    <body>
        <div class="parent">
        <?php
        if (isset($_POST["submit"])){
            $name1 = $_POST["fname"];
            $name2 = $_POST["lname"];
            $pass1 = $_POST["pass1"];
            $pass2 = $_POST["pass2"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $passwordhash = password_hash($pass1,PASSWORD_DEFAULT);
            $errors = array();
            if (empty($name1) OR empty($name2) OR empty($email) OR empty($pass1) OR empty($pass2) OR empty($phone)){
                array_push($errors,"All fields are required");
            }
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
               array_push($errors,"Email is not valid");
            }
            if (strlen($pass1)<8){
               array_push($errors,"Password must be at least 8 characters long");
            }
            if ($pass1!==$pass2){
               array_push($errors,"Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);
            $rowCount = mysqli_num_rows($result);
           if ($rowCount>0){
              array_push($errors,"Email already exists!");
           }
           if (count($errors)>0){
            foreach($errors as $error){
                 echo "<div class='alert alert-danger'>$error<?div>";
            }
           }else{
            $insert = "INSERT INTO users(fristname, lastname, password, confirmpassword, email, phone)VALUES('$name1', '$name2', '$pass2', '$pass2', '$email', '$phone')";
            $res = mysqli_query($conn, $insert);
            header('location:../home.php');
          }
        }
?>
            <h1><pre>      No Account? Register</pre></h1>
            <br>
            <h3><pre class="text1">        Registeration takes less than a minute but gives you full control over</pre></h3> 
            <br>
            <h3><pre class="text2">        your orders.</pre></h3>
            <form method="POST"action="registeration.php">
                <div class="one">
                    <lable for="fname"class="fname">First Name</lable>
                    <br>
                    <br>
                    <input type="text"name="fname"id="fname">
                    <br>
                    <br>
                    <lable for="email"class="email">E-mail Address</lable>
                    <br>
                    <br>
                    <input type="email"name="email"id="email">
                    <br>
                    <br>
                    <lable for="pass1"class="pass1">Password</lable>
                    <br>
                    <br>
                    <input type="password"name="pass1"id="pass1">
                </div>
                <div class="two">
                    <lable for="lname"class="lname">Last Name</lable>
                    <br>
                    <br>
                    <input type="text"name="lname"id="lname">
                    <br>
                    <br>
                    <lable for="phone"class="phone">Phone Number</lable>
                    <br>
                    <br>
                    <input type="tel"name="phone"id="phone">
                    <br>
                    <br>
                    <lable for="pass2"class="pass2"> Confirm Password</lable>
                    <br>
                    <br>
                    <input type="password"name="pass2"id="pass2">
                </div>
                <br>
                <br>
                <div class="three">
                    <button type="submit"name="submit"class="submit">Register</button>
                </div>
            </form>
            <br>
            <p>Already have an account?<a href="forms.php"> Login Now</a></p>
</div>

    </body>
</html>










































<!-- <?php
$server="localhost";
$username=" "; 
$password="password";
$database="db";
$fristname=$_POST['fname'];
$lastname=$_POST['lname'];
$pass=$_POST['pass1'];
$confirmpassword=$_POST['pass2'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$conn = new mysqli($server, $database);
if ($conn->connect_error){
    die("Connectionfailed: ". $conn->connect_error);
echo "connected successfully";
}
$sql = "INSERT INTO MYGUESTS (fname, lname, pass1, pass2, email, phone)
VALUES('frist name', 'last name', 'password', 'confirm password', 'email', 'phone')";
if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else {
    echo "Error: ".$sql."<br/>".$conn->error;
}
$conn->close();
?> -->