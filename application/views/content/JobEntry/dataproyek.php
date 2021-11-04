<head>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>


<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Proyek<p></p>

			<label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dataproyek->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dataproyek->JobNm ?></label>
			<br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dataproyek->Lokasi ?></label></>

		</h1>
		<!-- <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard')  ?>><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Detail Job Action</li>
        </ol> -->
	</section>

	<!-- <Section class="content"> -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<a href="<?= site_url('job/sub_job/' . $dataproyek->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
							<a href="<?= site_url('job/datakontrak/' . $dataproyek->JobNo) ?>" class="btn btn-primary">NEXT TO DATA KONTRAK &nbsp <i class="fa fa-arrow-right"></i></a>

							<section class="content-header">
								<div class="row">
									<div class="col-md-6">
										<div class="box box-warning">
											<div class="box-header with-border">
												<div class="box-body">
													<div class="form-group">
														<label>Job No</label>
														<input type="text" name="JobNo" value="<?php echo $dataproyek->JobNo ?>" id="JobNo" class="form-control" readonly>
														<label>Nama Proyek</label>
														<input type="text" name="JobNm" value="<?php echo $dataproyek->JobNm ?>" id="JobNm" class="form-control" readonly>
														<label>Lokasi</label>
														<input type="text" name="Lokasi" value="<?php echo $dataproyek->Lokasi ?>" id=" Lokasi" class="form-control" readonly>
														<label>Status Proyek</label>
														<input type="text" name="StatusJob" id="StatusJob" class="form-control" value="<?php echo $dataproyek->StatusJob ?>" readonly>
														<!-- <select class="form-control" name="StatusJob" id="StatusJob" onchange="changePesertaTender()">
                                                            <option value="Pelaksanaan">Pelaksanaan</option>
                                                            <option value="Pemeliharaan">Pemeliharaan (Pra FHO)</option>
                                                        </select> -->
														<label>Kontraktor</label>
														<input type="text" name="CompanyId" id="CompanyId" class="form-control" value="<?php echo $dataproyek->CompanyId ?>" readonly>
														<label class="form-label" for="customFile">Logo Company</label>
														<!-- <input type="file" class="form-control" name="LogoCompany" id="cutomFile"> -->
														<textarea name="Logo" id="Logo" class="form-control"><?php echo $dataproyek->Logo ?></textarea>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="box box-warning">
											<div class="box-header with-border">
												<div class="box-body">
													<div class="box-body" ;>
														<form role="form">
															<div class="form-group">
																<label>Deskripsi</label>
																<textarea class="form-control" rows="5" name="Deskripsi" readonly><?php echo $dataproyek->Deskripsi ?></textarea>
																<label>Instansi/Balai*</label>
																<input type="text" class="form-control" name="Instansi" value="<?php echo $dataproyek->Instansi ?>" id=" Instansi" readonly>
																<!-- <label>Provinsi*</label>
                                                                <select class="form-control" name="Provinsi">
                                                                    <?php foreach ($provinces as $row => $value) : ?>
                                                                        <option value="<?= $value ?>"><?= $value ?></option>
                                                                    <?php endforeach ?>
                                                                </select> -->
																<label>Kategori</label>
																<select class="form-control" name="Kategori" id="Kategori" readonly>
																	<option value="SYC">Primary</option>
																	<option value="MYC">Secondary</option>
																</select>
																</p>
																<label>No Rekening Pengeluaran Pusat</label>
																</p>
																<div class="col-md-6">
																	<input type="text" name="RekPengeluaranPusat" class="form-control" placeholder="No Rekening Pengeluaran Pusat" value="<?php echo $dataproyek->RekPengeluaranPusat ?>" readonly>
																</div>
																<div class="col-md-6">
																	<input type="text" name="BankPengeluaranPusat" class="form-control" placeholder="Nama Bank Pengeluaran Pusat" value="<?php echo $dataproyek->BankPengeluaranProyek ?>" readonly>
																</div>
																</p>

																<label>No Rekening Pengeluaran Proyek</label>
																</p>
																<div class="col-md-6">
																	<input type="text" name="RekPengeluaranProyek" class="form-control" placeholder="No Rekening Pengeluaran Proyek" value="<?php echo $dataproyek->RekPengeluaranProyek ?>" readonly>
																</div>
																<div class="col-md-6">
																	<input type="text" name="BankPengeluaranProyek" class="form-control" placeholder="Nama Bank Pengeluaran Proyek" value="<?php echo $dataproyek->BankPengeluaranProyek ?>" readonly>
																</div>
															</div>


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-target="#modal-UDP" data-toggle="modal" class="btn btn-success pull-right"><i class="fa fa-check"> UPDATE DATA PROYEK</i></button>
									<!-- <button type="button" class="btn btn-secondary btn btn-warning" data-dismiss="modal">Close</button> -->
								</div>
								</form>
						</div>
	</section>
