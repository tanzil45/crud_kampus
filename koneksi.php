<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "db_kampus"; // Pastikan ini sesuai dengan database yang dibuat di langkah 1

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>