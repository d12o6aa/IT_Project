<?php
// تعيين بيانات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment";



$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("connection failed:".mysqli_connect_error());
}
//echo "connected succefully";
//mysqli_close($conn);
header('Location:ex/access.php');





// // استلام البيانات من النموذج السابق
@$Full_Name = @$_POST['name'];
@$Phone_Number = @$_POST['mobile number'];
@$Email = @$_POST['mail'];
@$Address = @$_POST['address'];
@$City = @$_POST['city'];
@$Zip_code = @$_POST['zip'];
@$Card_Holder_Name = @$_POST['card_name'];
@$Credit_Card_Number = @$_POST['card_num'];

@$Expiry_Year = @$_POST['ey'];
@$Cvv = @$_POST['CVV'];

echo $Cvv;
echo $Credit_Card_Number;


$sql = "INSERT INTO payment(Full_Name, Phone_Number, Email, Address, City, Zip_code, Card_Holder_Name, Credit_Card_Number, Cvv, Expiry_Year) values('$Full_Name', '$Phone_Number', '$Email', '$Address', '$City', '$Zip_code', '$Card_Holder_Name', '$Credit_Card_Number', '$Cvv', '$Expiry_Year')";// or die(mysql_error());
if($conn->query($sql) == TRUE)
    {echo "payment added";}
else
    {echo "error" . $sql ."<br>" . $conn->error;}
$conn->close();



// // إغلاق اتصال قاعدة البيانات
// $conn->close();
?>
