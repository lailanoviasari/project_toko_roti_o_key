<?php

include("../../../database/connection.php");

$make_product_id = $_GET['id'];

$delete_make_product = mysqli_query($connection,"DELETE FROM make_product WHERE make_product_id = '$make_product_id'");

header("location:../make_product.php");

?>