<div class="content-wrapper">

	<section class="content-header">
		<h1>
			DIPA & TERMIN <p></p>

			<label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dipa->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dipa->JobNm ?></label>
			<br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $dipa->Lokasi ?></label>
				<!--small>Control panel</small-->
		</h1>
		<ol class="breadcrumb" style="width: 20%;">
			<li><a href="<?= site_url('dashboard')  ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dipa & Termin</li>
		</ol>
	</section>

	<section class="content-header">
		<a href="<?= site_url('job/sub_job/' . $dipa->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> MENU INPUTAN</a>
		<a href="<?= site_url('job/tatakelola/' . $dipa->JobNo) ?>" data-toggle="modal" class="btn btn-primary"> NEXT TO TATA KELOLA &nbsp <i class="fa fa-arrow-right"></i></a>
	</section>


	<section class="content">
		<div class="box box-primary" id="DIPA">
			<div class="box-header with-border">
				<h1 class="box-title" style="font-size: larger;">DIPA</h1>
				<p></p>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<!-- <a href="<?= site_url('job/sub_job') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> -->
									<a data-target="#modal-default" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah DIPA</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modal-default">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Default Modal</h4>
							</div>
							<?php echo form_open_multipart('job/TambahDipa'); ?>
							<div class="modal-body">
								<input type="text" name="JobNo" hidden="" value="<?php echo $dipa->JobNo ?>">
								<p hidden=""><?= $this->session->userdata('MIS_LOGGED_NAME'); ?></p>
								<label>Tahun</label>
								<input type="text" name="Tahun" id="InfoPasar" class="form-control">
								<label>DIPA (Rp)</label>
								<input type="text" name="Dipa" id="Dipa" class="form-control" onkeyup="toDecimal(this)">
								<label>DIPA Pagu Bruto</label>
								<input type="text" name="PaguBudget" id="PaguBudget" class="form-control" onkeyup="toDecimal(this)">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
							<?php echo form_close(); ?>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>


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
								<th hidden></th>
								<th>Tahun</th>
								<th>DIPA (Rp)</th>
								<th>DIPA Pagu Bruto (Rp)</th>
								<th>Action</th>
							</tr>
							<?php foreach ($tbldipa as $dipa) : ?>
								<tr>
									<td hidden><?= $dipa->id_Dipa ?></td>
									<td><?= $dipa->Tahun ?></td>
									<td><?= buatRupiah($dipa->Budget); ?></td>
									<td><?= buatRupiah($dipa->PaguBudget); ?></td>
									<td>
										<?php echo anchor('Job/DeleteDipa/' . $dipa->id_Dipa, '<div class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></div>') ?>
										<button type="button" data-toggle="modal" data-target="#modal-EditDipa<?php echo $dipa->id_Dipa; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>

									</td>

								</tr>
							<?php endforeach; ?>

						</table>
					</div>

				</div>
				<!-- </div> -->
				<!-- </div> -->
			</div>
		</div>

		<?php foreach ($tbldipa as $dipa) : ?>
			<div class="modal fade" id="modal-EditDipa<?php echo $dipa->id_Dipa ?>">
				<form action="<?php echo base_url('Job/editDipa') ?>" method="POST">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Edit Dipa</h4>
							</div>
							<div class="modal-body">

								<input type="text" name="id_Dipa" hidden value="<?php echo $dipa->id_Dipa ?>">
								<input type="text" name="JobNo" id="JobNo" hidden value="<?php echo $dipa->JobNo ?>">

								<label>Tahun</label>
								<input type="text" name="Tahun" id="Tahun" class="form-control" value="<?php echo $dipa->Tahun ?>">
								<label>DIPA (Rp)</label>
								<input type="text" name="Dipa" id="Dipa" class="form-control" onkeyup="toDecimal(this)" value="<?php echo number_format($dipa->Budget)  ?>">
								<label>DIPA Pagu Bruto</label>
								<input type="text" name="PaguBudget" id="PaguBudget" class="form-control" onkeyup="toDecimal(this)" value="<?php echo number_format($dipa->PaguBudget)  ?>">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="Submit" class="btn btn-primary">Save changes</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
				</form>
				<!-- /.modal-dialog -->
			</div>
		<?php endforeach; ?>


		<div class="box box-primary">
			<div class="box-header with-border">
				<h1 class="box-title" style="font-size: larger;">RENCANA TERMIN</h1>
				<p></p>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<!-- <a href="<?= site_url('job/sub_job') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> -->
									<a data-target="#TambahDPRencanaTermin" data-toggle="modal" class="btn btn-flickr"><i class="fa fa-plus"></i> Input Uang Muka Rencana Termin</a>
									<a data-target="#TambahRencanaTermin" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Rencana Termin</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="TambahDPRencanaTermin">
					<div class="modal-dialog" style="width: 40%;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">DATA ENTRY TERMIN</h4>
								<p hidden><?= $this->session->userdata('MIS_LOGGED_NAME'); ?></p>
							</div>

							<form action="<?= site_url('Job/addDPtermin')  ?>" method="post">
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Jenis Termin</label>
										<div class="col-sm-7">
											<select name="JenisTermin" class="form-control">
												<option value="">--Pilih Jenis Termin--</option>
												<option value="Uang Muka">Uang Muka</option>
												<option value="Termin">Termin</option>
												<option value="Retensi">Retensi</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Rencana Tgl Jatuh Tempo</label>
										<div class="col-sm-7">
											<input type="date" name="tglRencanaTermin" class="form-control" id="TglRencanaTermin">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Uraian</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="UraianTermin" placeholder="Uraian Termin" required>
											<?php foreach ($tbldipa as $dp) : ?>
												<input type="text" name="Budget" id="Budget" value="<?php echo $dp->Budget ?>" hidden>
												<input type="text" name="JobNo" id="JobNo" value="<?php echo $dp->JobNo ?>" hidden>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Presentasi Rencana</label>
										<label style="align-content: center;">
											<h4 style="align-content: center;">%</h4>
										</label>
										<div class="col-sm-3">
											<input type="text" name="TxtPersentase" id="TxtPersentase" class="form-control" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nominal Rencana (A)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtA" id="TxtA" onkeyup="toDecimal(this,Rtermin())" value="0">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Potongan Uang Muka (B = A x n%)</label>
										<label style="align-content: center;">
											<h4 style="align-content: center;">%</h4>
										</label>
										<div class="col-sm-3">
											<input type="text" class="form-control" name="TxtD" id="TxtD" value="0">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label"></label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtUM" id="TxtUM" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Retensi (C = A x 5%) &nbsp <input type="checkbox" name="cbRetensi[]" alt="Checkbox" id="cbRetensi" onkeyup="Rtermin()" value="1"></label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtE" id="TxtE" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Total Potongan (D = B + C)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtF" id="TxtF" onkeyup="Rtermin()" value="0">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Pembayaran Fisik (E = A - D)*Inc PPN</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtG" id="TxtG" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">PPN (F = (E/1.1) x10%)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtH" id="TxtH" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Total Nett Exc. PPN (G = E- F)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtI" id="TxtI" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">PPH (H = (E/1.1)x3%)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtJ" id="TxtJ" value="0" onkeyup="Rtermin()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Netto Exc. PPN & PPH (I = G-H)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtK" id="TxtK" value="0" onkeyup="Rtermin()">
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>


				<div class="modal fade" id="TambahRencanaTermin">
					<div class="modal-dialog" style="width: 40%;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">DATA ENTRY TERMIN</h4>
							</div>

							<form action="<?= site_url('Job/TambahTermin') ?>" method="post">
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Jenis Termin</label>
											<div class="col-sm-7">
												<select name="JenisTermin1" class="form-control">
													<option value="">--Pilih Jenis Termin--</option>
													<option value="Uang Muka">Uang Muka</option>
													<option value="Termin">Termin</option>
													<option value="Retensi">Retensi</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Rencana Tgl Jatuh Tempo</label>
											<div class="col-sm-7">
												<input type="date" name="tglRencanaTermin1" class="form-control" id="TglRencanaTermin1">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Uraian</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="UraianTermin1" placeholder="Uraian Termin" onkeyup="this.value = this.value.toUpperCase()" required>
												<?php foreach ($tbldipa as $dp) : ?>
													<input type="text" name="Budget1" id="Budget1" value="<?php echo $dp->Budget ?>" hidden>
													<input type="text" name="JobNo1" id="JobNo1" value="<?php echo $dp->JobNo ?>" hidden>
												<?php endforeach; ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Presentasi Rencana</label>
											<label style="align-content: center;">
												<h4 style="align-content: center;">%</h4>
											</label>
											<div class="col-sm-3">
												<input type="text" name="TxtPersentase1" id="TxtPersentase1" class="form-control" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nominal Rencana (A)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtA1" id="TxtA1" onkeyup="toDecimal(this,Rtermin1())" value="0">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Potongan Uang Muka (B = A x n%)</label>
											<label style="align-content: center;">
												<h4 style="align-content: center;">%</h4>
											</label>
											<div class="col-sm-3">
												<?php foreach ($GetBruto as $gb) : ?>
													<input type="text" class="form-control" name="TxtD1" id="TxtD1" value="<?php echo $gb->Persentase ?>">
												<?php endforeach; ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label"></label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtUM1" id="TxtUM1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">

											<label class="col-sm-4 col-form-label">Retensi (C = A x 5%) &nbsp <input type="checkbox" name="cbRetensi1[]" id="cbRetensi1" onkeyup="Rtermin1()" value="1"></label>

											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtE1" id="TxtE1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Total Potongan (D = B + C)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtF1" id="TxtF1" onkeyup="Rtermin1()" value="0">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Pembayaran Fisik (E = A - D)*Inc PPN</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtG1" id="TxtG1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">PPN (F = (E/1.1) x10%)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtH1" id="TxtH1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Total Nett Exc. PPN (G = E- F)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtI1" id="TxtI1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">PPH (H = (E/1.1)x3%)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtJ1" id="TxtJ1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Netto Exc. PPN & PPH (I = G-H)</label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="TxtK1" id="TxtK1" value="0" onkeyup="Rtermin1()">
											</div>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
											<button type="Submit" class="btn btn-primary">Save changes</button>
										</div>
									</form>
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>

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
								<th hidden></th>
								<th>NO</th>
								<th>Tgl Rencana Jth Tempo</th>
								<th>Jenis</th>
								<th>Uraian</th>
								<th>Presentase (%)</th>
								<th>Bruto (Rp)</th>
								<th>Netto (Rp)</th>
								<th></th>
							</tr>

							<?php $no = 1;
							foreach ($tblRtermin as $j => $value) : ?>
								<tr>
									<td hidden><?= $value->LedgerNo; ?></td>
									<td><?php echo $no++ ?></td>
									<td><?= $value->TglRencana; ?></td>
									<td><?= $value->Jenis; ?></td>
									<td><?= $value->Uraian; ?></td>
									<td><?= $value->Persentase; ?></td>
									<td><?= number_format($value->Bruto); ?></td>
									<td><?= number_format($value->Netto); ?></td>
									<td>
										<button type="button" data-toggle="modal" data-target="#EditRencanaTermin<?php echo $value->LedgerNo; ?>" class="btn btn-success btn-xs">SELECT</button>
										<a href="<?= site_url('Job/DelRTermin/' . $value->LedgerNo); ?>" onclick="return confirm('Yaqin Hapus Data..?')" type="submit" class="btn btn-danger btn-xs">DELETE</a>

									</td>
								</tr>
							<?php endforeach; ?>
							<tr style="background-color:lightgray;">
								<td colspan="5" rowspan="5">
									<h5 style="float: right;">TOTAL</h5>
								</td>
								<td>
									<h5><?php echo number_format($SumRTBruto->Bruto); ?></h5>
								</td>
								<td>
									<h5><?php echo number_format($SumRTNetto->Netto); ?></h5>
								</td>
								<td></td>
							</tr>
						</table>
					</div>

				</div>
				<!-- </div> -->
				<!-- </div> -->
			</div>

			<?php foreach ($tblRtermin as $j => $value) : ?>
				<div class="modal fade" id="EditRencanaTermin<?php echo $value->LedgerNo; ?>">
					<div class="modal-dialog" style="width: 40%;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">DATA ENTRY TERMIN</h4>
							</div>

							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group row">
										<!-- <?php $JenisTermin = ['', 'UANG MUKA', 'TERMIN', 'RETENSI']; ?> -->
										<label class="col-sm-4 col-form-label">Jenis Termin</label>
										<div class="col-sm-7">
											<input type="text" name="JenisTermin2" id="JenisTermin2" class="form-control" value="<?php echo $value->Jenis ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Rencana Tgl Jatuh Tempo</label>
										<div class="col-sm-7">
											<input type="date" name="tglRencanaTermin2" class="form-control" id="TglRencanaTermin2" value="<?php echo $value->TglRencana; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Uraian</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="UraianTermin2" placeholder="Uraian Termin" id="UraianTermin2" value="<?php echo $value->Uraian ?>" required>
											<?php foreach ($tbldipa as $dp) : ?>
												<input type="text" name="Budget2" id="Budget2" value="<?php echo $dp->Budget ?>" hidden>
												<input type="text" name="JobNo2" id="JobNo2" value="<?php echo $dp->JobNo ?>" hidden>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Presentasi Rencana</label>
										<label style="align-content: center;">
											<h4 style="align-content: center;">%</h4>
										</label>
										<div class="col-sm-3">
											<input type="text" name="TxtPersentase2" id="TxtPersentase2" class="form-control" value="<?php echo $value->Persentase ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Nominal Rencana (A)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtA2" id="TxtA2" onkeyup="toDecimal(this,Rtermin2())" value="<?php echo number_format($value->Bruto) ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Potongan Uang Muka (B = A x n%)</label>
										<label style="align-content: center;">
											<h4 style="align-content: center;">%</h4>
										</label>
										<div class="col-sm-3">
											<?php foreach ($GetBruto as $gb) : ?>
												<input type="text" class="form-control" name="TxtD2" id="TxtD2" value="<?php echo $value->PersentaseUM ?>">
											<?php endforeach; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label"></label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtUM2" id="TxtUM2" value="<?php echo number_format($value->NilaiPotUM) ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">

										<label class="col-sm-4 col-form-label">Retensi (C = A x 5%) &nbsp <input type="checkbox" name="cbRetensi2[]" id="cbRetensi2" onkeyup="Rtermin2()" value="1"></label>

										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtE2" id="TxtE2" value="<?php echo number_format($value->NilaiRetensi)  ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Total Potongan (D = B + C)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtF2" id="TxtF2" onkeyup="Rtermin2()" value="<?php echo number_format($value->TotalPotongan) ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Pembayaran Fisik (E = A - D)*Inc PPN</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtG2" id="TxtG2" value="<?php echo number_format($value->PembayaranFisik) ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">PPN (F = (E/1.1) x10%)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtH2" id="TxtH2" value="<?php echo number_format($value->PPN) ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Total Nett Exc. PPN (G = E- F)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtI2" id="TxtI2" value="<?php echo number_format($value->NetExcPPN) ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">PPH (H = (E/1.1)x3%)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtJ2" id="TxtJ2" value="<?php echo number_format($value->PPH) ?>" onkeyup="Rtermin2()">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Netto Exc. PPN & PPH (I = G-H)</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" name="TxtK2" id="TxtK2" value="<?php echo number_format($value->Netto)  ?>" onkeyup="Rtermin2()">
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</form>
							</div>

						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
			<?php endforeach; ?>
		</div>

		<div class="box box-primary">
			<div class="box-header with-border">
				<h1 class="box-title" style="font-size: larger;">PENERIMAAN TERMIN</h1>
				<p></p>
				<!-- <div class="modal fade" id="modal-default-PM">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Entry Rencana Termin</h4>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputName" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputName2" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
										<div class="col-sm-10">
											<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
										</div>
									</div>

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Simpan</button>
							</div>
						</div>
						<!-- /.modal-content --
					</div>
					<!-- /.modal-dialog --
				</div> -->


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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header p-2">
									<ul class="nav nav-pills">
										<li class="nav-item"><a class="nav-link active" href="#TerminInduk" data-toggle="tab">Termin Induk</a></li>
										<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Termin Member</a></li>
									</ul>
								</div><!-- /.card-header -->


								<div class="card-body">
									<div class="tab-content">
										<div class="active tab-pane" id="TerminInduk">
											<p></p>
											<div class="container-fluid">
												<div class="row">
													<div class="col-12">
														<div class="card">
															<div class="card-body">
																<!-- <a href="<?= site_url('job/sub_job') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> -->
																<a data-target="#modal-default-TI" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Post -->

											<div class="modal fade" id="modal-default-TI">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title">Input Termin Induk</h4>
														</div>
														<div class="modal-body">
															<form class="form-horizontal">
																<div class="form-group row">
																	<label for="inputName" class="col-sm-4 col-form-label">Jenin Termin</label>
																	<?php $JenisTermin = ['', 'Uang Muka', 'Termin']; ?>
																	<div class="col-sm-8">
																		<select name="JenisTermin" class="form-control">
																			<?php foreach ($JenisTermin as $jtm) : ?>
																				<option value="<?php echo $jtm ?>"><?php echo $jtm ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Tgl Cair</label>
																	<div class="col-sm-8">
																		<input type="date" name="TglCair" class="form-control" id="TglCair">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">No BAP</label>
																	<div class="col-sm-8">
																		<input type="text" name="NoBap" class="form-control" id="NoBap" placeholder="Name">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Uraian</label>
																	<div class="col-sm-8">
																		<input type="text" name="Uraian" class="form-control" name="UraianTermin" placeholder="Uraian"></input>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Bruto BoQ (Rp)</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" name="BrutoBoQ" id="BrutoBoQ" onkeyup="termininduk()">
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Potongan Uang Muka (Rp)</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" name="PotUM" id="PotUM" onkeyup="termininduk()" value="0">
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Potongan Retensi (Rp)</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" name="Potretensi" id="Potretensi" value="0" onkeyup="termininduk()">
																	</div>
																</div>

																<div class="form-group row">
																	<label class="col-sm-4 col-form-label">Netto BoQ (Rp)</label>
																	<div class="col-sm-8">
																		<input type="text" class="form-control" name="NettoBoQ" id="NettoBoQ" value="0">
																	</div>
																</div>
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Simpan</button>
														</div>
													</div>
													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>



											<div class="form-group row">
												<input type="text" class="text" style="float: right; width:125px;">
												<input type="text" class="text" style="float: right;width:125px;">
												<input type="text" class="text" style="float: right;width:125px;">
												<input type="text" class="text" style="float: right;width:125px;">
												<input type="text" class="text" style="float: right; width:125px;" value="">
												<input type="text" class="text" style="float: right; width:255px;" placeholder="NILAI KONTRAK INCL ADDENDUM" readonly>
											</div>
											<div class="box-body table-responsive no-padding">
												<table class="table table-hover" border="1" cellspacing="2" width="100%">
													<!-- <th colspan="7" scope="colgroup">
														<center>Nilai Kontrak Addendum</center>
													</th>
													<th>Netto BoQ (Rp)</th>
													<th>Fisik (Rp)</th>
													<th>PPN (Rp)</th>
													<th>PPH Final (Rp)</th>
													<th>Netto Penerimaan (Rp)</th> -->

													<tr style="background-color: deepskyblue;">
														<th>No</th>
														<th>Tgl Cair</th>
														<th>No. BAP</th>
														<th>Uraian</th>
														<th>Bruto BOQ (Rp)</th>
														<th>Potongan Uang Muka (Rp)</th>
														<th>Potongan Retensi (Rp)</th>
														<th>Netto BoQ (Rp)</th>
														<th>Fisik (Rp)</th>
														<th>PPN (Rp)</th>
														<th>PPH Final (Rp)</th>
														<th>Netto Penerimaan (Rp)</th>
														<th>Action</th>
													</tr>


													<!-- <?php $no = 1;
															foreach ($Job as $j => $value) : ?> -->
													<tr>
														<td><?php echo $no++ ?></td>
													</tr>
													<!-- <?php
															endforeach;
															?> -->
												</table>
											</div>
										</div>

										<div class="tab-pane" id="timeline">
											<p></p>
											<div class="container-fluid">
												<div class="row">
													<div class="col-12">
														<div class="card">
															<div class="card-body">
																<!-- <a href="<?= site_url('job/sub_job') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> -->
																<a data-target="#modal-default-TM" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Termin Member</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- The timeline -->

											<div class="modal fade" id="modal-default-TM">
												<div class=" modal-dialog">
													<div class="modal-content" style="width: 150%;">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title">Input Termin Member</h4>
														</div>
														<div class="modal-body">
															<form class="form-horizontal" style="width: 100%;">
																<div class="form-group row">
																	<label for="inputName" class="col-sm-2 col-form-label">Jenis Termin </label>
																	<div class="col-sm-10">
																		<select class="form-control" name="NotifLanjutTender" id="JenisTermin" onchange="changePesertaTender()" required="required">
																			<option value="UangMuka">Uang Muka</option>
																			<option value="Termin">Termin</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="inputEmail" class="col-sm-2 col-form-label">Tgl Cair</label>
																	<div class="col-sm-10">
																		<input type="Date" class="form-control" id="TglCair" placeholder="Tgl Cair Termin">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="inputName2" class="col-sm-2 col-form-label">Tgl Setor Ke Rekening Induk</label>
																	<div class="col-sm-10">
																		<input type="Date" class="form-control" id="TglSetor" placeholder="Tgl Setor">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="inputExperience" class="col-sm-2 col-form-label">No BAP</label>
																	<div class="col-sm-10">
																		<input type="text" class="form-control" id="NoBap" placeholder="No BAP">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="inputSkills" class="col-sm-2 col-form-label">Uraian</label>
																	<div class="col-sm-10">
																		<input type="text" class="form-control" id="Uraian" placeholder="Uraian">
																	</div>
																</div>
																<label>Netto Share Termin WKS(Rp) (Leader):</label>
																<input type="text" name="NettoLeader" id="NettoLeader" class="form-control" placeholder="0">
																<label>Netto Share Termin KIP (Rp) (Member):</label>
																<input type="text" name="NettoMember" id="NettoMember" class="form-control" placeholder="0">
																<label>Cadangan KSO Member 1:*</label>
																<input type="text" name="CadanganMember1" id="CadanganMember1" class="form-control" placeholder="0">
																<label>Cadangan KSO Member 2:*</label>
																<input type="text" name="CadanganMember2" id="CadanganMember2" class="form-control" placeholder="0">
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Simpan</button>
														</div>
													</div>
													<!-- /.modal-content -->
												</div>
												<!-- /.modal-dialog -->
											</div>

											<p> </p>
											<table class="table table-hover" border="1" cellspacing="2" width="100%">
												<tr style="background-color: deepskyblue;">
													<th>No</th>
													<th>Tgl Cair</th>
													<th>Tgl Setor</th>
													<th>No. BAP</th>
													<th>Uraian</th>
													<th>Member 1 (Rp)</th>
													<th>Member 2 (Rp)</th>
													<th>Netto Cadangan KSO Member 1(Rp)</th>
													<th>Netto Cadangan KSO Member 2 (Rp)</th>
													<th>Action</th>
												</tr>
												<!-- <?php $no = 1;
														foreach ($Job as $j => $value) : ?> -->
												<tr>
													<td><?php echo $no++ ?></td>
													<!--td><?= $value->JobNo; ?></td-->
													<!-- <td><?= $value->JobNm; ?></td>
                                                <td><?= $value->Deskripsi; ?></td>
                                                <td><?= $value->CompanyId; ?></td>
                                                <td><?= $value->StatusJob; ?></td>
                                                <td><?= $value->Kategori; ?></td>
                                                <td style="width: 5%">
                                                    <!-- <a title="Detail" href="<?= site_url('job/sub_job' . $value->JobNo) ?>" class="btn btn-success"><i class="fa fa-cubes"></i></a> -->
													<a title="SELECT" href="<?= site_url('job/sub_job') ?>" class="btn btn-success"><i class="fa fa-cubes"></i></a>
													<a title="DELETE" href="<?= site_url('job/sub_job') ?>" class="btn btn-success"><i class="fa fa-cubes"></i></a>
													</td>
												</tr>
												<!-- <?php
														endforeach;
														?> -->
											</table>
										</div>
										<!-- /.tab-pane -->
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div><!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
				</div>
				<!-- </div> -->
				<!-- </div> -->
			</div>
		</div>
	</section>

	<script type="text/javascript">
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e) {
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
		// rupiah.addEventListener('keydown', function(event) {
		//     return isNumberKey(event);
		// });

		var rupiah1 = document.getElementById('rupiah1');
		rupiah1.addEventListener('keyup', function(e) {
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah1.value = formatRupiah(this.value, 'Rp. ');
		});

		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix) {
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
				split = number_string.split(','),
				sisa = split[0].length % 3,
				rupiah = split[0].substr(0, sisa),
				ribuan = split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
			// return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>

	<?php function buatRupiah($angka)
	{
		$hasil = " Rp " . number_format($angka, 2, ',', '.');
		return $hasil;
	}
	?>

	<!---Modal DIPA EDIT --->
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Default Modal</h4>
				</div>
				<form action="<?= site_url('absensicon/updateDataAksi') ?>" method="post">
					<div class="modal-body">
						<input type="text" name="id_Dipa" hidden="" value="<?php echo $dipa->id_Dipa ?>">
						<input type="text" name="JobNo" hidden="" value="<?php echo $dipa->JobNo ?>">
						<p hidden=""><?= $this->session->userdata('MIS_LOGGED_NAME'); ?></p>
						<label>Tahun</label>
						<input type="text" name="Tahun" id="InfoPasar" class="form-control">
						<label>DIPA (Rp)</label>
						<input type="text" name="Dipa" id="Dipa" class="form-control" onkeyup="toDecimal(this)">
						<label>DIPA Pagu Bruto</label>
						<input type="text" name="PaguBudget" id="PaguBudget" class="form-control" onkeyup="toDecimal(this)">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!---END DIPA EDIT -->
</div>

<!-- <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#diskon').keyup(function() {
				<
				!--Ambil nilai bayar dan diskon!-- >
					var bayar = parseInt($('#bayar').val());
				var diskon = parseInt($('#diskon').val());

				<
				!--Perhitungan bayar - (diskon / 100 x bayar) !-- >
					var total_bayar = bayar - (diskon / 100) * bayar;
				$('#Tbayar').val(total_bayar);
			});
		});
	</script> -->

