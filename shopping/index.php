<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Website|اضافة و حذف منتج </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="adding">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>Adding Or Removing a Website</h2>
                <img src="Pictures/8729493_R_Z001A.jpeg" alt="logo" class="logo-color">
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">Choose a photo </label>
                <button name='upload'>Upload the product</button>
                <br><br>
                <a href="products.php">Products Page</a>
            </form>
        </div>
    </center>
</body>
</html>