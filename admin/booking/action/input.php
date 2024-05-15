<?php
include '../../../.config/db.php';

$nama_tamu = $_POST['nama_tamu'];
$id_tipe = $_POST['id_tipe'];
$nomor_kamar = $_POST['nomor_kamar'];
$ci = $_POST['checkin'];
$co = $_POST['checkout'];
$total_harga = $_POST['harga'];

mysqli_query($conn, "insert into booking values(null, '$nama_tamu', '$id_tipe', '$nomor_kamar', '$ci', '$co', '$total_harga')");
header("location:../");
?>