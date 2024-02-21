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

mysqli_query($conn, "insert into reservasi values('$id_kamar', '$harga', '$status', '$keterangan')");
header("location:../");
?>