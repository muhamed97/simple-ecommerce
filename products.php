<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styleproducts.css">
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <h3>All Products</h3>
    </center>

    <?php
    include("config.php");

    $result = mysqli_query($connection, "SELECT * FROM products");

    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main>
            <div class='card' style='width: 15rem;'>
                <img src='{$row['image']}' class='card-img-top' alt='Product Image'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['name']}</h5>
                    <p class='card-text'></p>
                    <a href='update.php?id=$row[id]' class='btn btn-primary'>Edit product</a>
                    <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete product</a>
                </div>
            </div>
        </main>
        </center>
        ";
    }
    


?>

</body>
</html>





