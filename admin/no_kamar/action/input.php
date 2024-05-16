<?php
include '../../../.config/db.php';

$id_pegawai = $_POST['id'];
$nama = $_POST['nama'];
$surel = $_POST['surel'];

if (isset($_POST['status'])) {
    // Checkbox dicentang (checked)
    $status = true;
} else {
    // Checkbox tidak dicentang (unchecked)
    $status = false;
}

mysqli_query($conn, "insert into pegawai values('$id_pegawai', '$nama', '$surel')");
header("location:../");
?>