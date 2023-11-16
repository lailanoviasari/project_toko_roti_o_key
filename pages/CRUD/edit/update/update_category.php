<?php

include("../../../../database/connection.php");

$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];

$update_category = mysqli_query($connection, "UPDATE category SET category_name = '$category_name' WHERE category_id = '$category_id'");

header("location:../../category.php");
