<?php
require_once "db_connect.php";
$no = 1;
// fungsi query untuk menampilkan data dari tabel barang
$query = mysqli_query($conn, "SELECT
								tbl_game.game_nama, 
								tbl_item.*
								FROM
								tbl_item
								INNER JOIN
								tbl_game
								ON 
									tbl_item.game_id = tbl_game.game_id");
															
?>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i class="ace-icon fa fa-folder-o"></i> Daftar Item
			<a href="?module=form_barang&form=add">
                <button class="btn btn-primary pull-right">
					<i class="ace-icon fa fa-plus"></i> Tambah
				</button>
            </a>
		</h1>
	</div><!-- /.page-header -->
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Daftar Item RJRShop
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Id Item</th>
									<th>Nama Barang</th>
									<th>Nama Game</th>
									<th>Harga</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
							<?php
                            while ($data = mysqli_fetch_assoc($query)) { 
                            ?>
                            	<tr>
									<td width="30" class="center"><?php echo $no; ?></td>

									<td width="100">		
											<?php echo $data['item_id']; ?>
									</td>

									<td width="200">											
											<?php echo $data['item_nama']; ?>
									</td>

									<td width="80">
											<?php echo $data['game_nama']; ?>	
									</td>

									<td width="80" align="center">Rp. <?php echo $data['item_harga']; ?></td>

									<td width="60" class="center">
										<div class="action-buttons">
											<a data-rel="tooltip" data-placement="top" title="Ubah" style="margin-right:5px" class="blue tooltip-info" href="?module=form_barang&form=edit&id=<?php echo $data['item_id']; ?>">
												<i class="ace-icon fa fa-edit bigger-130"></i>
											</a>

											<a data-rel="tooltip" data-placement="top" title="Hapus" class="red tooltip-error" href="modules/barang/proses.php?act=delete&id=<?php echo $data['item_id'];?>" onclick="return confirm('Anda yakin ingin menghapus barang <?php echo $data['item_nama']; ?> ?');">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
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