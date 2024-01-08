<?php
include "../../.config/db.php";
$tableName = basename(dirname(__FILE__));
?>

<head>
    <title>Tambah data
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


<div class=""></div>

<div class="div-kamar1">
    <div class="div-kamar2">
        <h3 class="h3">Tambahkan data
            <?php echo $tableName ?>
        </h3>

        <form method="post" action="action/input.php">
            <div class="input-group mb-3">
                <table>
                    <tr>
                        <td>ID Kamar</td>
                        <td> <input type="number" name="id"> </td>
                    </tr>

                    <tr>
                        <td>Harga</td>
                        <td> <input type="number" name="harga"> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="checkbox" name="status">Tersedia</td>
                    </tr>
                    <tr>
                        <td>Keterangan Kamar</td>
                        <td><textarea name="keterangan" cols="30" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <!-- <input class="submit" type="submit" value="Simpan"> -->
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</div>