<?php
// deklarasi variabel bantuan database
$server   = "localhost";
$username = "root";
$password = "";
$database = "rjrshop";

// koneksi database
$conn = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if ($conn->connect_error) {
    die('Koneksi Database Gagal : '.$conn->connect_error);
}
?>