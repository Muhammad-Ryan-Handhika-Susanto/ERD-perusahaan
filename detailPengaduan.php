<?php
require "proses/proses_detail_pengaduan.php";
session_start();
$nik = $_SESSION['nik'];
$join = mysqli_query($conn, "SELECT * FROM pengaduan JOIN masyarakat ON masyarakat.nik = pengaduan.nik where masyarakat.nik='$nik'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/detailPengaduan.css">
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><a href="home.php">MRHS</a></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="#">Laporan</a></li>
                <li><a href="#">Verifikasi</a></li>
                <li class="services">
                    <a href="#">Profil</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="#">Akun</a></li>
                        <li><a href="registerAdmin.php">Admin</a></li>
                        <li><a href="proses/proses_logOut.php">Logout</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>

    <div class="laporan">
        <h1>Laporan Pengaduan</h1>
        <button class="btn" type="button" onclick="redirectToPagePengaduan()">Laporan</button>
        <button class="btn" type="button" onclick="redirectToPageDetailPengaduan()">Detail Laporan</button>
        <h2>Laporan anda</h2>
        <div class="scroll">
            <table>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama Pelapor</th>
                    <th scope="col">isi Laporan</th>
                    <th scope="col">Bukti Foto</th>
                    <th scope="col">Status</th>
                    <th scope="col">aksi</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($join as $data) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["isi_laporan"] ?></td>
                        <td><img src="img/<?= $data['foto']; ?>" alt="<?= $data['foto'] ?>" width="100px"></td>
                        <td><?= $data["status"] ?></td>
                        <td>
                            <a href="proses/proses_hapus_data.php?id=<?= $data["id_pengaduan"] ?>">Delete</a>
                            <br><br>
                            <a href="proses/proses_ubah_data.php?id=<?= $data["id_pengaduan"] ?>">Update</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div class="petunjuk">
        <h1>Petunjuk</h1>
        <div class="peringatan">
            <p>Silahkan isi semua data yang ada di <b>Laporan</b> dengan baik dan benar!</p>
        </div>
        <div class="keterangan">
            <p>
                <b>Pelapor</b> adalah pihak yang melaporkan suatu peristiwa, silahkan isi data diri anda dengan benar dan dapat di pertanggung jawabkan.
                <br><br>
                <b>Peristiwa yang di laporkan</b> harus dibuat dengan rinci, seperti apa peristiwa yang anda laporkan, disertai waktu kejadian, tempat kejadian, dan apa yang terjadi.
                <br><br>
                <b>Saksi</b> merupakan pihak yang berada di lokasi ketika peristiwa terjadi
            </p>
        </div>
    </div>
    <script>
        function redirectToPagePengaduan() {
            document.location.href = "pengaduan.php";
        }

        function redirectToPageDetailPengaduan() {
            document.location.href = "detailPengaduan.php";
        }
    </script>
</body>

</html>