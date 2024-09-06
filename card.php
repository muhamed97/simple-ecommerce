<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My products cart</title>
    <link rel="stylesheet" href="cardstyle.css">


</head>
<body>
    <center>
    <h3>Booked products</h3>
    </center>
<?php
    include("config.php");
    $result=mysqli_query($connection,"SELECT * FROM addcard");
    while($row=mysqli_fetch_array($result)){

        echo"
          <center>

    <table class='table'>
        <thead>
            <tr>
                <th>Product name</th>
                <th>Product price</th>
                <th>Delete product</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td><a href='deletecard.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
            </tr>
        </tbody>
    </table>

    </center>
    
        
    ";

    }

?>


<a href="shop.php">Back to products page</a>


</body>
</html>