<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../db_connect.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['admin_username']) && empty($_SESSION['admin_password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else {
    if (isset($_POST['simpan'])) {
        if (isset($_SESSION['id_admin'])) {
            // ambil data hasil submit dari form
            $plama=$_POST['old_pass'];
            $pbaru=$_POST['new_pass'];
            $konfirmasi=$_POST['retype_pass'];

            // ambil data hasil session user
            $admin_id = $_SESSION['admin_id'];

            // seleksi password dari tabel pegawai untuk dicek
            $sql = mysqli_query($conn, "SELECT admin_password FROM tbl_admin WHERE admin_id= '$admin_id' ")
                                          or die('Ada kesalahan pada query seleksi password : '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($sql);

            if ($plama != $data['admin_password']){
                header("Location: ../../main.php?module=password&alert=1");
            }
            // jika input password lama sama dengan password didatabase, jalankan perintah untuk pengecekan selanjutnya
            else {

                // jika input password baru tidak sama dengan input ulangi password baru, 
                // alihkan ke halaman ubah password dan tampilkan pesan = 2 
                if ($pbaru != $konfirmasi){
                        header("Location: ../../main.php?module=password&alert=2");
                }

                // selain itu, jalankan perintah update password
                else {
                    // perintah query untuk mengubah data pada tabel admin
                    $query = mysqli_query($conn, "UPDATE tbl_admin SET admin_password = '$pbaru'
                                                                  WHERE admin_id  = '$admin_id'")
                                                    or die('Ada kesalahan pada query update password : '.mysqli_error($mysqli));   

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=password&alert=3");
                    }   
                }
            }
        }
    }   
}               
?>