<?php
include("config.php");


if(isset($_POST['upload'])){

    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_POST['image'];
    $imagelocation=$_FILES['image']['tmp_name'];
    $imagename=$_FILES['image']['name'];
    $imageup="images/".$imagename;
    $insert="INSERT INTO products (name,price,image) VALUES ('$name','$price','$imageup') ";
    mysqli_query($connection,$insert);
    if(move_uploaded_file($imagelocation,"images/".$imagename)){
        echo "<script>alert('Uploaded successfully')</script>";
    }
    else{
        echo "<script>alert('Error in upload')</script>";

    }

    header("location: index.php");

}


?>