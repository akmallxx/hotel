<?php
include "./.config/db.php";

$id_tipe = $_GET['id_tipe'];

$query = "SELECT DISTINCT kamar.id, kamar.harga, no_kamar.id, no_kamar.nomor_kamar
FROM no_kamar
LEFT JOIN kamar ON kamar.id = no_kamar.id_tipe
LEFT JOIN booking ON no_kamar.id = booking.nomor_kamar
WHERE kamar.id = $id_tipe AND booking.nomor_kamar IS NULL";

$result = mysqli_query($conn, $query);
$nomor_kamar = array();
while ($row = mysqli_fetch_assoc($result)) {
    $nomor_kamar[] = $row;
}

echo json_encode($nomor_kamar);
?>