<?php
include '../../.config/db.php';
$tableName = basename(dirname(__FILE__));

$id = $_GET['id'];
mysqli_query($conn, "delete from $tableName where id='$id'");

header("location: ./");

?>