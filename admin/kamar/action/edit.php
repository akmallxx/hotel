<?php 
include '../../../.config/db.php';

$id_kamar = $_POST['id'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

mysqli_query($conn, "UPDATE kamar SET id='$id_kamar', tipe='$tipe', harga='$harga', keterangan='$keterangan' WHERE id='$id_kamar'");

header("location:../");
?>