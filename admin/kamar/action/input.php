<?php
include '../../../.config/db.php';

$id_kamar = $_POST['id'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

if (isset($_POST['status'])) {
    // Checkbox dicentang (checked)
    $status = true;
} else {
    // Checkbox tidak dicentang (unchecked)
    $status = false;
}

mysqli_query($conn, "insert into kamar values('$id_kamar', '$tipe', '$harga', '$status', '$keterangan')");
header("location:../");
?>