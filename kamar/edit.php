<?php
include '../.config/db.php';
$tableName = basename(dirname(__FILE__));

$id_kamar = $_GET['id'];

$data = mysqli_query($conn, "select * from kamar where id='$id_kamar'");
while ($d = mysqli_fetch_array($data)) {
    ?>

    <head>
        <title>Edit Data <?php echo $tableName ?></title>
        <link rel="stylesheet" href="../.css/style.css">
    </head>
    <h3>Edit Data
        <?php echo $tableName ?>
    </h3>

    <form method="post" action="action/edit.php">
        <table>
            <tr>
                <td>ID KAMAR: </td>
                <td>
                    <input type="number" name="id" value="<?php echo $d['id']; ?>">
                </td>
            </tr>
            <tr>
                <td>HARGA: </td>
                <td>
                    <input type="text" name="harga" value="<?php echo $d['harga']; ?>">
                </td>
            </tr>
            <tr>
                <td>STATUS: </td>
                <td><input type="checkbox" name="status">Tersedia</td>
            </tr>
            <tr>
                <td>KETERANGAN: </td>
                <td><textarea name="keterangan" cols="30" rows="5"><?php echo $d['keterangan'] ?></textarea></td>
            </tr>
            <td><input type="submit" value="simpan"></td>
        </table>
    </form>
    </script>
    <?php
}
?>