<script src="<?= base_url('assets/plugins/numeral/numeral.js') ?>"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">
	function termininduk() {

		var bruto = $('input[name="BrutoBoQ"]').val().replace(/,/g, '');
		var potum = $('input[name="PotUM"]').val().replace(/,/g, '');
		var potret = $('input[name="Potretensi"]').val();
		var netto = parseInt(bruto) - parseInt(potum);
		var netto1 = parseInt(netto) - parseInt(potret);
		if (!isNaN(netto1)) {
			$('input[name="NettoBoQ"]').val(numeral(netto1).format(0.0));
		} else {
			$('input[name="NettoBoQ"]').val(0);
		}
	}

	function Rtermin() {
		var bruto = $('#Budget').val();
		bruto = parseInt(bruto.replace(/,/g, ''));
		var persentase = parseInt($('#TxtPersentase').val());
		var nominal = bruto * (persentase / 100);

		$('#TxtA').val(numeral(nominal).format(0.0));

		var A = parseInt($('#TxtA').val().replace(/,/g, ''));
		var D = parseInt($('#TxtD').val().replace(/,/g, ''));
		var UM = A * (D / 100);
		$('#TxtUM').val(numeral(UM).format(0.0));

		$("input[value=1]").on("change", function(evt) {
			if ($(this).prop("checked")) {

				var bruto = $('#Budget').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM').val(numeral(UM).format(0.0));

				var E = A * (5 / 100);
				$("#TxtE").val(numeral(E).format(0.0));

				var E = parseInt($('#TxtE').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH').val(numeral(H1).format(0.0));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK').val(numeral(K).format(0.0));

			} else {

				var bruto = $('#Budget').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM').val(numeral(UM).format(0.0));

				var E = 0;
				$("#TxtE").val(E);

				var E = parseInt($('#TxtE').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH').val(numeral(H1).format(0.0).replace(/,/g, ''));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK').val(numeral(K).format(0.0));
			}
		});

		var E = parseInt($('#TxtE').val().replace(/,/g, ''));
		var UM = parseInt($('#TxtUM').val().replace(/,/g, ''));
		var F = UM + E;
		$('#TxtF').val(numeral(F).format(0.0));

		var A = parseInt($('#TxtA').val().replace(/,/g, ''));
		var F = parseInt($('#TxtF').val().replace(/,/g, ''));
		var G = A - F;
		$('#TxtG').val(numeral(G).format(0.0));

		var G = parseInt($('#TxtG').val().replace(/,/g, ''));
		var H = (G / 1.1);
		var H1 = H * (10 / 100);
		$('#TxtH').val(numeral(H1).format(0.0));

		var G = parseInt($('#TxtG').val().replace(/,/g, ''));
		var H = parseInt($('#TxtH').val().replace(/,/g, ''));
		var I = G - H;
		$('#TxtI').val(numeral(I).format(0.0));

		var G = parseInt($('#TxtG').val().replace(/,/g, ''));
		var J = (G / 1.1);
		var J1 = J * (3 / 100);
		$('#TxtJ').val(numeral(J1).format(0.0));

		var I = parseInt($('#TxtI').val().replace(/,/g, ''));
		var J = parseInt($('#TxtJ').val().replace(/,/g, ''));
		var K = I - J;
		$('#TxtK').val(numeral(K).format(0.0));

	}

	function Rtermin1() {
		var bruto = $('#Budget1').val();
		bruto = parseInt(bruto.replace(/,/g, ''));
		var persentase = parseInt($('#TxtPersentase1').val());
		var nominal = bruto * (persentase / 100);

		$('#TxtA1').val(numeral(nominal).format(0.0));

		var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
		var D = parseInt($('#TxtD1').val().replace(/,/g, ''));
		var UM = A * (D / 100);
		$('#TxtUM1').val(numeral(UM).format(0.0));

		// var E = A * (5 / 100);
		// $('#TxtE').val(E)

		$("input[value=1]").on("change", function(evt) {
			if ($(this).prop("checked")) {

				var bruto = $('#Budget1').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase1').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA1').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD1').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM1').val(numeral(UM).format(0.0));

				var E = A * (5 / 100);
				$("#TxtE1").val(numeral(E).format(0.0));

				var E = parseInt($('#TxtE1').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM1').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF1').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF1').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG1').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH1').val(numeral(H1).format(0.0));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH1').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI1').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ1').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI1').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ1').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK1').val(numeral(K).format(0.0));

			} else {

				var bruto = $('#Budget1').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase1').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA1').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD1').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM1').val(numeral(UM).format(0.0));

				var E = 0;
				$("#TxtE1").val(E);

				var E = parseInt($('#TxtE1').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM1').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF1').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF1').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG1').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH1').val(numeral(H1).format(0.0).replace(/,/g, ''));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH1').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI1').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ1').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI1').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ1').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK1').val(numeral(K).format(0.0));
			}
		});

		var E = parseInt($('#TxtE1').val().replace(/,/g, ''));
		var UM = parseInt($('#TxtUM1').val().replace(/,/g, ''));
		var F = UM + E;
		$('#TxtF1').val(numeral(F).format(0.0));

		var A = parseInt($('#TxtA1').val().replace(/,/g, ''));
		var F = parseInt($('#TxtF1').val().replace(/,/g, ''));
		var G = A - F;
		$('#TxtG1').val(numeral(G).format(0.0));

		var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
		var H = (G / 1.1);
		var H1 = H * (10 / 100);
		$('#TxtH1').val(numeral(H1).format(0.0));

		var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
		var H = parseInt($('#TxtH1').val().replace(/,/g, ''));
		var I = G - H;
		$('#TxtI1').val(numeral(I).format(0.0));

		var G = parseInt($('#TxtG1').val().replace(/,/g, ''));
		var J = (G / 1.1);
		var J1 = J * (3 / 100);
		$('#TxtJ1').val(numeral(J1).format(0.0));

		var I = parseInt($('#TxtI1').val().replace(/,/g, ''));
		var J = parseInt($('#TxtJ1').val().replace(/,/g, ''));
		var K = I - J;
		$('#TxtK1').val(numeral(K).format(0.0));

	}

	function Rtermin2() {
		var bruto = $('#Budget2').val();
		bruto = parseInt(bruto.replace(/,/g, ''));
		var persentase = parseInt($('#TxtPersentase2').val());
		var nominal = bruto * (persentase / 100);

		$('#TxtA2').val(numeral(nominal).format(0.0));

		var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
		var D = parseInt($('#TxtD2').val().replace(/,/g, ''));
		var UM = A * (D / 100);
		$('#TxtUM2').val(numeral(UM).format(0.0));

		// var E = A * (5 / 100);
		// $('#TxtE').val(E)

		$("input[value=1]").on("change", function(evt) {
			if ($(this).prop("checked")) {

				var bruto = $('#Budget2').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase2').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA2').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD2').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM2').val(numeral(UM).format(0.0));

				var E = A * (5 / 100);
				$("#TxtE2").val(numeral(E).format(0.0));

				var E = parseInt($('#TxtE2').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM2').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF2').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF2').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG2').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH2').val(numeral(H1).format(0.0));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH2').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI2').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ2').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI2').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ2').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK2').val(numeral(K).format(0.0));

			} else {

				var bruto = $('#Budget2').val();
				bruto = parseInt(bruto.replace(/,/g, ''));
				var persentase = parseInt($('#TxtPersentase2').val());
				var nominal = bruto * (persentase / 100);

				$('#TxtA2').val(numeral(nominal).format(0.0));

				var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
				var D = parseInt($('#TxtD2').val().replace(/,/g, ''));
				var UM = A * (D / 100);
				$('#TxtUM2').val(numeral(UM).format(0.0));

				var E = 0;
				$("#TxtE2").val(E);

				var E = parseInt($('#TxtE2').val().replace(/,/g, ''));
				var UM = parseInt($('#TxtUM2').val().replace(/,/g, ''));
				var F = UM + E;
				$('#TxtF2').val(numeral(F).format(0.0));

				var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
				var F = parseInt($('#TxtF2').val().replace(/,/g, ''));
				var G = A - F;
				$('#TxtG2').val(numeral(G).format(0.0));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var H = (G / 1.1);
				var H1 = H * (10 / 100);
				$('#TxtH2').val(numeral(H1).format(0.0).replace(/,/g, ''));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var H = parseInt($('#TxtH2').val().replace(/,/g, ''));
				var I = G - H;
				$('#TxtI2').val(numeral(I).format(0.0));

				var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
				var J = (G / 1.1);
				var J1 = J * (3 / 100);
				$('#TxtJ2').val(numeral(J1).format(0.0));

				var I = parseInt($('#TxtI2').val().replace(/,/g, ''));
				var J = parseInt($('#TxtJ2').val().replace(/,/g, ''));
				var K = I - J;
				$('#TxtK2').val(numeral(K).format(0.0));
			}
		});

		var E = parseInt($('#TxtE2').val().replace(/,/g, ''));
		var UM = parseInt($('#TxtUM2').val().replace(/,/g, ''));
		var F = UM + E;
		$('#TxtF2').val(numeral(F).format(0.0));

		var A = parseInt($('#TxtA2').val().replace(/,/g, ''));
		var F = parseInt($('#TxtF2').val().replace(/,/g, ''));
		var G = A - F;
		$('#TxtG2').val(numeral(G).format(0.0));

		var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
		var H = (G / 1.1);
		var H1 = H * (10 / 100);
		$('#TxtH2').val(numeral(H1).format(0.0));

		var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
		var H = parseInt($('#TxtH2').val().replace(/,/g, ''));
		var I = G - H;
		$('#TxtI2').val(numeral(I).format(0.0));

		var G = parseInt($('#TxtG2').val().replace(/,/g, ''));
		var J = (G / 1.1);
		var J1 = J * (3 / 100);
		$('#TxtJ2').val(numeral(J1).format(0.0));

		var I = parseInt($('#TxtI2').val().replace(/,/g, ''));
		var J = parseInt($('#TxtJ2').val().replace(/,/g, ''));
		var K = I - J;
		$('#TxtK2').val(numeral(K).format(0.0));

	}
</script>
