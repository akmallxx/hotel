<?php
include '../../.config/db.php';
$tableName = basename(dirname(__FILE__));
?>

<html>

<head>
    <title>
        <?php echo ucfirst($tableName) ?> -
        <?php echo $webname ?>
    </title>
    <link rel="icon" type="image/png" href="../../.media/logo.png">

    <link rel="stylesheet" href="../../.css/style.css">

    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: antiquewhite;">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../admin.php">
                <img src="../../.media/logo.png" alt="sriwijaya logo" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Table List
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                            $query = "SHOW TABLES";
                            $result = $conn->query($query);

                            while ($row = $result->fetch_row()) {
                                echo "<li><a class='dropdown-item' href='../../admin/" . $row[0] . "'>" . $row[0] . "</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="container-fluid" style="padding: 50px;">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah <?php echo $tableName ?>
        </button><br><br> 

        <table class="table table-striped">
            <thead class="table-secondary">
                <tr>
                    <?php
                    $field = $conn->query("DESCRIBE $tableName");
                    while ($row = $field->fetch_array()) {
                        echo "<th>" . str_replace("_", " ", strtoupper($row['Field'])) . "</th>";
                    }
                    ?>
                    <th>ACTION</th>
                </tr>
            </thead>

            <?php
            $data = $conn->query("select * from $tableName");
            while ($d = $data->fetch_assoc()) {
                ?>
                <tbody>
                    <tr>
                    <td>
                            <?php echo $d['id']; ?>
                        </td>
                        <td>
                            <?php echo $d['nama_tamu']; ?>
                        </td>
                        <td>
                            <?php echo $d['id_tipe']; ?>
                        </td>
                        <td>
                        <?php echo $d['nomor_kamar']; ?>
                        </td>
                        <td>
                            <?php echo $d['tanggal_checkin']; ?>
                        </td>
                        <td>
                            <?php echo $d['tanggal_checkout']; ?>
                        </td>
                        <td>
                            <?php echo $d['total_harga']; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>" style="text-decoration: none;">
                                <button class="btn btn-outline-info">Edit</button>
                            </a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>">
                                <button class="btn btn-outline-danger">Hapus</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah data <?php echo $tableName ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="action/input.php">
                            <div>
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" name="nama_tamu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">ID Tipe</label>
                                    <input type="number" class="form-control" name="id_tipe" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputId" class="form-label">Nomor Kamar</label>
                                    <input type="number" class="form-control" name="nomor_kamar" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">Check-In</label>
                                    <input type="date" class="form-control" name="checkin" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">Check-Out</label>
                                    <input type="date" class="form-control" name="checkout" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">Harga</label>
                                    <input type="number" class="form-control" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

        function showAlert(title, text) {
            Swal.fire({
                title: title,
                text: text,
            })
        }
    </script>
</body>

</html>