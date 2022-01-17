<?php
require_once "db_connect.php";
var_dump($_POST); 
// if(!isset($_POST["konfirmasi"]))
// {
//     header("Location:main.php?page=konfirmasi?adaapa");
// }
$idtrans=$_POST["idtransaksi"];


?>

<div class="container">
<h4 class="mt-4 mb-5">KONFIRMASI PEMBAYARAN</h4>
        

        <form action="page/transaksi/proses.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="transaksi_id" value="<?php echo $idtrans;?>">
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Pembayaran</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    
            </div>
            <div class="row mb-3">
                <label for="pengirim_nama" class="col-sm-3 col-form-label">Nama Pengirim</label>
                <div class="col-sm-6">
                  <input type="name" class="form-control" id="pengirim_nama" name="nama" required>
                </div>
              </div>
            <div class="row mb-3">
              <label for="metode" class="col-sm-3 col-form-label ">Metode Pembayaran</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="metode" name="metode" required disabled>
              </div>
            </div>
            <div class="row ">
                <label for="formFile" class="form-label col-sm-3">Unggah Bukti Pembayaran</label>
                <input class="form-control col-sm-7 " type="file" id="formFile" style="width:47%;" name="bukti">
            </div>
            <div class="row mb-3 mt-3">
                <button type="submit" class="btn btn-primary col-sm-3" name="unggah">Konfirmasikan</button>
            </div>
            
          </form>
</div>