<?php
    require_once("../../db_connect.php");
	var_dump($_POST);
	$transid=$_POST['id'];
	mysqli_query($conn, "UPDATE user_transaksi SET transaksi_status='selesai' WHERE transaksi_id='$transid' ");
	header("Location:../../main.php?module=pesanan");


?>