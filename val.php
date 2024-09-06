<?php
include("config.php");
$id=$_GET['id'];
$up=mysqli_query($connection,"SELECT * FROM products WHERE id='$id'");
$data=mysqli_fetch_array($up);

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confrim purchase</title>
    <link rel="stylesheet" href="styleval.css">
</head>
<body>
    
<center>

<div class="main">
<form action="insertcard.php" method="POST">
<h2>confirm purchase?</h2>
<input type="text" name="id" value='<?php echo $data['id'] ?>'>
<input type="text" name="name" value='<?php echo $data['name'] ?>'>
<input type="text" name="price" value='<?php echo $data['price'] ?>'>
<button name="add" type="submit" class="btn btn-warning">confirm adding product to the cart</button>
<br><br>
<a href="shop.php">back to products page</a>


</form>
</div>


</center>

</body>
</html>