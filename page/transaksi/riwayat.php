
<?php
require_once "db_connect.php";
if(isset($_SESSION["user_email"])){
                $tampung=$_SESSION["user_email"];
                $select="SELECT
                user_data.user_email,
                user_transaksi.*,
                tbl_pembayaran.pembayaran_status,
                tbl_metode.metode_nama,
                tbl_item.item_nama,
                tbl_item.item_harga
            FROM
                user_data
                INNER JOIN
                user_transaksi
                ON
                    user_data.user_id = user_transaksi.user_id
                INNER JOIN
                tbl_pembayaran
                ON
                    user_transaksi.transaksi_id = tbl_pembayaran.transaksi_id
                INNER JOIN
                tbl_metode
                ON
                    tbl_pembayaran.metode_id = tbl_metode.metode_id
                INNER JOIN
                tbl_item
                ON
                    user_transaksi.item_id = tbl_item.item_id
            WHERE user_email = '$tampung'";

                $query=mysqli_query($conn, $select);



                ?>

                <div class="container">
                        <h3>RIWAYAT TRANSAKSI</h3>
                        <table class="table table-striped">
                                <thead>
                                <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">ID Game</th>
                                        <th scope="col">ID Zone</th>
                                        <th scope="col">Metode Pembayaran</th>
                                        <th scope="col">Status  Transaksi</th>
                                        <th scope="col">Status Pembayaran</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $hitung = 1;
                                        while ($data = mysqli_fetch_assoc($query)) {

                                        // var_dump($hitung);?>

                                <tr>
                                        <th scope="row"><?php echo $hitung;?></th>
                                        <td><?php echo date('d-M-Y', strtotime($data["transaksi_tanggal"]) );?></td>
                                        <td><?php echo $data["item_nama"];?></td>
                                        <td>Rp. <?php echo $data["item_harga"];?></td>
                                        <td><?php echo $data["transaksi_game_user"];?></td>
                                        <td><?php echo $data["transaksi_game_zone"];?></td>
                                        <td><?php echo $data["metode_nama"];?></td>
                                        <td><?php echo $data["transaksi_status"];?></td>
                                        <td><?php echo $data["pembayaran_status"];?></td>
                                </tr>
                                <?php $hitung+=1;

                                } ?>

                                </tbody>
                        </table>
                </div>

                <?php
                }
                else{
                    header("Location:logindulu.php");
                }
                ?>


<br> <br> <br> <br> <br> <br> <br> <br> <br>