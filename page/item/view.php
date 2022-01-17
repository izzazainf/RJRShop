
<?php require"db_connect.php"; ?>

<div class="container">
            <div class="row">
                <?php
                if($_GET['game']==1)
                {
                    include "kiri-ml.php";
                }
                if($_GET['game']==3)
                {
                    include "kiri-ff.php";
                }
                if($_GET['game']==2)
                {
                    include "kiri-pubg.php";
                }
                
                
                ?>


                <div class="col-sm-7">

                    <form action="page/item/proses.php" method="POST">
                        <!-- ISI ID -->
                        <div class="isi-id">
                            <div class="isi-data">
                                <p class="nomor">1</p>
                                <h3 class="tahapan">Masukkan user ID</h3>
                                <div class="row">
                                    <div class="col">
                                    <input type="text" class="form-control" id="ml.user" placeholder="Masukkan user ID" aria-label="First name" name="id_user">
                                    </div>
                                    <?php 
                                    if($_GET['game']==1)
                                    {?>
                                        <div class="col">
                                        <input type="text" class="form-control" id="ml.zone" placeholder="Masukkan zone ID" aria-label="Last name" name="id_zone">
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- PILIH VOUCHER -->
                        
                        <div class="opsi-cash">
                            <p class="nomor">2</p>
                            <h3 class="tahapan">Pilih jumlah yang ingin dibeli</h3>


                            <div class="pilih">
                                <?php
                                $game=$_GET['game'];
                                $select ="SELECT*FROM tbl_item WHERE game_id=$game";
                                $query= mysqli_query($conn, $select);
                                while ($data = mysqli_fetch_assoc($query)) { 
                                // var_dump($data);

                                ?>
                                
                                    <input type="radio" class="btn-check" name="jumlah-item" id="<?php echo $data["item_id"];?>" value="<?php echo $data["item_id"]; ?>">
                                    <label class="btn btn-outline-warning" for="<?php echo $data["item_id"];?>" >
                                    <u><b><p class="jumlah" style="color:black;"><?php echo $data["item_nama"];?></p></b></u>  
                                    <p class="harga" style="color:black;">Rp. <?php echo $data["item_harga"];?></p>

                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- PILIH METODE BAYAR -->
                        <div class="pilih-bayar">
                          <p class="nomor">3</p>
                            <h3 class="tahapan">Pilih metode pembayaran untuk melakukan transaksi</h3>
                            <div class="pilih-metode-bayar">
                                <?php
                                    $qmetode ="SELECT*FROM tbl_metode";
                                    $query= mysqli_query($conn, $qmetode);
                                    while ($data = mysqli_fetch_assoc($query)) { 
                                    // var_dump($data);

                                ?>

                                <input type="radio" class="btn-check" name="metode-pembayaran" id="<?php echo $data["metode_id"];?>"  value="<?php echo $data["metode_id"];?>">
                                <label class="btn btn-outline-warning" for="<?php echo $data["metode_id"];?>" style="color:black;"><?php echo $data["metode_nama"];?></label>
                                <br>

                                <?php }?>


                            </div>
                        </div>

                        <!-- BUTTON INPUT -->
                            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                              <button class="btn btn-save" type="submit" name="selanjutnya">SELANJUTNYA</button>
                            </div>

                    </form>
                </div>
          </div>
        </div>