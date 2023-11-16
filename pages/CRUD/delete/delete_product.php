<?php

include("../../../database/connection.php");

$product_id = $_GET['id'];

$delete_product = mysqli_query($connection,"DELETE FROM product WHERE product_id = '$product_id'");

header("location:../product.php");

?>