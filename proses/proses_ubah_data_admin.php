<?php
// koneksi ke database
require "proses_detail_pengaduan_admin.php";

// ambil data di url
$id = $_GET['id'];

// query data siswa berdasarkan id
$join = mysqli_query($conn, "SELECT * FROM masyarakat JOIN pengaduan ON masyarakat.nik = pengaduan.nik WHERE id_pengaduan='$id'");
$result = mysqli_fetch_array($join);
if (!$result) {
    echo "
        <script>
            alert('Data tidak ditemukan');
            document.location.href='../detailPengaduanAdmin.php';
        </script>
        ";
}

// var_dump($siswa);

// cek apakah tombol submit sudah dipencet atau belum
if (isset($_POST['submit'])) {

    // cek apakah data berhasil di update atau gagal
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil di ubah');
            document.location.href='../detailPengaduanAdmin.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data berhasil di ubah');
            document.location.href='../detailPengaduanAdmin.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <title>Update Data Siswa</title>
    <style>
        body {
            background-color: saddlebrown;
        }

        div {
            margin-top: 50px;
            width: 350px;
            height: 450px;
            border-radius: 10px;
            background-color: lightblue;
            position: relative;
            left: 510px;
        }

        h1 {
            color: cyan;
            text-align: center;
            font-family: cursive;
            text-shadow: 1px 1px 2px black, 0 0 25px greenyellow, 0 0 5px black;
            margin-top: 50px;
        }

        button {
            margin-left: 120px;
        }

        div ul li {
            margin-left: 10px;
            padding: 20px;
        }
        div ul li input {
            width: 280px;
        }
        .tanggapan {
            display: flex;
            outline: none;
            margin: auto;
        }
    </style>
</head>

<body>
    <h1>Tanggapi Laporan Masyarakat</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $result["id_pengaduan"] ?>">
        <div>
            <ul>
                <li>
                    <label for="status">Status : </label>
                    <select name="status" id="status">
                        <option value="0">0</option>
                        <option value="proses">proses</option>
                        <option value="selesai">selesai</option>
                        <option value="dibatalkan">dibatalkan</option>
                    </select>
                </li>
                <li>
                    <textarea name="tanggapan" class="tanggapan" id="" cols="30" rows="10" placeholder="Silahkan isi tanggapan anda"></textarea>
                </li>
            </ul>
            <button type="submit" name="submit" class="btn btn-outline-success">Update Data</button>
        </div>
    </form>
</body>

</html>