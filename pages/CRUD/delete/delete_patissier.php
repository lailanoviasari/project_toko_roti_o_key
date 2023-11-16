<?php

include("../../../database/connection.php");

$patissier_id = $_GET['id'];

$delete_patissier = mysqli_query($connection,"DELETE FROM patissier WHERE patissier_id = '$patissier_id'");

header("location:../patissier.php");

?>