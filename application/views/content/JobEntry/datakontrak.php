<head>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
	<!-- BS Stepper -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
	<!-- dropzonejs -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropzone/min/dropzone.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


</head>


<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Data Kontrak / Addendum <p></p>

			<label for="inputName" class="col-sm col-form-label" name="JobNo-DK" id="JobNo"><?php echo $datakontrak->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $datakontrak->JobNm ?></label>
			<br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $datakontrak->Lokasi ?></label>
				<!--small>Control panel</small-->
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('dashboard')  ?>><i class=" fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data Kontrak / Addendum</li>
		</ol>
	</section>

	<section class="content-header">
		<a href="<?= site_url('job/sub_job/' . $datakontrak->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> MENU INPUTAN</a>
		<a href="<?= site_url('job/dipa/' . $datakontrak->JobNo) ?>" class="btn btn-primary">NEXT TO DIPA & TERMIN &nbsp <i class="fa fa-arrow-right"></i></a>
	</section>

	<!-- <Section class="content"> -->
	<section class="content">
		<div class="container-fluid">

			<div class="box box-warning">
				<div class="box-header with-border">
					<h1 class="box-title">Data Kontrak/Addendum</h1>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<form action="" method="post">
								<div class="form-group">
									<label>No Kontrak / Addendum</label>
									<input type="text" name="NoKontrak" value="<?php echo $datakontrak->NoKontrak ?>" id="NoKontrak" class="form-control">
									<label>Tahun Anggaran</label>
									<input type="text" name="JobNm" value="<?php echo $datakontrak->TahunAnggaran  ?>" id="TA" class="form-control">
									<label>HPS (Rp)</label>
									<!-- <input type="text" class="form-control" name="HPS" value="<?php echo $datakontrak->Hps ?>" id="HPS" onkeyup="toDecimal(this)"> -->
									<input type="text" class="form-control" name="HPS" id="HPS" onkeyup="toDecimal(this)" value="<?= number_format($datakontrak->HPS) ?>">
									<label>Nilai Kontrak</label>
									<input type="text" class="form-control" name="NilaiKontrak" id="NilaiKontrak" onkeyup="toDecimal(this)" value="<?= number_format($datakontrak->Bruto)  ?>">
									<label>Addendum Ke</label>
									<input type="text" name="JobNm" value="<?php echo $datakontrak->AddendumKe ?>" id="Addendumke" class="form-control">
									<label>Tgl Mulai Kontrak</label>
									<input type="date" class="form-control" value="<?php echo $datakontrak->TglKontrak ?>" name="TglKontrak" id="TglKontrak">
									<label>Masa Pelaksanaan</label>
									<input type="spinner" class="form-control" name="MasaPelaksanaan" id="MasaPelaksanaan" value="<?php echo $datakontrak->Hari ?>">
									<label>Masa Pemeliharaan</label>
									<input type="spinner" class="form-control" name="MasaPemeliharaan" id="Instansi">

									<label>Keterangan Addendum</label>
									<textarea class="form-control" name="KeteranganAdd" rows="5"></textarea>


								</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Tgl Kontrak / Addendum</label>
								<input type="date" class="form-control" name="TglAddendum1" id="TglAddendum1" value="<?php echo $datakontrak->TglKontrak ?>">
								<label>Tgl Selesai Kontrak</label>
								<input type="date" class="form-control" name="TglAddendum2" id="TglAddendum2" value="<?php echo $datakontrak->TglKontrak ?>">
								<label>Sumber Dana</label>
								<input type="text" class="form-control" name="Sumberdana" id="Sumberdana" value="<?php echo $datakontrak->SumberDana ?>">
								<label>Penawaran Netto (Rp) / Excl PPN</label>
								<input type="text" class="form-control" name="PenawaranNetto" id="PenawaranNetto" value="<?= number_format($datakontrak->PenawaranBruto / 1.1) ?>" readonly>
								<label>Netto Kontrak (Rp) / Excl PPN + PPH </label>
								<input type="text" class="form-control" name="KontrakNetto" id="KontrakNetto" value="<?= number_format($datakontrak->PenawaranBruto / 1.1 * 0.97) ?>" readonly>
								<label>Ringkasan Lingkup Kerja</label>
								<textarea class="form-control" rows="5" name="RingPek" id="RingPek"><?php echo $datakontrak->RingkasanPekerjaan ?></textarea>
								<label>Nama PPK</label>
								<input type="text" Class="form-control" name="NamaPPK" rows="5" id="NamaPPK" value="<?php echo $datakontrak->NamaPPK; ?>">
								<label>Alamat Kantor PPK</label>
								<textarea class="form-control" rows="5" name="AlamatPPK" id="AlamatPPK"><?php echo $datakontrak->AlamatPPK; ?></textarea>
							</div>
							</form>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="button" class="btn btn-success pull-right"><i class="fa fa-plus"> TAMBAH ADDENDUM </i></button>

					<button type="button" class="btn btn-primary"><i class="fa fa-save"> &nbsp UPDATE</i></button>
				</div>
			</div>
			</form>

			<br>

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title" style="font-size: larger;">HISTORY ADDENDUM</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<!-- <div class="row"> -->
					<!-- <div class="col-md-6"> -->
					<div class="form-group">

						<div class="box-body table-responsive no-padding">
							<table class="table table-hover" border="1" cellspacing="2" width="100%">

								<tr style="background-color: coral;">
									<th>No</th>
									<th>No Kontrak/Addendum</th>
									<th>Tgl Kontrak/Addendum</th>
									<th>Addendum Ke</th>
									<th>Pagu Bruto Kontrak (Rp)</th>
									<th>Pagu Netto Kontrak (Rp)</th>
									<th>Bruto Kontrak (Rp)</th>
									<th>Netto Kontrak (Rp)</th>
									<th>Tgl Mulai Kontrak</th>
									<th>Tgl Selesai kontrak</th>
									<th>Keterangan Addendum</th>
								</tr>


								<?php $no = 1;

										foreach ($addendum as $jb ) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $jb->NoKontrak; ?></td>
									<td><?php echo $jb->TglKontrak; ?></td>
									<td><?php echo $jb->AddendumKe; ?></td>
									<td><?php echo number_format($jb->PaguBruto) ; ?></td>
									<td><?php echo number_format($jb->PaguNetto) ; ?></td>
									<td><?php echo number_format($jb->Bruto) ; ?></td>
									<td><?php echo number_format($jb->Netto) ; ?></td>
									<td><?php echo $jb->PrdAwal; ?></td>
									<td><?php echo $jb->PrdAkhir; ?></td>
									<td><?php echo $jb->RemarkAddendum; ?></td>
									<!-- <td style="width: 5%"> -->
										<!-- <a title="Detail" href="<?= site_url('job/sub_job' . $value->JobNo) ?>" class="btn btn-success"><i class="fa fa-cubes"></i></a>
                                    <a title="Detail" href="<?= site_url('job/sub_job') ?>" class="btn btn-success"><i class="fa fa-cubes"></i></a>
                                    </td> -->
								<!-- </tr> -->


								<?php
										endforeach;

										?>
							</table>
						</div>

					</div>
					<!-- </div> -->
					<!-- </div> -->
				</div>
				<div class="box-footer">
					<!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-save"> SIMPAN </i></button> -->
				</div>
			</div>


			<div class="box box-success">
				<div class="box-header with-border">
					<h1 class="box-title">Data Rekening Proyek</h1>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>


				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Rekening Proyek</label>
								<input type="text" class="form-control" name="RekPro" id="RekPro" value="<?php echo $datakontrak->RekeningProyek; ?>">
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No. NPWP Proyek</label>
								<input type="text" class="form-control" name="NpwpProyek" id="NpwpProyek" value="<?php echo $datakontrak->NPWPCompany ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="button" data-target="#modal-DRP" data-toggle="modal" class="btn btn-success pull-right"><i class="fa fa-save"> Tambah Rekening / NPWP </i></button>
				</div>
			</div>


			<div class="modal fade" id="modal-DRP">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Input Data Rekening Proyek Dan NPWP Proyek</h4>
						</div>
						<div class="modal-body">
							<form action=" <?php echo base_url('Job/TambahRekNPWP') ?>" method="POST">
								<label>Job No</label>
								<input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $datakontrak->JobNo ?>" readonly>
								<label>Nama Proyek</label>
								<input type="text" name="JobNm" id="JobNm" class="form-control" value="<?php echo $datakontrak->JobNm ?>" readonly>
								<label>Atas Nama</label>
								<input type="text" name="NPWPName" id="NPWPName" class="form-control" value="<?php echo $datakontrak->NPWPName ?>">
								<label>Nomor NPWP</label>
								<input type="text" name="NPWPCompany" id="NPWPCompany" class="form-control" value="<?php echo $datakontrak->NPWPCompany ?>">
								<label>No Rekening Proyek</label>
								<input type="text" name="RekeningProyek" id="RekeningProyek" class="form-control" value="<?php echo $datakontrak->RekeningProyek ?>">
								<label>Nama Bank</label>
								<input type="text" name="BankProyek" id="BankProyek" class="form-control" value="<?php echo $datakontrak->BankProyek ?>">
								<label>Alamat NPWP</label>
								<textarea name="NPWPAddress" id="NPWPAddress" cols="10" rows="5" class="form-control"><?php echo $datakontrak->NPWPAddress ?></textarea>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>



			<div class="box box-warning">

				<div class="box-header with-border">
					<h3 class="box-title" style="font-size: larger;">JAMINAN</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<form class="form-group" action="" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>1. Jaminan Pelaksanaan</label>
									<hr>
								</div>

								<!-- /.form-group -->
								<div class="box-body">
									<?php foreach ($JaminanPelaksanaan as $jk) : ?>
										<div class="form-group">
											<label>No. Jaminan</label>
											<input type="text" class="form-control" name="NoJampel" id="NoJampel" value="<?php echo $jk->NoJaminan; ?>">
											<label>Nilai Jaminan</label>
											<input type="text" class="form-control" name="NilaiJampel" id="NilaiJampel" value="<?php echo $jk->NilaiJaminan; ?>">
											<label>Masa Berlaku</label>
											<input type="date" class="form-control" name="DtJampel" id="DtJampel" value="<?php echo $jk->MasaBerlaku; ?>">
											<label>Upload File Jaminan Pelaksanaan</label>
											<input type="file" class="form-control" name="Filejaminan" id="Filejaminan" value="<?php echo $jk->Filejaminan; ?>" />
										</div>
									<?php endforeach; ?>

								</div>
								<!-- /.form-group -->
							</div>

							<!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									<label>2. Jaminan Uang Muka</label>
									<hr>
								</div>

								<!-- /.form-group -->
								<div class="box-body">
									<?php foreach ($JaminanUangMuka as $jm) : ?>
										<div class="form-group">
											<label>No. Jaminan</label>
											<input type="text" class="form-control" name="NoJampel" id="NoJampel" value="<?php echo $jm->NoJaminan; ?>">
											<label>Nilai Jaminan</label>
											<input type="text" class="form-control" name="NilaiJampel" id="NilaiJampel" value="<?php echo $jm->NilaiJaminan; ?>">
											<label>Masa Berlaku</label>
											<input type="date" class="form-control" name="DtJampel" id="DtJampel" value="<?php echo $jm->MasaBerlaku; ?>">
											<label>Upload File Jaminan Pelaksanaan</label>
											<input type="file" class="form-control" name="Filejaminan" id="Filejaminan" value="<?php echo $jm->Filejaminan; ?>" />
										</div>
									<?php endforeach; ?>
								</div>
							</div>
							<br>
							<!-- /.form-group -->
							<div class="col-md-6">
								<div class="form-group">
									<label>3. Jaminan Sisa Pelaksanaan</label>
									<!-- <button type="button" data-toggle="modal" data-target="#modal-SisPel" class="btn btn-success btn-xs pull-right"><i class="fa fa-plus">&nbsp Tambah Data </i></button> -->
									<hr>
								</div>

								<!-- /.form-group -->
								<div class="box-body">
									<?php foreach ($JaminanSisPel as $jk) : ?>
										<div class="form-group">
											<label>No. Jaminan</label>
											<input type="text" class="form-control" name="NoJampel" id="NoJampel" value="<?php echo $jk->NoJaminan; ?>">
											<label>Nilai Jaminan</label>
											<input type="text" class="form-control" name="NilaiJampel" id="NilaiJampel" value="<?php echo $jk->NilaiJaminan; ?>">
											<label>Masa Berlaku</label>
											<input type="date" class="form-control" name="DtJampel" id="DtJampel" value="<?php echo $jk->MasaBerlaku; ?>">
											<label>Upload File Jaminan Pelaksanaan</label>
											<input type="file" class="form-control" name="Filejaminan" id="Filejaminan" value="<?php echo $jk->Filejaminan; ?>" />
										</div>
									<?php endforeach; ?>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>4. Jaminan Pemeliharaan</label>
									<hr>
								</div>

								<!-- /.form-group -->
								<div class="box-body">
									<?php foreach ($JaminanPemeliharaan as $jk) : ?>
										<div class="form-group">
											<label>No. Jaminan</label>
											<input type="text" class="form-control" name="NoJampel" id="NoJampel" value="<?php echo $jk->NoJaminan; ?>">
											<label>Nilai Jaminan</label>
											<input type="text" class="form-control" name="NilaiJampel" id="NilaiJampel" value="<?php echo $jk->NilaiJaminan; ?>">
											<label>Masa Berlaku</label>
											<input type="date" class="form-control" name="DtJampel" id="DtJampel" value="<?php echo $jk->MasaBerlaku; ?>">
											<label>Upload File Jaminan Pelaksanaan</label>
											<input type="file" class="form-control" name="Filejaminan" id="Filejaminan" value="<?php echo $jk->Filejaminan; ?>" />
										</div>
									<?php endforeach; ?>
								</div>
								<!-- /.form-group -->
							</div>
							<div class="modal-footer">
								<button type="button" data-toggle="modal" data-target="#modal-Jaminan" class="btn btn-success btn-xs pull-right"><i class="fa fa-plus">&nbsp Tambah Data </i></button>
							</div>
							<!-- /.col -->
						</div>
					</form>
					<!-- /.row -->
				</div>
				<!-- /.box-body -->


			</div>

			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title" style="font-size: larger;">CEKLIST DOCUMENT PROYEK</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="box">

									<div class="box box-primary">
										<div class="box-header">
											<i class="ion ion-clipboard"></i>

											<h3 class="box-title">Cek List Team lapangan</h3>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<form action="<?= site_url('Job/checklistAction') ?>" method="post">
												<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
												<ul class="todo-list">
													<?php
														$checklist = ['Kontrak', 'Dokumen Addendum', 'Backup Addendum'];
													?>
													<form action="<?= site_url('Job/checklistAction') ?>" method="POST">
														<div class="control-group after-add-more">
															<ul class="todo-list">
																<?php foreach($checklist as $row => $value): ?>
																	<?php
																		$check = '';
																		foreach($checked as $r => $v) {
																			if($v == $value) $check = 'checked';
																		}
																	?>
																	<li>
																		<span class="handle">
																			<i class="fa fa-ellipsis-v"></i>
																			<i class="fa fa-ellipsis-v"></i>
																		</span>
																		<input type="checkbox" <?= $check ?> name="Ceklist[]" value="<?= $value ?>">
																		<span class="text"><?= $value ?></span>
																	</li>
																<?php endforeach ?>
																<!-- <li>
																	<span class="handle">
																		<i class="fa fa-ellipsis-v"></i>
																		<i class="fa fa-ellipsis-v"></i>
																	</span>
																	<input type="checkbox" name="Ceklist[]" value="Dokumen Addendum">
																	<span class="text">Dokumen Addendum</span>
																</li>
																<li>
																	<span class="handle">
																		<i class="fa fa-ellipsis-v"></i>
																		<i class="fa fa-ellipsis-v"></i>
																	</span>
																	<input type="checkbox" name="Ceklist[]" value="Backup Addendum">
																	<span class="text">Backup Addendum</span>
																</li> -->

														</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-md-6">
							<div class="form-group">
								<div class="box">
									<!-- <div class="box box-primary"> -->
									<div class="box-header">
										<i class="ion ion-clipboard"></i>

										<h5 class="box-title">Cek List Team PC</h5>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
										<ul class="todo-list">
											<form action="proses.php" method="POST">
												<div class="control-group after-add-more1">
													<ul class="todo-list">
														<li>
															<!-- drag handle -->
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<!-- checkbox -->
															<input type="checkbox" name="Ceklist[]" value="Kontrak">
															<!-- todo text -->
															<span class="text">Kontrak</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="Ceklist[]" value="Dokumen Addendum">
															<span class="text">Dokumen Addendum</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="Ceklist[]" value="Backup Addendum">
															<span class="text">Backup Addendum</span>
															<!-- <button type="button" class="btn btn-success btn-xs pull-right add-more1">Tambah Item</button> -->
														</li>

												</div>
									</div>
									<div class="box-footer">
										<button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"> SIMPAN </i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>

			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title" style="font-size: larger;">DATA PHO</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>No. PHO</label>
								<input type="text" class="form-control" name="NoPHO" id="NoPHO" value="<?php echo $datakontrak->NoPHO ?>">
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tgl PHO</label>

								<input type="Date" class="form-control" name="TglPHO" id="TglPHO" value="<?php echo $datakontrak->TglPHO ?>">
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<!-- <div class="box"> -->

									<!-- <div class="box box-primary"> -->
									<div class="box-header">
										<i class="ion ion-clipboard"></i>

										<h5 class="box-title">Cek List Persyaratan PHO</h5>

									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
										<ul class="todo-list">
											<form action="proses.php" method="POST">
												<div class="control-group after-add-more2">
													<ul class="todo-list">
														<li>
															<!-- drag handle -->
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<!-- checkbox -->
															<input type="checkbox" name="CeklistPHO[]" value="Mc 100">
															<!-- todo text -->
															<!-- <input type="text" name="Kontrak" placeholder="Kontrak"> -->
															<span class="text">Mc 100</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Backup Quantitas">
															<span class="text">Backup Quantitas</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Asbuild Drawing">
															<span class="text">Asbuild Drawing</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Backup Qualitas">
															<span class="text">Backup Qualitas</span>
															<!-- <button type="button" class="btn btn-success btn-xs pull-right add-more2">Tambah Item</button> -->
														</li>

												</div>
									</div>
								</div>
								<!-- <li style="hidden">
                                        <div class="box-body">
                                        <div class="copy hide">
                                            <div class="control-group">
                                                    &nbsp &nbsp<span class="handle col-ml-2">
                                                      <i class="fa fa-ellipsis-v"></i>
                                                      <i class="fa fa-ellipsis-v"></i>
                                                    </span>
                                                    &nbsp &nbsp<input type="checkbox" value="">
                                                    &nbsp &nbsp &nbsp<span><input type="text" name="" class="control-group" style="border:1; width:70%;"></span>
                                              <button class="btn btn-danger remove btn-xs pull-right" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                        </div>
                                    </li> -->
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<!-- <div class="box"> -->

									<!-- <div class="box box-primary"> -->
									<div class="box-header">
										<i class="ion ion-clipboard"></i>

										<h5 class="box-title">Cek List Persyaratan PHO</h5>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
										<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
										<ul class="todo-list">
											<form action="proses.php" method="POST">
												<div class="control-group after-add-more3">
													<ul class="todo-list">
														<li>
															<!-- drag handle -->
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<!-- checkbox -->
															<input type="checkbox" name="CeklistPHO[]" value="Laporan Harian, Mingguan, Bulanan">
															<!-- todo text -->
															<!-- <input type="text" name="Kontrak" placeholder="Kontrak"> -->
															<span class="text">Laporan Harian, Mingguan, Bulanan</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Jaminan Pemeliharaan">
															<span class="text">Jaminan Pemeliharaan</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Dokumentasi">
															<span class="text">Dokumentasi</span>
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Surat Permohonan PHO">
															<span class="text">Surat Permohonan PHO</span>
															<!-- <button type="button" class="btn btn-success btn-xs pull-right add-more3">Tambah Item</button> -->
														</li>
														<li>
															<span class="handle">
																<i class="fa fa-ellipsis-v"></i>
																<i class="fa fa-ellipsis-v"></i>
															</span>
															<input type="checkbox" name="CeklistPHO[]" value="Laporan K3">
															<span class="text">Laporan K3</span>
														</li>

												</div>
									</div>
								</div>
							</div>
						</div>
						<label>Upload Berita Acara PHO</label>
						<input type="file" class="form-control" id="customFile" />
					</div>
				</div>
				<div class="box-footer">
					<button type="button" class="btn btn-success pull-right"><i class="fa fa-save"> SIMPAN </i></button>
				</div>
			</div>

			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title" style="font-size: larger;">DATA FHO</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>No. FHO</label>
								<input type="text" class="form-control" name="NoFHO" id="NoFHO" value="<?php echo $datakontrak->NoFHO ?>">
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tgl FHO</label>
								<input type="Date" class="form-control" name="TglFHO" id="TglFHO" value="<?php echo $datakontrak->TglFHO ?>">
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<!-- <div class="col-md-6"> -->
							<div class="form-group">
								<div class="form-group">
									&nbsp;
									<label>Ceklist Persyaratan FHO :</label>
									&nbsp
									&nbsp
									<label>
										<input type="checkbox" name="checkboxFHO" value="Berita Acara FHO">
										Upload Berita Acara FHO
									</label>
									&nbsp
									&nbsp
									<br>
								</div>
							</div>
						</div>
						<label>Upload File FHO</label>
						<input type="file" name="FileFHO" class="form-control" id="customFile" />
						<label>Lanjut Notifikasi</label>
						<select class="form-control" name="NotifLanjutTender" id="PesertaTender">
							<option value="Pelaksanaan">Ya</option>
							<option value="Pemeliharaan">Tidak</option>
						</select>
					</div>
				</div>
				<div class="box-footer">
					<button type="button" data-target="#modal-FHO" data-toggle="modal" class="btn btn-success pull-right"><i class="fa fa-save"> UPDATE DATA PHO </i></button>
				</div>
			</div>



			<!-- <div class="modal fade" id="modal-FHO">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Update Data PHO</h4>
                        </div>
                        <div class="modal-body">
                                <div class="box-body">
                                    <form action=" <?php echo base_url('Job/UpdateFHO') ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="JobNo" value="<?php echo $datakontrak->JobNo ?>" hidden>
                                                <label>No. FHO</label>
                                                <input type="text" class="form-control" name="NoFHO" id="NoFHO" value="<?php echo $datakontrak->NoFHO ?>">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tgl FHO</label>
                                                <input type="Date" class="form-control" name="TglFHO" id="TglFHO" value="<?php echo $datakontrak->TglFHO ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <!-- <div class="col-md-6"> 
                                            <div class="form-group">
                                                <div class="form-group">
                                                    &nbsp;
                                                    <label>Ceklist Persyaratan FHO :</label>
                                                    &nbsp
                                                    &nbsp
                                                    <label>
                                                        <input type="checkbox" name="checkboxFHO" value="Berita Acara FHO">
                                                        Upload Berita Acara FHO
                                                    </label>
                                                    &nbsp
                                                    &nbsp
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Upload File FHO</label>
                                        <input type="file" name="FileFHO" class="form-control" id="customFile" />
                                        <label>Lanjut Notifikasi</label>
                                        <select class="form-control" name="NotifLanjutTender" id="PesertaTender">
                                            <option value="Pelaksanaan">Ya</option>
                                            <option value="Pemeliharaan">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div> -->

		</div>
	</section>

