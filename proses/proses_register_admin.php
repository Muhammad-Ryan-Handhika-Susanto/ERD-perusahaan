<?php
require 'koneksi.php';

session_start();

if (isset($_SESSION['id_petugas'])) {
    header("Location:../pengaduanAdmin.php");
}

$nama = strtolower(stripslashes($_POST['nama']));
$username = strtolower(stripslashes($_POST['username']));
$password = mysqli_real_escape_string($conn, $_POST['password']);
$telp = $_POST['telp'];
$level = 'admin';

// cek username sudah ada atau belum
$result = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username'");

if (mysqli_fetch_assoc($result)) {
    echo "
            <script>
                alert('Username yang anda masukan sudah ada');
                document.location.href = '../registerAdmin.php';
            </script>
             ";
             exit();
}
// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambahkan user baru ke database
$data = mysqli_query($conn, "INSERT INTO petugas VALUES ('','$nama','$username','$password','$telp','$level')");
if ($data) {
    echo "
            <script>
                alert('Akun anda sudah berhasil terdaftar');
                document.location.href = '../loginAdmin.php';
            </script>
             ";
}
return mysqli_affected_rows($conn);