<?php

include("../../../../database/connection.php");

$patissier_id = $_POST['patissier_id'];
$nama_patissier = $_POST['nama_patissier'];
$gender_patissier = $_POST['gender_patissier'];
$telpon_patissier = $_POST['telpon_patissier'];
$email_patissier = $_POST['email_patissier'];
$alamat_patissier = $_POST['alamat_patissier'];

if ($gender_patissier == 0) {
    //echo $gender_patissier, ' male';
    $update_patissier = mysqli_query($connection, "UPDATE `patissier` SET `nama_patissier`='$nama_patissier',`gender_patissier`='male',`telpon_patissier`='$telpon_patissier',`email_patissier`='$email_patissier',`alamat_patissier`='$alamat_patissier' WHERE patissier_id = $patissier_id");
} else if ($gender_patissier == 1) {
    //echo $gender_patissier, ' female';
    $update_patissier = mysqli_query($connection, "UPDATE `patissier` SET `nama_patissier`='$nama_patissier',`gender_patissier`='female',`telpon_patissier`='$telpon_patissier',`email_patissier`='$email_patissier',`alamat_patissier`='$alamat_patissier' WHERE patissier_id = $patissier_id");
}
header("location:../../patissier.php");
