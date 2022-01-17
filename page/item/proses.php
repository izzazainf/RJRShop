<?php
include "../../db_connect.php";
session_start();
//MENGAMBIL DATA DARI SESSION DAN TANGGAL
$userid = $_SESSION["user_id"];
$email  = $_SESSION["user_email"]; 
$tanggal=date('Y-m-d H:i:s', time());
$idtrans=34;
//MENGAMBIL DATA INPUTAN
$iduser=$_POST['id_user'];
$jumlah=$_POST['jumlah-item'];
$metode=$_POST['metode-pembayaran'];

//query mengambil data dari item
$qitem="SELECT
tbl_item.item_id, 
tbl_item.game_id
FROM
tbl_item WHERE item_id='$jumlah'";
$itemdata= mysqli_query($conn, $qitem)or die("GAGAL MENEMUKAN ITEM".mysqli_error($conn));
($data = mysqli_fetch_assoc($itemdata));
$itemid=$data['item_id'];
$gameid=$data['game_id'];

//generating ID untuk transaksi
$x = explode('@', $email);
$ekstensi = strtolower($x[0]);
$hitung="SELECT 
            user_transaksi.transaksi_id, 
            user_transaksi.user_id
            FROM
            user_transaksi
            WHERE
            user_id = '$userid'";

$a= mysqli_query($conn, $hitung);
$b=mysqli_num_rows($a);
$idtrans=$ekstensi.$b;


//INSERT DATA TRANSAKSI DAN PEMBAYARAN
if(isset($_POST['id_zone']))
{
    $idzone=$_POST['id_zone'];

    $transaksi = "INSERT INTO user_transaksi (transaksi_id, transaksi_tanggal, user_id, item_id, transaksi_game_user, transaksi_game_zone) VALUES ('$idtrans', '$tanggal', '$userid', '$itemid', '$iduser', '$idzone')";
    mysqli_query($conn, $transaksi)or die ("Gagal Perintah SQL".mysqli_error($conn));
                if($transaksi){                            
                    header('location:../../main.php');
                }
                else
                {                              
                    header('location:../../main.php?page=item&&game=1');
                }
}
else
{
    $transaksi = "INSERT INTO user_transaksi (transaksi_id, transaksi_tanggal, user_id, item_id, transaksi_game_user) VALUES ('$idtrans', '$tanggal', '$userid', '$itemid', '$iduser')";
    mysqli_query($conn, $transaksi)or die ("Gagal Perintah SQL".mysqli_error($conn));
}


$bayar="INSERT INTO tbl_pembayaran (pembayaran_id, transaksi_id, metode_id) VALUES ('$idtrans', '$idtrans', '5')";
mysqli_query($conn, $bayar)or die ("Gagal Perintah SQL".mysqli_error($conn));
header("Location:../../main.php?page=konfirmasi");
?>