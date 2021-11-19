<div class="content-wrapper">
	<section class="content-header">
		<h1>
			RAP & SUMDA
			<p>
			</p>

			<label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $rap->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $rap->JobNm ?></label>
			<br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $rap->Lokasi ?></label></>
				<!--small>Control panel</small-->
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('dashboard')  ?>><i class=" fa fa-dashboard"></i> Home</a></li>
			<li class="active">RAP & SUMDA</li>
		</ol>
	</section>

	<section class="content-header">

		<a href="<?= site_url('job/sub_job/' . $rap->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
		<a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a>

	</section>

	<!-- <Section class="content"> -->
	<section class="content">



		<div class="box box-success">
			<div class="box-header with-border">
				<h1 class="box-title">RAP</h1>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="form-group">
					<form class="form-horizontal" method="get" action="<?php echo base_url("job/rap") ?>">
						<div class="form-group row">
							<label for="inputName" class="col-sm-2 col-form-label">Alokasi</label>
							<div class="col-sm-10">
								<select class="form-control" name="alokasi" id="alokasi" style="width: 30%;">
									<?php foreach ($AksesAlokasi as $al) : ?>
										<option value="<?php echo $al->Alokasi  ?>"><?php echo $al->Alokasi  ?> - <?php echo $al->Keterangan ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail" class="col-sm-2 col-form-label">Versi</label>
							<div class="col-sm-10">
								<select class="form-control" name="Vers" id="Versi" style="width: 30%;">
									<option value="disable diselected">0.0</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="FileRap" class="col-lg-2 col-form-label">Upload File RAP</label>
							<div class="col-sm-10">
								<input type="file" name="filerap" id="filerap" class="form-control" style="width: 30%;">
							</div>
						</div>
					</form>

					<p></p>
					<a data-target="#modal-default-rap" data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> TAMBAH DATA</a>
					<a data-target="#modal-default-versirap" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAH VERSI</a>
					<a href="#save" data-toggle="modal" class="btn btn-success"><i class="fa fa-print"></i> PRINT</a>
					<button type="submit" class="btn btn-microsoft pull-right"><i class="fa fa-search"> CARI</i></button>
					&nbsp;&nbsp;
					&nbsp; <input type="text" name="Cari" id="Cari" class="form-control pull-right" style="width: 30%;">

					<p></p>

					<div class="box-body table-responsive no-padding">
						<table class="table table-hover" border="1" cellspacing="2" width="100%">
							<tr>
								<th hidden> Type</th>
								<th hidden> No Urut</th>
								<th style="background-color: darkcyan;">
									<center> Kode RAP</center>
								</th>
								<th style="background-color: darkcyan;">
									<center> Uraian</center>
								</th>
								<th style="background-color: darkcyan;">
									<center> Sat</center>
								</th>
								<th style="background-color: darkcyan;">
									<center> Vol</center>
								</th>
								<th style="background-color: cyan;">
									<center> RAP <p> Harga Satuan (Rp)</center>
								</th>
								<th style="background-color: cyan;">
									<center> RAP <p> Jumlah Harga (Rp)</center>
								</th>
								<th style="background-color: cyan;">
									<center> RAP <p> Bobot %</center>
								</th>
								<th style="background-color: greenyellow;">
									<Center> RAB <p> Harga Satuan (Rp)</Center>
								</th>
								<th style="background-color: greenyellow;">
									<center> RAB <p> Jumlah Harga (Rp)</center>
								</th>
								<th style="background-color: greenyellow;">
									<center> RAB <p> Bobot %</center>
								</th>
								<th style="background-color: darkcyan;"></th>
							</tr>
							<?php foreach ($pencarian_rap as $rap) : ?>
								<tbody>
									<tr>
										<td hidden><?php echo $rap->Tipe ?></td>
										<td hidden><?php echo $rap->NoUrut ?></td>
										<td><?php echo $rap->KdRAP ?></td>
										<td><?php echo $rap->Uraian ?></td>
										<td><?php echo $rap->Uom ?></td>
										<td><?php echo number_format($rap->Vol)  ?></td>
										<td><?php echo number_format($rap->HrgSatuan)  ?></td>
										<td id="JmlHarga"><?php echo number_format($rap->Vol * $rap->HrgSatuan) ?></td>
										<td></td>
										<td><?php echo number_format($rap->HrgRAB) ?></td>
										<td><?php echo number_format($rap->Vol * $rap->HrgRAB) ?></td>
										<td></td>
									</tr>
								</tbody>

							<?php endforeach; ?>

							<script type="text/javascript">
								$(function() {

									var TotalValue = 0;

									$("tr #JmlHarga").each(function(index, value) {
										currentRow = parseFloat($(this).text());
										TotalValue += currentRow
									});
									document.getElementById('ttlRAP').innerHTML = TotalValue;
								});
							</script>

							<tr style="background-color:lightgray;">
								<td colspan="5" rowspan="5">
									<h5 style="float: right;">TOTAL RAP</h5>
								</td>
								<td id="ttlRAP"></td>
								<td></td>
								<td>
									<h5 style="float: right;">TOTAL RAB</h5>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="modal fade" id="modal-default-rap">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Tambah RAP</h4>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputName" class="col-sm-2 col-form-label">Tipe</label>
										<div class="col-sm-10">
											<select class="form-control" name="tipe_rap" id="Tipe_rap" onchange="tipe_rap()">
												<option value="0">-- Pilih Salah Satu --</option>
												<option value="Pelaksanaan">Header</option>
												<option value="Pemeliharaan">Detail</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail" class="col-sm-2 col-form-label">Header</label>
										<div class="col-sm-10">
											<select name="Header_Rap" id="Header_Rap" class="form-control">
												<option value="0">Top Header</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputName2" class="col-sm-2 col-form-label">Alokasi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Alokasi" placeholder="Alokasi">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputExperience" class="col-sm-2 col-form-label">Kode RAP</label>
										<div class="col-sm-10">
											<input class="form-control" id="Koderap" placeholder="Kode RAP" name="Kode RAP">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputSkills" class="col-sm-2 col-form-label">Uraian Pekerjaan </label>
										<div class="col-sm-10">
											<textarea type="text" class="form-control" id="inputSkills" placeholder="Uraian Pekerjaan"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputvolume" class="col-sm-2 col-for-label">Volume</label>
										<div class="col-sm-10">
											<input type="text" name="volume" id="volume" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputsatuan" class="col-sm-2 col-for-label">Satuan</label>
										<div class="col-sm-10">
											<input type="text" name="satuan" id="satuan" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputhargasatuan" class="col-sm-2 col-for-label">Harga Satuan</label>
										<div class="col-sm-10">
											<input type="text" name="hargasatuan" id="hargasatuan" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputhargasatuanrab" class="col-sm-2 col-for-label">Harga Satuan (RAB)</label>
										<div class="col-sm-10">
											<input type="text" name="hargasatuanrab" id="hargasatuanrab" class="form-control">
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

				<div class="modal fade" id="modal-default-versirap">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="close">
									<span aria-hidden="true">&times;</span></button>
								<h4 class="Modal-tittle">Tambah Versi RAP</h4>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group row">
										<label for="inputperubahan" class="col-sm-2 col-for-label">Perubahan</label>
										<div class="col-sm-10">
											<label><input type="checkbox" id="major"> &nbsp Major</label>
											&nbsp;&nbsp;
											<label><input type="checkbox" id="minor">&nbsp Minor</label>
										</div>
									</div>
									<div class="form-group row">
										<label for="inputversinow" class="col-sm-2 col-for-label">Versi Terkini</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" name="VersiNow" id="versiNow" style="padding-right: 0%;" width="50%">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputversinow" class="col-sm-2 col-for-label">Rubah Menjadi Versi</label>
										<div class="col-sm-5">
											<input type="text" class="form-control" name="VersiBaru" id="versiNow" style="padding-right: 0%;" width="50%">
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title" style="font-size: larger;">SUMDA</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="form-group">
					<!-- <form class="form-horizontal">
                        <div class="form-group row">

                            <label for="inputName" class="col-sm-2 col-form-label">Alokasi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Alokasi_Sumda" id="alokasi_sumda" style="width: 50%;">
                                    <option value="disable diselected">--Pilih Salah Satu--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Versi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Versi_Sumda" id="Versi_Sumda" style="width: 30%;">
                                    <option value="disable diselected">0.0</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="FileRap" class="col-lg-2 col-form-label">Upload File RAP</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="filerap" id="filerap" style="width: 30%;">
                            </div>
                        </div>
                    </form> -->
					<p></p>
					<p></p>
					<a data-target="#modal-PekSumda" data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> Tambah Jenis Pekerjaan</a>
					<a data-target="#modal-default-versiSumda" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Uraian Pekerjaan</a>
					<a href="#save" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Uraian SUMDA</a>
					<p></p>

					<div class="box-body table-responsive no-padding">
						<table id="TblSumda" class="table table-hover table-bordered table-striped" border="1" cellspacing="2" width="100%">
							<col>
							<colgroup span="3"></colgroup>
							<colgroup span="3"></colgroup>
							<tr>
								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>No</center>
								</td>
								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>Kode SUMDA</center>
								</td>
								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>Uraian Pekerjaan</center>
								</td>
								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>Koef</center>
								</td>
								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>Sat</center>
								</td>

								<th colspan="3" scope="colgroup" style="background-color:darkgoldenrod ;">
									<center>KONTRAK AWAL</center>
								</th>
								<th colspan="5" scope="colgroup" style="background-color:darkgoldenrod ;">
									<center>RAP 1.1</center>
								</th>

								<td rowspan="2" style="background-color:darkgoldenrod ;">
									<center>Aksi</center>
								</td>
							</tr>
							<tr>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Kontrak </p>Awal</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>H.Satuan</p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Jml Harga </p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Upah/Jasa </p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Material </p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Alat </p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>RAP 1.1 </p>(Rp)</center>
								</th>
								<th scope="col" style="background-color: deepskyblue;">
									<center>Jml Harga </p>(Rp)</center>
								</th>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal-PekSumda">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="Modal-tittle">Tambah Jenis Pekerjaan</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group row">
								<label class="col-sm-2 col-for-label">Kode Pekerjaan</label>
								<div class="col-sm-10">
									<input type="text" name="KodeSumda" id="KodeSumda" class="form-control" style="width: 20%;">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputversinow" class="col-sm-2 col-for-label">Nama Pekerjaan</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="NamaPekerjaan" id="NamaPekerjaan">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputversinow" class="col-sm-2 col-for-label">Kategori</label>
								<div class="col-sm-10">
									<select name="KategoriSumda" id="KategoriSumda" class="form-control">
										<Option value="Upah/Jasa">Upah / Jasa</Option>
										<option value="Material">Material</option>
										<option value="AlatKerja">Alat Kerja</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputuraian" class="col-sm-2 col-for-label">Uraian Pekerjaan</label>
								<div class="col-sm-10">
									<input type="text" name="UraianSumda" id="UraianSumda" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputkoef" class="col-sm-2 col-for-label">koef</label>
								<div class="col-sm-10">
									<input type="text" name="koef" id="koef" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputsatuan" class="col-sm-2 col-for-label">Satuan</label>
								<div class="col-sm-10">
									<input type="text" name="SatuanSumda" id="SatuanSumda" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputvolume" class="col-sm-2 col-for-label">Volume</label>
								<div class="col-sm-10">
									<input type="text" name="VolumeSumda" id="VolumeSumda" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputhSatuan" class="col-sm-2 col-for-label">Harga Satuan</label>
								<div class="col-sm-10">
									<input type="text" name="hSatuanSumda" id="hSatuanSumda" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputjmlharga" class="col-sm-2 col-for-label">Jumlah Harga</label>
								<div class="col-sm-10">
									<input type="text" name="jmlHargaSumda" id="jmlHargaSumda" class="form-control">
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal-default-versiSumda">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="Modal-tittle">Tambah Versi SUMDA</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="form-group row">
								<label for="inputperubahan" class="col-sm-2 col-for-label">Perubahan</label>
								<div class="col-sm-10">
									<label><input type="checkbox" id="major"> &nbsp Major</label>
									&nbsp;&nbsp;
									<label><input type="checkbox" id="minor">&nbsp Minor</label>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputversinow" class="col-sm-2 col-for-label">Versi Terkini</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="VersiNow" id="versiNow" style="padding-right: 0%;" width="50%">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputversinow" class="col-sm-2 col-for-label">Rubah Menjadi Versi</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="VersiBaru" id="versiNow" style="padding-right: 0%;" width="50%">
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>


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
