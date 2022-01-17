<?php
include "../../db_connect.php";
$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$idtrans=$_POST['transaksi_id'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$bukti = $_FILES['bukti']['name'];
var_dump($_FILES);
        $x = explode('.', $bukti);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['bukti']['size'];
        $file_tmp = $_FILES['bukti']['tmp_name'];   
        $nama_file = $idtrans.$bukti;
        $savefile="../../pembayaran/".$nama_file;
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
            {
                if($ukuran < 1044070)
                {
                    $a=move_uploaded_file($file_tmp, $savefile);
                //     if($a==true)
                    $query = "UPDATE tbl_pembayaran SET 
                                             pembayaran_tanggal = '$tanggal', 
                                             pembayaran_nama = '$nama', 
                                             pembayaran_bukti = '$nama_file',
                                             pembayaran_status='menunggu konfirmasi'
                            WHERE pembayaran_id='$idtrans' ";
                    mysqli_query($conn, $query);
                    echo"unggah bukti sukses";
                    header("Location:../../main.php?page=konfirmasi");
                }
                else
                {
                    header("Location:../../main.php?page=unggah&&error=ukuran");
                }
            }
            else
            {
                header("Location:../../main.php?page=unggah&&error=ekstensi");
            } 

?>