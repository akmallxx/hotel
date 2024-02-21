<?php
include '../.config/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

// Check Username
if (mysqli_num_rows($result) === 1) {

    // Check Password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
        header("location: ../home.php");
    }
} else return header("location:../");
?>