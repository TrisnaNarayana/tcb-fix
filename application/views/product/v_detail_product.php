<?php
$this->load->view('include/header');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Detail Product
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Product</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header">
						<u><h4>
								<?=$detail->nama_product?> [<small>Dibuat Pada : <?=$detail->dibuat_pada?></small>]</h4></u>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-3 col-xs-12">
								<img src="<?=base_url().'img/merk/'.$detail->img_merk ;?>" class="img-responsive">
							</div>
							<div class="col-md-3 col-xs-12">
									<img src="<?=base_url().'img/product/'.$detail->foto_product ;?>" class="img-responsive">
								</div>
							<div class="col-md-6 col-xs-12">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Nama Perusahaan</th>
											<th>:</th>
											<th>
												<?=$detail->nama_merk?>
											</th>
										</tr>
										<tr>
											<th>Kategori</th>
											<th>:</th>
											<th>
												<?=$detail->nama_kategori?>
											</th>
										</tr>
										<tr>
												<th>Nama Product</th>
												<th>:</th>
												<th>
													<?=$detail->nama_product?>
												</th>
											</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>

		<!-- /.row -->

	</section>
	<!-- /.content -->
</div>


<?php $this->load->view('include/footer'); ?>