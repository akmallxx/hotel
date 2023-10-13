<?php
include '../.config/db.php';

$id = $_GET['id'];
mysqli_query($conn, "delete from kamar where id='$id'");

header("location: ./");

?>