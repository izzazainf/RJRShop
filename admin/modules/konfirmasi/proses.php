<?php

// Panggil koneksi database.php untuk koneksi database
require_once "../../db_connect.php";

    if ($_GET['act']=='terima') 
    {
        if (isset($_GET['bayar'])) 
        {
            $transid=$_GET['transaksi'];
            $terima='pembayaran selesai';
            mysqli_query($conn, "UPDATE tbl_pembayaran SET pembayaran_status  = '$terima' WHERE pembayaran_id      = '$transid'");

            mysqli_query($conn, "UPDATE user_transaksi SET transaksi_status='selesai' WHERE transaksi_id='$transid' ");
            header("Location:../../main.php?module=konfirmasi");
        }
    }

    elseif ($_GET['act']=='tolak') 
    {
        if (isset($_GET['bayar'])) 
        {
            $transid=$_GET['transaksi'];
            $tolak='pembayaran ditolak';
            mysqli_query($conn, "UPDATE tbl_pembayaran SET pembayaran_status  = '$tolak' WHERE pembayaran_id      = '$transid'");

            mysqli_query($conn, "UPDATE user_transaksi SET transaksi_status='proses' WHERE transaksi_id='$transid' ");
            header("Location:../../main.php?module=konfirmasi");
               
                 
        }
    }       
      
?>