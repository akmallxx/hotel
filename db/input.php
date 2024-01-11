<?php
include '../.config/db.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

mysqli_query($conn, "insert into kamar values('$fullname', '$username', '$telepon', '$email', '$alamat', '$password')");
header("location:../");
?>