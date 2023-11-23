<?php
require 'koneksi.php';
session_start();
$join = mysqli_query($conn, "SELECT * FROM masyarakat JOIN pengaduan ON masyarakat.nik = pengaduan.nik");

$nik = $_SESSION['nik'];
$laporan = htmlspecialchars($_POST['isi_laporan']);
$namaFoto = $_FILES['foto']['name'];
$asalFoto = $_FILES['foto']['tmp_name'];
move_uploaded_file($asalFoto, "../img/$namaFoto");


$laporanBaru = mysqli_query($conn, "INSERT INTO pengaduan VALUES ('', NOW(), '$nik', '$laporan', '$namaFoto', '0')");

if ($laporanBaru) {
    echo "
        <script>
            alert('Laporan anda sudah berhasil terkirim');
            window.location.href = '../detailPengaduan.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal mengirim laporan. Silakan coba lagi.');
            window.location.href = '../pengaduan.php';
        </script>
    ";
}