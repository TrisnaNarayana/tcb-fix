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
								<?=$detail->nama_product?>
							</h4></u>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-8">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="embed-responsive embed-responsive-16by9">
											<object class="embed-responsive embed-responsive-16by9" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,18,0"
											 id="fullscreen" align="middle">
												<param name="allowFullScreen" value="true" />
												<param name="movie" value="fullscreen.swf" />
												<param name="bgcolor" value="#fff" />
												<embed src="<?=base_url().'img/product/'.$detail->swf?>" allowFullScreen="true" bgcolor="#333333" name="fullscreen" align="middle"
												 type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
											</object>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Nama Product</th>
											<th>:</th>
											<th>
												<?=$detail->nama_product?>
											</th>
										</tr>
										<tr>
											<th>Perusahaan</th>
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
													<th colspan="3"><a href="<?=base_url().'img/product/'.$detail->pdf?>" class="btn btn-block btn-sm btn-success"><i class="fa fa-download"></i> Unduh Pdf</a></th>
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