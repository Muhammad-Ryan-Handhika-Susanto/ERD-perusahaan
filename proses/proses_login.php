    <?php

    require 'koneksi.php';

    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username'");

        // cek apakah ada hasil dari query
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['nik'] = $row['nik'];

            if (password_verify($password, $row['password'])) {
                echo "
                        <script>
                            alert('Selamat datang $username di layanan MRHS');
                            document.location.href = '../home.php';
                        </script>
                    ";
            } else {
                echo "
                        <script>
                            alert('Password yang Anda masukkan salah');
                            document.location.href = '../login.php';
                        </script>z
                    ";
            }
        } else {
            echo "
                    <script>
                        alert('Akun anda belum terdaftar');
                        document.location.href = '../login.php';
                    </script>
                ";
        }
    }