</div>
</div>
</div>
</div>



<div class="modal fade bd-example-modal-lg" id="modal-UDP">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="Modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Data Proyek</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<form action="<?php echo base_url('Job/UpdateDataProyek') ?>" method="POST" enctype="multipart/form-data">
						<div class="col-md-6">
							<div class="box box-warning">
								<div class="box-header with-border">
									<div class="box-body">
										<div class="form-group">
											<label>Job No</label>
											<input type="text" name="JobNo" value="<?php echo $dataproyek->JobNo ?>" id="JobNo" class="form-control">
											<label>Nama Proyek</label>
											<input type="text" name="JobNm" value="<?php echo $dataproyek->JobNm ?>" id="JobNm" class="form-control">
											<label>Lokasi</label>
											<input type="text" name="Lokasi" value="<?php echo $dataproyek->Lokasi ?>" id=" Lokasi" class="form-control">
											<label>Status Proyek</label>
											<select class="form-control" name="StatusJob" id="StatusJob">
												<option value="Pelaksanaan">Pelaksanaan</option>
												<option value="Pemeliharaan">Pemeliharaan (Pra FHO)</option>
											</select>
											<label>Kontraktor</label>
											<input type="text" name="CompanyId" id="CompanyId" class="form-control" value="<?php echo $dataproyek->CompanyId ?>">
											<label class="form-label" for="customFile">Input Logo Company</label>
											<input type="file" class="form-control" name="Logo" id="Logo">
											<!-- <textarea class="form-control"><?php echo $dataproyek->Logo ?></textarea> -->

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box box-warning">
								<div class="box-header with-border">
									<div class="box-body">
										<div class="form-group">
											<label>Deskripsi</label>
											<textarea class="form-control" rows="5" name="Deskripsi"><?php echo $dataproyek->Deskripsi ?></textarea>
											<label>Instansi/Balai*</label>
											<input type="text" class="form-control" name="Instansi" value="<?php echo $dataproyek->Instansi ?>" id=" Instansi" required>
											<!-- <label>Provinsi*</label>
                                                                <select class="form-control" name="Provinsi">
                                                                    <?php foreach ($provinces as $row => $value) : ?>
                                                                        <option value="<?= $value ?>"><?= $value ?></option>
                                                                    <?php endforeach ?>
                                                                </select-->
											<label>Kategori</label>
											<select class="form-control" name="Kategori" id="Kategori" onchange="changePesertaTender()">
												<option value="SYC">Primary</option>
												<option value="MYC">Secondary</option>
											</select>
											</p>
											<label>No Rekening Pengeluaran Pusat</label>
											</p>
											<div class="col-md-6">
												<input type="text" name="RekPengeluaranPusat" class="form-control" placeholder="No Rekening Pengeluaran Pusat" value="<?php echo $dataproyek->RekPengeluaranPusat ?>">
											</div>
											<div class="col-md-6">
												<input type="text" name="BankPengeluaranPusat" class="form-control" placeholder="Nama Bank Pengeluaran Pusat" value="<?php echo $dataproyek->BankPengeluaranProyek ?>">
											</div>
											</p>

											<label>No Rekening Pengeluaran Proyek</label>
											</p>
											<div class="col-md-6">
												<input type="text" name="RekPengeluaranProyek" class="form-control" placeholder="No Rekening Pengeluaran Proyek" value="<?php echo $dataproyek->RekPengeluaranProyek ?>">
											</div>
											<div class="col-md-6">
												<input type="text" name="BankPengeluaranProyek" class="form-control" placeholder="Nama Bank Pengeluaran Proyek" value="<?php echo $dataproyek->BankPengeluaranProyek ?>">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"> SIMPAN</i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




</section>
</div>
