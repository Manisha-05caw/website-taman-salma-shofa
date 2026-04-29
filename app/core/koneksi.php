<?php
// Detail Koneksi Database dari InfinityFree
$host = "localhost"; // MySQL Hostname
$user = "root";           // MySQL Username
$pass = "";            // MySQL Password
$db  = " db_salma_shofa"; // Nama Database

$koneksi = mysqli_connect($host, $user, $pass, $db);

// BARIS AJAIB: Menyamakan bahasa (encoding) antara PHP dan MySQL
mysqli_set_charset($koneksi, "utf8mb4");

if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>