</div>


<!-- /.container-fluid -->
</section>


</div>
</div>
</div>
</div>
</div>
</section>



<!-- </Section> -->

</div>

<div class="modal fade" id="modal-FHO">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Update Data FHO</h4>
			</div>
			<div class="modal-body">
				<form action=" <?php echo base_url('Job/UpdateFHO') ?>" method="POST">
					<label>Job No</label>
					<input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $datakontrak->JobNo ?>" readonly>
					<label>Nama Proyek</label>
					<input type="text" name="JobNm" id="JobNm" class="form-control" value="<?php echo $datakontrak->JobNm ?>" readonly>
					<label>NO FHO</label>
					<input type="text" name="NoFHO" id="NoFHO" class="form-control" value="<?php echo $datakontrak->NoFHO ?>">
					<label>Tgl FHO</label>
					<input type="date" name="TglFHO" id="TglFHO" class="form-control" value="<?php echo $datakontrak->TglFHO ?>">

					<label>Ceklist Persyaratan FHO :</label>
					<label><input type="checkbox" name="checkboxFHO" id="checkboxFHO" class="form-control" value=""></label>
					<label>Upload File FHO</label>
					<input type="file" name="FileFHO" id="FileFHO" class="form-control" value="">
					<label>Lanjut Notifikasi</label>
					<select class="form-control">
						<option value="Ya">Ya</option>
						<option value="Tidak">Tidak</option>
					</select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-Jaminan" ondrag="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Jaminan Pelaksanaan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<?php echo form_open_multipart('job/simpan_JaminanKontrak'); ?>

				<input type="text" name="JobNo" hidden="" value="<?php echo $datakontrak->JobNo ?>">
				<p hidden=""><?= $this->session->userdata('MIS_LOGGED_NAME'); ?></p>
				<div class="form-group">
					<label>Pilih Kategori Jaminan </label>
					<select class="form-control" name="NamaJaminan" id="NamaJaminan">
						<option value="">--Pilih Kategori Jaminan--</option>
						<option value="Jaminan Pelaksanaan">Jaminan Pelaksanaan</option>
						<option value="Jaminan Uang Muka">Jaminan Uang Muka</option>
						<option value="Jaminan Sisa Pelaksanaan">Jaminan Sisa Pelaksanaan</option>
						<option value="">Jaminan Pemeliharaan</option>
					</select>
				</div>
				<div class="form-group">
					<label>No. Jaminan</label>
					<input type="text" class="form-control" name="NoJaminan" id="NoJaminan" required="">
				</div>
				<div class="form-group">
					<label>Nilai Jaminan</label>
					<input type="text" class="form-control" name="NilaiJaminan" id="NilaiJaminan" required="">
				</div>
				<div class="form-group">
					<label>Masa Berlaku</label>
					<input type="date" class="form-control" name="MasaBerlaku" id="MasaBerlaku" required="">
				</div>
				<div class="form-group">
					<label>Upload File Jaminan Pelaksanaan</label>
					<input type="file" class="form-control" name="Filejaminan" id="Filejaminan" required="">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Simpan</button>
			</div>

			<?php echo form_close();     ?>
		</div>
	</div>
