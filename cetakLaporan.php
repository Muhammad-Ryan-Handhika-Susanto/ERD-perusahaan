<?php
require "proses/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pengaduan INNER JOIN masyarakat on pengaduan.nik = masyarakat.nik WHERE pengaduan.nik='$id'")->fetch_assoc();
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan Masyarakat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .report {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .report h2 {
            margin-top: 0;
        }
        .report p {
            margin: 0;
        }
        .date {
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Laporan Pengaduan Masyarakat</h1>
    
    <div class="report">
        <h2>Nama Pelapor : <?= $data['nama'] ?></h2>
        <p>Isi Laporan : <?= $data['isi_laporan'] ?></p>
        <p class="date">Tanggal: <?= $data['tgl_pengaduan'] ?></p>
        <p>Foto Laporan : <img src="img/<?= $data['foto']; ?>" alt="<?= $data['foto'] ?>" width="100px"></p>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
