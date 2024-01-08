<?php
include '../../.config/db.php';
$tableName = basename(dirname(__FILE__));

$id = $_GET['id'];

$data = mysqli_query($conn, "select * from $tableName where id='$id'");
while ($d = mysqli_fetch_array($data)) {
    ?>

    <head>
        <title>Edit data
            <?php echo $tableName ?>
        </title>
        <link rel="stylesheet" href="../../.css/style.css">

        <!-- bootstrap v5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
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
            <td></td>
            <td>
                <button type="submit" class="btn btn-success">Simpan</button>
            </td>
        </table>
    </form>
    </script>
    <?php
}
?>