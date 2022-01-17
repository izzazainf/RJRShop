<?php  

require_once "db_connect.php";
// fungsi untuk pengecekan tampilan form
// jika form detail data yang dipilih
if ($_GET['form']=='detail') { 
	$transid=$_GET['id'];
	$tampil="SELECT
					user_data.user_nama, 
					user_data.user_id, 
					user_transaksi.transaksi_id, 
					tbl_item.item_harga, 
					user_transaksi.transaksi_tanggal, 
					tbl_pembayaran.pembayaran_tanggal, 
					tbl_pembayaran.pembayaran_bukti, 
					tbl_pembayaran.pembayaran_nama, 
					tbl_pembayaran.pembayaran_status, 
					tbl_metode.metode_nama,
					tbl_pembayaran.pembayaran_id
				FROM
					tbl_pembayaran
					INNER JOIN
					user_transaksi
					ON 
						tbl_pembayaran.transaksi_id = user_transaksi.transaksi_id
					INNER JOIN
					tbl_metode
					ON 
						tbl_pembayaran.metode_id = tbl_metode.metode_id
					INNER JOIN
					user_data
					ON 
						user_transaksi.user_id = user_data.user_id
					INNER JOIN
					tbl_item
					ON 
						user_transaksi.item_id = tbl_item.item_id WHERE pembayaran_id='$transid'";
	$query = mysqli_query($conn, $tampil);
    $data = mysqli_fetch_assoc($query);
	$bukti=$data['pembayaran_bukti'];
	$user_nama=$data['user_nama'];
	$tanggal_transaksi=$data['transaksi_tanggal'];
	$harga=$data['item_harga'];
	$tanggal_bayar=$data['pembayaran_tanggal'];
	$status=$data['pembayaran_status'];
	$metode=$data['metode_nama'];

?>
 	<!-- tampilkan form detail data -->
	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Detail Pembayaran
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<div class="row">
					<div class="col-xs-12 col-sm-4 center">
						<span class="profile-picture">
							<img class="editable img-responsive" alt="Bukti Pembayaran" id="avatar2" src="../pembayaran/<?php echo $bukti; ?>" width="365" />
						</span>
					</div><!-- /.col -->

					<div class="col-xs-12 col-sm-8">
						<div style="font-size:14px" class="profile-user-info">
							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Nama Akun </div>

								<div class="profile-info-value">
									<span><?php echo $user_nama; ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Tanggal Pembelian </div>

								<div class="profile-info-value">
									<span><?php echo date('d-M-Y', strtotime($tanggal_transaksi)); ?></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Harga Item </div>

								<div class="profile-info-value">
									<span>Rp. <?php echo $harga; ?></span>
								</div>
							</div>
						</div>

						<div class="hr hr-8 dotted"></div>

						<div style="font-size:14px" class="profile-user-info">
							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Tanggal Bayar </div>

								<div class="profile-info-value">
									<span><?php echo date('d-M-Y', strtotime($tanggal_bayar)); ?></span>
								</div>
							</div>


						<div style="font-size:14px" class="profile-user-info">
							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Metode Pembayaran </div>

								<div class="profile-info-value">
									<span><?php echo $metode; ?></span>
								</div>
							</div>
						</div>


						<div style="font-size:14px" class="profile-user-info">
							<div class="profile-info-row">
								<div style="width:190px" class="profile-info-name"> Status Pembayaran </div>

								<div class="profile-info-value">
									<span><?php echo $status; ?></span>
								</div>
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
				
				<div class="clearfix form-actions">
					<div class="col-md-offset-0 col-md-12">
					<?php  
					if ($status!=='pembayaran selesai') { 
					?>
						<a style="width:100px" href="modules/konfirmasi/proses.php?act=terima&bayar=<?php echo $transid; ?>&transaksi=<?php echo $transid; ?>" class="btn btn-primary">Terima</a>
						&nbsp; &nbsp;
						<a style="width:100px" href="modules/konfirmasi/proses.php?act=tolak&bayar=<?php echo $transid; ?>&transaksi=<?php echo $transid; ?>" class="btn btn-danger">Tolak</a>
						&nbsp; &nbsp;
					<?php
					}
					?>
						<a style="width:100px" href="?module=konfirmasi" class="btn">Kembali</a>
					</div>
				</div>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
<?php
}
?>