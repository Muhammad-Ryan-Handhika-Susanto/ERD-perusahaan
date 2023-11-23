<?php

require 'koneksi.php';

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username'");

    // cek apakah ada hasil dari query
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

//         echo '<pre>';
// print_r($row);
// echo '</pre>';
// die();

        $_SESSION['user_id'] = $row['id_petugas'];

        if (password_verify($password, $row['password'])) {
            echo "
                    <script>
                        alert('Selamat datang $username di layanan MRHS');
                        document.location.href = '../detailPengaduanAdmin.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Password yang Anda masukkan salah');
                        document.location.href = '../loginAdmin.php';
                    </script>
                ";
        }
    } else {
        echo "
                <script>
                    alert('Akun anda belum terdaftar');
                    document.location.href = '../loginAdmin.php';
                </script>
            ";
    }
}