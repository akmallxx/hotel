<?php
include './.config/db.php';
$pageName = ucfirst(basename(__FILE__, ".php"));
?>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>
        Dashboard - <?php echo $webname ?>
    </title>
    <?php include 'header.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include 'header.php' ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>RESERVASI KAMAR</h3>
            </div>
            <div class="card-body">
                <form method="post" action="inputaksikamar.php">
                    <div class="form-group">
                        <label for="nama_tamu">Nama Tamu</label>
                        <input type="text" class="form-control" name="nama_tamu" id="nama_tamu" required>
                    </div>
                    <div class="form-group">
                        <label for="id_tipe">Tipe Kamar</label>
                        <select class="form-control" name="id_tipe" id="id_tipe" required>
                            <option value="">Pilih tipe kamar</option>
                            <?php
                            include "./.config/db.php";

                            $query = "SELECT id, tipe, harga, keterangan FROM kamar";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id_tipe = $row['id'];
                                $tipe_kamar = $row['tipe'];
                                $harga = $row['harga'];
                                $keterangan = $row['keterangan'];

                                echo "<option value='$id_tipe' data-harga='$harga'>$tipe_kamar</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomor_kamar">Nomor Kamar</label>
                        <select class="form-control" name="nomor_kamar" id="nomor_kamar" required>
                            <option value="">Pilih Nomor Kamar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="checkin">Check-in</label>
                        <input type="date" class="form-control" name="checkin" id="checkin" onchange="updateTotal()"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out</label>
                        <input type="date" class="form-control" name="checkout" id="checkout" onchange="updateTotal()"
                            required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" id="harga" name="harga" disabled>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function updateTotal() {
            var tipeKamarSelect = document.getElementById("id_tipe");
            var selectedOption = tipeKamarSelect.options[tipeKamarSelect.selectedIndex];
            var hargaKamar = selectedOption.getAttribute("data-harga");

            var checkinDate = new Date(document.getElementById("checkin").value);
            var checkoutDate = new Date(document.getElementById("checkout").value);
            var selisihHari = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));

            if (!isNaN(selisihHari) && hargaKamar) {
                var totalPembayaran = hargaKamar * selisihHari;
                document.getElementById("harga").value = totalPembayaran.toLocaleString('id');
            } else {
                document.getElementById("harga").value = 0;
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            var tipeKamarSelect = document.getElementById("id_tipe");
            var nomorKamarSelect = document.getElementById("nomor_kamar");

            tipeKamarSelect.addEventListener("change", function () {
                var selectedTipeKamar = this.value;

                nomorKamarSelect.innerHTML = '<option value="">Pilih Nomor Kamar</option>';

                if (selectedTipeKamar) {
                    fetch('get_nomor_kamar.php?id_tipe=' + selectedTipeKamar)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(nomor => {
                                var option = document.createElement("option");
                                option.text = nomor.nomor_kamar;
                                option.value = nomor.nomor_kamar;
                                nomorKamarSelect.add(option);
                            });
                        })
                        .catch(error => console.error('Error:', error));
                }
            });
        });

        // document.getElementById("submit").addEventListener("click", function () {
        //     alert("Booking berhasil!");
        // });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>