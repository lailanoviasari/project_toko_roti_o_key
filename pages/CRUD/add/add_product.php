<?php
include('../../../database/connection.php');

$product_name = $_POST["product_name"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$description = $_POST["description"];
//$product_img = $_POST["product_img"];
$date_add = $_POST["date_add"];
$category_id = $_POST["category_id"];
$date_add[10] = " ";

$target_dir = "../../../assets/img/upload/";
$product_img = $_FILES["product_img"]["name"];
$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
$uploadOk = 1;
$imageFileType =
    strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["product_img"]["tmp_name"]);
    if ($check !== false) {
        // Check file size
        if ($_FILES["product_img"]["size"] > 1000000) {
            echo "<script> alert('Sorry, your file is too large.') </script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.') </script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script> alert('Sorry, your file was not uploaded.') </script>";
            // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
                $add_product = mysqli_query($connection, "INSERT INTO `product`(`product_name`, `price`, `stock`, `description`, `product_image`, `date_add`, `category_id`) VALUES ('$product_name', '$price', '$stock', '$description', '$product_img', '$date_add', '$category_id')");
                header('location:../product.php');
            } else {
                echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
            }
        }

        $uploadOk = 1;
    } else {
        echo "<script> alert('File is not an image.') </script>";

        $uploadOk = 0;
    }
}
