<?php

include("config.php");

$id=$_GET['id'];
mysqli_query($connection,"DELETE FROM addcard WHERE id='$id'");
header("location: card.php");


?>