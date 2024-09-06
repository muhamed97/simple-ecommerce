<?php
include("config.php");

$id = $_GET['id'];
$up = mysqli_query($connection, "SELECT * FROM products WHERE id='$id'");
$data = mysqli_fetch_array($up);

$currentImage = $data['image'] ? htmlspecialchars($data['image']) : 'default.jpg';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>

<center>
<div class="main">
    <form action="up.php" method="POST" enctype="multipart/form-data">
        <h2>Update Product</h2>
        <img src="<?php echo $currentImage; ?>" alt="Product Image" width="450px">
        <br>
        <input type="text" name="name" placeholder="Product Name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
        <br>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
        <br>
        <input type="number" name="price" placeholder="Price" value="<?php echo htmlspecialchars($data['price']); ?>" required>
        <br>
        <input type="file" name="image" id="file">
        <br>
        <label for="file">Update picture of product</label>
        <br>
        <button type="submit" name="update">Update Product</button>
        <br><br>
        <a href="products.php">Display Products</a>
    </form>
</div>
<p><strong>DEVELOPED BY Mohamed Ayman</strong></p>
</center>

</body>
</html>
