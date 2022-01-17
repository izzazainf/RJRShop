<?php
require_once "db_connect.php";
$tampil="SELECT
				user_data.user_nama, 
				user_transaksi.user_id, 
				tbl_item.item_nama, 
				user_transaksi.transaksi_tanggal, 
				tbl_pembayaran.metode_id, 
				tbl_metode.metode_nama, 
				tbl_pembayaran.pembayaran_status,
				user_transaksi.transaksi_id,
				tbl_item.item_harga,
				user_transaksi.transaksi_status
				FROM
				user_data
				INNER JOIN
				user_transaksi
				ON 
					user_data.user_id = user_transaksi.user_id
				INNER JOIN
				tbl_item
				ON 
					user_transaksi.item_id = tbl_item.item_id
				INNER JOIN
				tbl_pembayaran
				ON 
					user_transaksi.transaksi_id = tbl_pembayaran.transaksi_id
				INNER JOIN
				tbl_metode
				ON 
					tbl_pembayaran.metode_id = tbl_metode.metode_id";
$no = 1;
$query = mysqli_query($conn, $tampil);
?>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i style="margin-right:7px" class="ace-icon fa fa-shopping-cart"></i> Data Pesanan
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Data Pesanan Barang
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Tanggal Transaksi</th>
									<th>Nama Konsumen</th>
									<th>Item</th>
                                    <th>Total Pembayaran</th>
                                    <th>Metode Pembayaran</th>
									<th>Transaksi status</th>
								</tr>
							</thead>

							<tbody>
							<?php                  
                            while ($data = mysqli_fetch_assoc($query)) 
							{ 
                            ?>
                            	<tr>
									<td width="40" class="center"><?php echo $no; ?></td>
									<td width="100" class="center"><?php echo date('d-M-Y', strtotime($data["transaksi_tanggal"]));?></td>
									<td width="150"><?php echo $data['user_nama']; ?></td>
									<td width="70" class="center"><?php echo $data['item_nama']; ?></td>
									<td width="100" align="right">Rp. <?php echo $data["item_harga"]; ?></td>
									<td width="150"><?php echo $data['metode_nama']; ?></td>
									<td width="150"><?php echo $data['transaksi_status']; ?></td>

									<td width="60" class="center">
										<!-- <div class="action-buttons">
											<a data-rel="tooltip" data-placement="top" title="Detail" class="blue tooltip-info" href="?module=form_pesanan&form=detail&id=<?php// echo $data['transaksi_id']; ?>">
												<i class="ace-icon fa fa-search-plus bigger-130"></i>
											</a>
										</div> -->
										<form action="modules/pesanan/proses.php" method="post">
										<input type="hidden" name="id" value="<?php echo $data['transaksi_id'];?>">
										<button type="submit" name="terima">
										Selesai
										</button>
										</form>
									</td>
								</tr>
							<?php
                            	$no++;
                            } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->