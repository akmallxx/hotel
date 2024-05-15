<?php
include '../../../.config/db.php';

$id_kamar = $_POST['id'];
$tipe = $_POST['tipe'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];

mysqli_query($conn, "insert into kamar values('$id_kamar', '$tipe', '$harga', '$keterangan')");
header("location:../");
?>