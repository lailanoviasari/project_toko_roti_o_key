<?php

include("../../../database/connection.php");

$category_id = $_GET['id'];

$delete_category = mysqli_query($connection,"DELETE FROM category WHERE category_id = '$category_id'");

header("location:../category.php");

?>