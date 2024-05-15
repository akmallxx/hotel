<?php 
include '../../../.config/db.php';

$id_pegawai = $_POST['id'];
$nama = $_POST['nama'];
$surel = $_POST['surel'];

mysqli_query($conn, "UPDATE pegawai SET id='$id_pegawai', nama='$nama', surel='$surel' WHERE id='$id_pegawai'");

header("location:../");
?>