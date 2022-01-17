<?php
// panggil file untuk koneksi ke database
require_once "db_connect.php";

// ambil data hasil submit dari form
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE admin_username='$username' AND admin_password='$password'");
 $rows  = mysqli_num_rows($query);
 if ($rows > 0) {
	$data  = mysqli_fetch_assoc($query);

	session_start();
	$_SESSION['admin_id']   = $data['admin_id'];
	$_SESSION['admin_username']   = $data['admin_username'];
	$_SESSION['admin_password']   = $data['admin_password'];
	$_SESSION['admin_nama'] = $data['admin_nama'];
	
	// lalu alihkan ke halaman admin
	header("Location: main.php?module=beranda");
}
else
{
	header("Location:index.php?eror=salah");
}
?>