<?php
include('../../../database/connection.php');

$category_name = $_POST["category_name"];

$add_category = mysqli_query($connection,"INSERT INTO `category`(`category_name`) VALUES ('$category_name')");

header('location:../category.php')
?>