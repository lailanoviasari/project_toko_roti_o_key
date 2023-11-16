<?php
include('../../../../database/connection.php');

$product_id = $_POST['product_id'];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["description"];
$product_img = $_POST["product_img"];
$date_add = $_POST["date_add"];
$category_id = $_POST["category_id"];
$date_add[10] = " ";


/* $target_dir =  "../../assets/img/upload";
$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["product_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
} */

//echo "" . $product_name . "" . $product_img . "" . $price . "" . $stock . "" . $description . "" . $product_img . "" . $date_add . "" . "" . $category_id;

$update_product = mysqli_query($connection, "UPDATE product SET product_name = '$product_name', price = '$price', stock = '$stock', `description` = '$description', product_image = '$product_img', date_add = '$date_add', category_id = '$category_id' WHERE product_id = '$product_id'");

header("location:../../product.php");
