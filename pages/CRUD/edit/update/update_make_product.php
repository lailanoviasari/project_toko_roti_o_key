<?php

include('../../../../database/connection.php');

$make_product_id = $_POST["make_product_id"];
$product_id = $_POST["product_id"];
$patissier_id = $_POST["patissier_id"];
$make_date = $_POST["make_date"];
$exp_date = $_POST["exp_date"];
$quantity = $_POST["quantity"];
$exp_date[10] = " ";
$make_date[10] = " ";

$update_make_product = mysqli_query($connection, "UPDATE make_product SET product_id = '$product_id', patissier_id = '$patissier_id', make_date = '$make_date', exp_date = '$exp_date', quantity = '$quantity' WHERE make_product_id = '$make_product_id'");

header("location:../../make_product.php");
