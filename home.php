<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
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
                <li><a href="pengaduan.php">Laporan</a></li>
                <li><a href="verifikasi.php">Verifikasi</a></li>
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

    <div class="container">
        <h1>Selamat datang di layanan MRHS</h1>
        <h2>semoga permasalahan yang anda alami cepat tuntas dan selesai</h2>
    </div>

    <div class="picture">
        <div class="picture1">
            <div class="logo">
                <img src="img/picture1.png" alt="picture1">
            </div>
            <div class="keterangan">
                <p>Selamat datang di layanan pengaduan masyarakat! Kami sangat antusias menyambut Anda di wadah di mana suara Anda menjadi panglima dalam mewujudkan perubahan positif. Di tengah hiruk-pikuk kehidupan sehari-hari, seringkali keluhan, masalah, atau ide-ide cemerlang tertahan dalam dada. Kami hadir di sini untuk memberi Anda tempat berbicara, mendengarkan, dan bersama-sama mencari solusi. Kami percaya bahwa setiap suara berharga dan mampu membentuk lingkungan yang lebih baik.</p>
            </div>
        </div>

        <div class="picture2">
            <div class="logo">
                <img src="img/picture2.png" alt="picture1">
            </div>
            <div class="keterangan">
                <p>Terima kasih telah mengunjungi platform pengaduan masyarakat kami. Di dunia yang terus bergerak maju, menjaga saluran komunikasi yang terbuka dan terpercaya adalah kunci. Kami berdiri di sini sebagai jembatan antara Anda dan pihak-pihak yang bertanggung jawab. Kami ingin Anda tahu bahwa setiap keluhan yang Anda sampaikan memiliki nilai, dan kami berkomitmen untuk mendengarkan setiap suara. Bergabunglah dengan kami dalam menjadikan setiap keluhan sebagai peluang untuk menghadirkan perubahan nyata.</p>
            </div>
        </div>
    </div>

</body>

</html>