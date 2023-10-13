<?php
include '../.config/db.php';
$tableName = basename(dirname(__FILE__));
?>

<html>

<head>
    <title>
        <?php echo $tableName ?> -
        <?php echo $webname ?>
    </title>

    <link rel="stylesheet" href="../.css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr>
            <?php
            $field = $conn->query("DESCRIBE $tableName");
            while ($row = $field->fetch_array()) {
                echo "<th>" . strtoupper($row['Field']) . "</th>";
            }
            ?>
            <th>ACTION</th>
        </tr>

        <?php
        $data = $conn->query("select * from $tableName");
        while ($d = $data->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $d['id']; ?>
                </td>
                <td>
                    Rp
                    <?php echo str_replace(",", ".", number_format($d['harga'])); ?>
                </td>
                <td>
                    <?php
                    if ($d['status'] > 0) {
                        echo "Tersedia";
                    } else
                        echo "Tidak Tersedia";
                    ?>
                </td>
                <td>
                    <button onclick="showAlert(`KETERANGAN KAMAR <?php echo $d['id']; ?>: `, `<?php echo $d['keterangan'] ?>`)">Lihat keterangan</button>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">
                        <button>Edit</button>
                    </a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">
                        <button>Hapus</button>
                    </a>
                </td>
            </tr>
            <script>
                function showAlert(title, text) {
                    Swal.fire({
                        title: title,
                        text: text,
                    })
                }

                function deleteAlert() {
                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Berhasil Dihapus!',
                                'Data sudah terhapus.',
                                'success'
                            )
                        }
                    })
                }
            </script>
            <?php
        }
        ?>
    </table>
    <br>
    <a href="input.php">
        <button>Tambah Kamar</button>
    </a>
</body>

</html>