<?php
// panggil file database.php untuk koneksi ke database
require_once "db_connect.php";

// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['admin_username']) && empty($_SESSION['admin_password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module']=='beranda') {
		include "modules/beranda/view.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih konsumen, panggil file view konsumen
	elseif ($_GET['module']=='konsumen') {
		include "modules/konsumen/view.php";
	}
	
	// jika halaman konten yang dipilih barang, panggil file view barang
	elseif ($_GET['module']=='barang') {
		include "modules/barang/view.php";
	}

	// jika halaman konten yang dipilih form barang, panggil file form barang
	elseif ($_GET['module']=='form_barang') {
		include "modules/barang/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih pesanan, panggil file view pesanan
	elseif ($_GET['module']=='pesanan') {
		include "modules/pesanan/view.php";
	}

	// jika halaman konten yang dipilih form pesanan, panggil file form pesanan
	elseif ($_GET['module']=='form_pesanan') {
		include "modules/pesanan/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih konfirmasi, panggil file view konfirmasi
	elseif ($_GET['module']=='konfirmasi') {
		include "modules/konfirmasi/view.php";
	}

	// jika halaman konten yang dipilih form konfirmasi, panggil file form konfirmasi
	elseif ($_GET['module']=='form_konfirmasi') {
		include "modules/konfirmasi/form.php";
	}
	// ---------------------------------------------------------------------------------

	
	// jika halaman konten yang dipilih laporan, panggil file view laporan
	elseif ($_GET['module']=='laporan') {
		include "modules/laporan/view.php";
	}

	// jika halaman konten yang dipilih grafik, panggil file view grafik
	elseif ($_GET['module']=='grafik') {
		include "modules/grafik/view.php";
	}

	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module']=='password') {
		include "modules/password/view.php";
	}
}
?>