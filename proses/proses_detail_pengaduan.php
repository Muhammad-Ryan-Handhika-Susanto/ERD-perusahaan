<?php
require "koneksi.php";

// function hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengaduan WHERE id_pengaduan=$id");

    return mysqli_affected_rows($conn);
}

// function ubah data
function ubah($data) {
    global $conn;
     $id     = $data['id'];
     $isi_laporan    = htmlspecialchars($data['isi_laporan']);
     $foto_laporan   = htmlspecialchars($data['foto']);
     
     $query = "UPDATE pengaduan SET 
                isi_laporan           = '$isi_laporan',
                foto                  = '$foto_laporan'
                WHERE id_pengaduan    = '$id'
            ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}