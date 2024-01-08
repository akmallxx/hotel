<?php 
include '../../../.config/db.php';

$id_kamar = $_POST['id'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

if (isset($_POST['status'])) {
    // Checkbox dicentang (checked)
    $status = true;
} else {
    // Checkbox tidak dicentang (unchecked)
    $status = false;
}

mysqli_query($conn, "UPDATE kamar SET id='$id_kamar', harga='$harga', status='$status', keterangan='$keterangan' WHERE id='$id_kamar'");

header("location:../");
?>