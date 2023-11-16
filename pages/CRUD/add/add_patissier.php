<?php
include('../../../database/connection.php');

$nama_patissier = $_POST["nama_patissier"];
$gender_patissier = $_POST['gender_patissier'];
$telpon_patissier = $_POST['telpon_patissier'];
$email_patissier = $_POST['email_patissier'];
$alamat_patissier = $_POST['alamat_patissier'];

if ($gender_patissier == 0) {
    $add_patissier = mysqli_query($connection, "INSERT INTO `patissier`(`nama_patissier`, `gender_patissier`, `telpon_patissier`, `email_patissier`, `alamat_patissier`) VALUES ('$nama_patissier', 'male', `$telpon_patissier`, `$email_patissier`, `$alamat_patissier`)");
} elseif ($gender_patissier == 1) {
    $add_patissier = mysqli_query($connection, "INSERT INTO `patissier`(`nama_patissier`, `gender_patissier`, `telpon_patissier`, `email_patissier`, `alamat_patissier`) VALUES ('$nama_patissier', 'female', '$telpon_patissier', '$email_patissier', '$alamat_patissier')");    
}
header('location:../patissier.php');
