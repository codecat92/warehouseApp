<?php 
// Aktifkan pelaporan kesalahan
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "inventory");

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
