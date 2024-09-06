<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styleshop.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="card.php">Mycard</a>
    </nav>

    <div class="center-container">
        <h3>Available products</h3>
    </div>

    <?php
    include("config.php");

    $result = mysqli_query($connection, "SELECT * FROM products");

    while ($row = mysqli_fetch_array($result)) {
        echo "
        <main>
            <div class='card'>
                <img src='{$row['image']}' class='card-img-top' alt='Product Image'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-price'>price: $row[price]</p>
                    <a href='val.php?id=$row[id]' class='btn btn-success'>Add product to cart</a>
                </div>
            </div>
        </main>
        ";
    }

    mysqli_close($connection);
    ?>

</body>
</html>
