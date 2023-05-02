


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="./css/master.css">
    
</head>
<body>
    <header>
        <div class="container">
            <div class="left">
                <h3>Billing Address</h3>
                <form action="./web.php" method= "post" >
                    <div>
                        <label>Full_Name</label><br>
                        <input type="text" required placeholder="Enter your full name" name="name">
                    </div><br />

                    <div>
                        <label for="num">Phone_Number</label><br>
                        <input id="num" type="phone" name="mobile number" >
                    </div><br>
                    <div>
                        <label>Email</label><br>
                        <input type="email" required placeholder="writa a valid Email" name="mail">
                    </div><br>
                    
                    <div>
                        <label>Address</label><br>
                        <input type="text" required placeholder="Enter the address" name="address">
                    </div><br>

                    <div class="inline-block">
                        <label for="city">City</label><br>
                        <select id="city" name="city">
                            <option>choose your city:</option>
                            <option>Cairo</option>
                            <option>Alexandria</option>
                            <option>Giza</option>
                            <option>Shubra el-Khema</option>
                            <option>Port Said</option>
                            <option>Suez</option>
                            <option>El Mahalla el Kubra</option>
                            <option>El Mansoura</option>
                            <option>Tanta</option>
                            <option>Asyut</option>
                            <option>Fayoum</option>
                            <option>Zagazig</option>
                            <option>Ismailia</option>
                            <option>Khusus</option>
                            <option>Aswan</option>
                            <option>Damanhur</option>
                            <option>El-Minya</option>
                            <option>Damietta</option>
                            <option>Luxor</option>
                            <option>Qena</option>
                            <option>Beni Suef</option>
                            <option>Sohag</option>
                            <option>Shibin el-Kom</option>
                            <option>Hurghada</option>
                            <option>Banha</option>
                            <option>Kafr al-Sheikh</option>
                            <option>Mallawi</option>
                            <opMarsa>El Arish</opMarsa Matruhtion>
                            <option>Belbeis</option>
                            <option>10th of Ramadan City</option>
                            <option>Mit Ghamr</option>
                            <option>Kafr el-Dawwar</option>
                            <option>Qalyub</option>
                            <option>Desouk</option>
                            <option>Abu Kabir</option>
                            <option>Minya al-Qamh</option>
                            <option>Itsa</option>
                            <option>Al-Husseinieh</option>
                            <option>El-Qantara</option>
                        </select>
                    </div>    
                    

                    <div class="inline-block">
                        <label>Zip Code</label><br>
                        <input type="number" required placeholder="Enter zip code " name="zip">
                    </div><br>
                <!-- </form> -->
            </div>




            <div class="right">
                <h3>Payment</h3>
                <!-- <form action="./web.php" method= "post"> -->
                    <div>
                        Accepted Card<br>
                        <img src="./image/Visa-Emblem.jpg" width="55">
                        <img src="./image/mastercard.jpg" width="55">
                    </div><br>
                    
                    <div>
                        <label>Card Holder Name</label><br>
                        <input type="text" required placeholder="Enter Card Number" name="card_name" id="roto">
                    </div><br />
                    <div>
                        <label>Credit Card Number</label><br>
                        <input type="number" required placeholder="Enter Card Number" name="card_num" id="my">
                    </div><br />
                    
                    <div class="inline-block">
                        <label for="city">Expiry Year</label><br>
                        <select id="city" name="ey">
                            <option>choose the exp  year !:</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                        </select>
                    </div>    
                    

                    <div class="inline-block">
                        <label for="zip">Cvv</label><br>
                        <input id="tr" type="number" required placeholder="Enter your Cvv " name="CVV">
                    </div><br><br> <br>
                    <input type="submit" name="sub" value="Submet" id="sub">
                </form><br> <br>
            </div>
        </div>
    </header>
</body>
</html>