</div>




<script type="text/javascript">
	$(document).ready(function() {
		$(".add-more").click(function() {
			var html = $(".copy").html();
			$(".after-add-more").after(html);
		});

		// saat tombol remove dklik control group akan dihapus 
		$("body").on("click", ".remove", function() {
			$(this).parents(".control-group").remove();
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".add-more1").click(function() {
			var html = $(".copy").html();
			$(".after-add-more1").after(html);
		});

		// saat tombol remove dklik control group akan dihapus 
		$("body").on("click", ".remove", function() {
			$(this).parents(".control-group").remove();
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".add-more2").click(function() {
			var html = $(".copy").html();
			$(".after-add-more2").after(html);
		});

		// saat tombol remove dklik control group akan dihapus 
		$("body").on("click", ".remove", function() {
			$(this).parents(".control-group").remove();
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".add-more3").click(function() {
			var html = $(".copy").html();
			$(".after-add-more3").after(html);
		});

		// saat tombol remove dklik control group akan dihapus 
		$("body").on("click", ".remove", function() {
			$(this).parents(".control-group").remove();
		});
	});
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		toDecimal(PenawaranNetto);
		$("#PenawaranNetto, #ppn").keyup(function() {
			var penawaran = $("#PenawaranNetto").val();
			penawaran = parseInt(penawaran.replace(/,/g, ''));
			var ppn = $("#ppn").val();

			var total = parseInt(penawaran) * parseInt(ppn);
			$("#KontrakNetto").val(total);
		});
	});
</script>
