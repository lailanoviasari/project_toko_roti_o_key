<?php
include('../../../database/connection.php');

$product_name = $_POST["product_name"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["description"];
$product_img = $_POST["product_img"];
$date_add = $_POST["date_add"];
$category_id = $_POST["category_id"];
$date_add[10] = " ";

$add_product = mysqli_query($connection,"INSERT INTO `product`(`product_name`, `price`, `stock`, `description`, `product_image`, `date_add`, `category_id`) VALUES ('$product_name', '$price', '$stock', '$description', '$product_img', '$date_add', '$category_id')");

header('location:../product.php')
?>