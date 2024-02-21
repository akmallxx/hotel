<?php
include '../.config/db.php';

$fullname = $_POST['fullname'];
$username = stripslashes($_POST['username']);
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
$level = FALSE;

$usernameCheck = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
if ( mysqli_fetch_assoc($usernameCheck)) {
    echo "<script>
        alert('Username sudah terdaftar! Harap gunakan nama yang lain.')
        window.location.href = '../'
    </script>";
    return false;
}

$mailCheck = mysqli_query($conn, "SELECT username FROM user WHERE email = '$email'");
if ( mysqli_fetch_assoc($mailCheck)) {
    echo "<script>
        alert('Email sudah terdaftar! Harap gunakan email lain.')
        window.location.href = '../'
    </script>";
    return false;
}

mysqli_query($conn, "insert into user values(NULL, '$fullname', '$username', '$telepon', '$email', '$alamat', '$password', '$level')");
header("location:../");
?>