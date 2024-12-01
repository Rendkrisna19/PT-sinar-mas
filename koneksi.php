<?php
$host = "localhost"; // Host database
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "db_sinarmas"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>