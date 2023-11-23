<?php
require "koneksi.php";
session_start();
// function ubah data
function ubah($data) {
    global $conn;
     $id     = $data['id'];
     $status    = htmlspecialchars($data['status']);
     
     $query = "UPDATE pengaduan SET 
                status           = '$status'
                WHERE id_pengaduan    = '$id'
            ";
    mysqli_query($conn, $query);
    $pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'")->fetch_assoc();

    mysqli_query($conn, "INSERT INTO tanggapan VALUES ('','$id','$pengaduan[tgl_pengaduan]','$data[tanggapan]','$_SESSION[user_id]')");
    
    return mysqli_affected_rows($conn);
}