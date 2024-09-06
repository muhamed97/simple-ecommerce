<?php
include("config.php");


if(isset($_POST['update'])){
    $id=$_POST['id'];

    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_POST['image'];
    $imagelocation=$_FILES['image']['tmp_name'];
    $imagename=$_FILES['image']['name'];
    $imageup="images/".$imagename;
    $update="UPDATE products SET name='$name',price='$price', image='$imageup' WHERE id='$id'";
    mysqli_query($connection,$update);
    if(move_uploaded_file($imagelocation,"images/".$imagename)){
        echo "<script>alert('product updated successfully')</script>";
    }
    else{
        echo "<script>alert('Error occured')</script>";

    }

    header("location: index.php");

}


?>