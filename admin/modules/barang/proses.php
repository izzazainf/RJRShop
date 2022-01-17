<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../db_connect.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['admin_username']) && empty($_SESSION['admin_password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            var_dump($_POST);
            // ambil data hasil submit dari form
            $nama   = $_POST['item'];
            $id     = $_POST['id'];
            $game   = $_POST['game'];
            $harga  = $_POST['harga'];

            $cek=mysqli_query($conn, "SELECT tbl_item.item_id FROM tbl_item WHERE item_id='$id' ");
            if(mysqli_num_rows($cek)>0)
            {
                header("Location:../../main.php?module=form_barang&form=add&&error");
            }
            else
            {
                $query="INSERT INTO tbl_item (item_id, item_nama, game_id, item_harga) VALUES ('$id', '$nama', '$game', '$harga')";
                mysqli_query($conn, $query);
                header("Location:../../main.php?module=barang");

            }
            
            
        }   
    }
    
    elseif ($_GET['act']=='update') 
    {
        if (isset($_POST['simpan'])) 
        {
            if (isset($_POST['id'])) 
            {
                var_dump($_POST);
                $nama   = $_POST['item']; $id     = $_POST['id']; $harga  = $_POST['harga']; var_dump($_POST); $query="UPDATE tbl_item SET item_nama='$nama', item_harga='$harga' WHERE item_id='$id' "; mysqli_query($conn, $query); header("Location:../../main.php?module=barang");
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $item_id = $_GET['id'];
            var_dump($_GET);
    
            // perintah query untuk menghapus data pada tabel barang
            $query = mysqli_query($conn, "DELETE FROM tbl_item WHERE item_id='$item_id'");

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=barang&alert=berhasil");
            }
        }
    }       
}       
?>