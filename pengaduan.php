<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/pengaduan.css">
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
        <h2>Data Diri Pelapor</h2>
        <h4>Foto Pelapor</h4>
        <form action="proses/proses_pengaduan.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="foto" class="foto-pelapor" required>
            <h4>Laporan pengaduan</h4>
            <textarea name="isi_laporan" id="" cols="75" rows="6" class="laporan-pengaduan" required></textarea>
            <button class="btn-reset" type="button" onclick="reset()">Reset</button>
            <button class="btn-kirim" type="submit">Kirim</button>
        </form>
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

        function reset() {
            const foto = document.querySelector('.foto-pelapor');
            const isi = document.querySelector('.laporan-pengaduan');
            foto.innerHTML = '';
            isi.innerHTML = '';
        }
    </script>
</body>

</html>