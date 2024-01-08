<?php
include '../.config/db.php';
$base = basename(__FILE__);
$tableName = explode('.', $base);
$tableName = $tableName[0];
?>

<html>

<head>
    <title>
        <?php echo $tableName ?> -
        <?php echo $webname ?>
    </title>

    <link rel="stylesheet" href="../.css/style.css">

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
            <a class="navbar-brand" href="../">
                <img src="../.media/logo.png"
                    alt="sriwijaya logo" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
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
                                echo "<li><a class='dropdown-item' href='../user/" . $row[0] . ".php'>" . $row[0] . "</a></li>";
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
        <table class="table table-striped">
            <thead class="table-secondary">
                <tr>
                    <?php
                    $field = $conn->query("DESCRIBE $tableName");
                    while ($row = $field->fetch_array()) {
                        echo "<th>" . strtoupper($row['Field']) . "</th>";
                    }
                    ?>
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
                            <button class="btn btn-outline-secondary"
                                onclick="showAlert(`KETERANGAN <?php echo $tableName ?> <?php echo $d['id']; ?>: `, `<?php echo $d['keterangan'] ?>`)">Lihat
                                keterangan</button>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
    <!-- End Content -->

    <script>
        function showAlert(title, text) {
            Swal.fire({
                title: title,
                text: text,
            })
        }
    </script>
</body>

</html>