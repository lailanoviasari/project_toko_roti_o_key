<?php
include('../../../database/connection.php');

$make_product_id = $_POST["make_product_id"];
$product_id = $_POST["product_id"];
$patissier_id = $_POST["patissier_id"];
$make_date = $_POST["make_date"];
$exp_date = $_POST["exp_date"];
$quantity = $_POST["quantity"];
$exp_date[10] = " ";
$make_date[10] = " ";

//echo " ". $make_product_id ." ". $product_id . " ". $patissier_id ." ". $exp_date .":00 ". $make_date .":00 ". $quantity ." ". $quantity ." ";

$add_make_product = mysqli_query($connection,"INSERT INTO `make_product`( `product_id`, `patissier_id`, `make_date`, `exp_date`, `quantity`) VALUES ('$product_id','$patissier_id', '$make_date', '$exp_date', '$quantity')");

header('location:../make_product.php')
?>