<?php 
include '../../../.config/db.php';

$id = $_POST['id'];
$nama_tamu = $_POST['nama_tamu'];
$id_tipe = $_POST['id_tipe'];
$nomor_kamar = $_POST['nomor_kamar'];
$ci = $_POST['checkin'];
$co = $_POST['checkout'];
$total_harga = $_POST['harga'];

mysqli_query($conn, "UPDATE pegawai SET nama_tamu='$nama_tamu', id_tipe='$nomor_kamar', checkin='$ci', checkout='$co', total_harga='$harga'  WHERE id='$id'");

header("location:../");
?>