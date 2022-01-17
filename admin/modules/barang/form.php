<?php  
require_once "db_connect.php";
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?>
 	<!-- tampilkan form add data -->
	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Tambah Barang
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/barang/proses.php?act=insert" method="POST" >
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Nama Item</label>

							<div>
								<input type="text" class="form-control" name="item" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Item_id</label>

							<div>
								<input type="text" class="form-control" name="id" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Nama Game</label>

							<div>
							<select class="form-select" aria-label="Default select example" name="game">
									<option selected>-----Pilih Nama Game----</option>
									<option value="1">Mobile Legend</option>
									<option value="2">PUBG Mobile</option>
									<option value="3">Free Fire</option>
							</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Harga</label>

							<div>
								<input type="number" class="form-control" name="harga" required />
							
							</div>
						</div>
					</div>
						<div class="clearfix form-actions">
							<div class="col-md-offset-0 col-md-12">
								<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
								&nbsp; &nbsp; 
								<a style="width:100px" href="?module=barang" class="btn">Batal</a>
							</div>
						</div>
					
				</form>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
<?php
}
// jika form edit data yang dipilih
elseif ($_GET['form']=='edit') { 
	if (isset($_GET['id'])) {
	    // fungsi query untuk menampilkan data dari tabel barang
		$id=$_GET['id'];
		$tampil="SELECT
					tbl_item.*, 
					tbl_game.game_nama
				FROM
					tbl_item
					INNER JOIN
					tbl_game
					ON 
						tbl_item.game_id = tbl_game.game_id WHERE item_id='$id' ";
	    $query = mysqli_query($conn, $tampil );
	    $data  = mysqli_fetch_assoc($query);

		$item_id		= $data['item_id'];
		$item_nama		= $data['item_nama'];
		$game			= $data['game_nama'];
		$harga			= $data['item_harga'];
  	}
?>
	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Edit Item
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/barang/proses.php?act=update" method="POST" >
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Nama Item</label>

							<div>
								<input type="text" class="form-control" name="item" required value="<?php echo $item_nama; ?>" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Item_id</label>

							<div>
								<input type="text" class="form-control" name="" required value="<?php echo $item_id; ?>" disabled/>
								<input type="hidden" name="id" value="<?php echo $item_id; ?>">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Nama Game</label>

							<div>
								<input type="text" class="form-control" name="game" required value="<?php echo $game; ?>" disabled/>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Harga</label>

							<div>
								<input type="text" class="form-control" name="harga" required value="<?php echo $harga; ?>" />
							
							</div>
						</div>
					</div>
						<div class="clearfix form-actions">
							<div class="col-md-offset-0 col-md-12">
								<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
								&nbsp; &nbsp; 
								<a style="width:100px" href="?module=barang" class="btn">Batal</a>
							</div>
						</div>
					
				</form>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
<?php
}
?>
