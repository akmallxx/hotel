<?php
include "../.config/db.php";
$tableName = basename(dirname(__FILE__));
?>

<head>
    <title>Tambah data <?php echo $tableName ?></title>
    <link rel="stylesheet" href="../.css/style.css">
</head>


<div class =""></div>

<div class ="div-kamar1">
<div class ="div-kamar2">
<h3 class ="h3"> Tambahkan Data Kamar</h3>

<form method = "post" action="action/input.php">
    <table>
        <tr>
            <td class ="table-font">ID KAMAR :</td>
            <td> <input type="number" name="id"> </td>
        </tr>

        <tr>
            <td class ="table-font">HARGA :</td>
            <td> <input type="number" name="harga"> </td>
        </tr>
        <tr>
            <td class ="table-font">STATUS :</td>
            <td><input type="checkbox" name="status">Tersedia</td>
        </tr>
        <tr>
            <td>KETERANGAN :</td>
            <td><textarea name="keterangan" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input class="submit" type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>
</div>

</div>
 

 