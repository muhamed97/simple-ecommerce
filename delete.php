<?php
include("config.php");

$id=$_GET['id'];
mysqli_query($connection,"DELETE FROM products WHERE id='$id'");
header("location: products.php");

