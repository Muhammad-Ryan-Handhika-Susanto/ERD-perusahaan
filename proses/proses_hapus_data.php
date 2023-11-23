<?php
require 'proses_detail_pengaduan.php';

$id = $_GET['id'];

if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil di hapus');
            document.location.href='../detailPengaduan.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal di hapus');
            document.location.href='../detailPengaduan.php';
        </script>
        ";
}