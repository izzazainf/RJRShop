<?php
require_once "db_connect.php";
$tampil="SELECT
				tbl_pembayaran.pembayaran_tanggal, 
				tbl_pembayaran.pembayaran_status, 
				tbl_pembayaran.transaksi_id, 
				tbl_item.item_nama, 
				user_data.user_nama,
				tbl_item.item_harga
				FROM
				tbl_item
				INNER JOIN
				user_transaksi
				ON 
					tbl_item.item_id = user_transaksi.item_id
				INNER JOIN
				tbl_pembayaran
				ON 
					tbl_pembayaran.transaksi_id = user_transaksi.transaksi_id
				INNER JOIN
				user_data
				ON 
					user_transaksi.user_id = user_data.user_id";
 $no = 1;
 $query = mysqli_query($conn, $tampil);
?>
<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i style="margin-right:7px" class="ace-icon fa fa-retweet"></i> Data Konfirmasi Pembayaran
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Data Konfirmasi Pembayaran
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Tanggal Pembayaran</th>
									<th>Nama</th>
									<th>Nama Item</th>
                                    <th>Harga</th>
                                    <th>Status</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
							<?php
                           
                      
                            while ($data = mysqli_fetch_assoc($query)) { 
                            ?>
                            	<tr>
									<td width="40" class="center"><?php echo $no; ?></td>
									<td width="100" class="center"><?php echo date('d-M-Y', strtotime($data["pembayaran_tanggal"]));?></td>
									<td width="150"><?php echo $data['user_nama']; ?></td>
									<td width="70" class="center"><?php echo $data["item_nama"] ?></td>
									<td width="100" align="right">Rp. <?php echo $data["item_harga"]; ?></td>
									<td width="150"><?php echo $data['pembayaran_status']; ?></td>

									<td width="60" class="center">
										<div class="action-buttons">
											<a data-rel="tooltip" data-placement="top" title="Detail" class="blue tooltip-info" href="?module=form_konfirmasi&form=detail&id=<?php echo $data['transaksi_id']; ?>">
												<i class="ace-icon fa fa-search-plus bigger-130"></i>
											</a>
										</div>
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