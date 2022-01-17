<?php
$no = 1;
require_once "db_connect.php";
// fungsi query untuk menampilkan data dari tabel konsumen
$query = mysqli_query($conn, "SELECT * FROM user_data");

?>
<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i class="ace-icon fa fa-user"></i> Member RJRShop
		</h1>
	</div>
	<!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Daftar Member 
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Id konsumen</th>
									<th>Nama konsumen</th>
									<th>Telepon</th>
									<th>Email</th>
								</tr>
							</thead>

							<tbody>
							<?php
                            while ($data = mysqli_fetch_assoc($query)) { 
                            ?>
                            	<tr>
									<td width="30" class="center"><?php echo $no; ?></td>
									<td width="100"><?php echo $data['user_id']; ?></td>
									<td width="180">
										<?php echo $data['user_nama']; ?>
									</td>
									<td width="60" align="center"><?php echo $data['user_contact']; ?></td>
									<td width="100"><?php echo $data['user_email']; ?></td>
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