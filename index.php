<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <center>
    <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <h2>Ecommerce</h2>
            <img src="0.jpg" alt="logo" width="350px">
            <br>
            <input type="text" name="name" placeholder="Product Name" required>
            <br>
            <input type="number" name="price" placeholder="Price"  required>
            <br>
            <input type="file" name="image" id="file" style="display: none;" required>
            <br>
            <label for="file">Choose picture of product</label>
            <br>
            <button type="submit" name="upload">Upload Product</button>
            <br>
            <br>
            <a href="products.php">Display Products</a>
        </form>
    </div>
    <p><strong>DEVELOPED BY Mohamed Ayman</strong></p>
    </center>
</body>
</html>
