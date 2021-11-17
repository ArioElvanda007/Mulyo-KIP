<div class="content-wrapper">
	<section class="content-header">
		<h1>
			TATA KELOLA <p></p>

			<label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $tatakelola->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $tatakelola->JobNm ?></label>
			<br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $tatakelola->Lokasi ?></label></>
				<!--small>Control panel</small-->
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('dashboard')  ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
			<li class="active">Tata Kelola</li>
		</ol>
	</section>

	<section class="content-header">
		<a href="<?= site_url('job/sub_job/' . $tatakelola->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Menu Inputan</a>
		<!-- <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a> -->
	</section>

	<!-- <Section class="content"> -->
	<section class="content">



		<form action="<?= site_url('Job/updateDATAKSO') ?>" method="POST">
			<div class="box box-success">
				<div class="box-header with-border">
					<h1 class="box-title">Data KSO</h1>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label>KSO</label>
								<input type="text" name="JobNo" id="JobNo" value="<?php echo $tatakelola->JobNo ?>" hidden>
								<select class="form-control" name="Kso" id="Kso" onchange="changePesertaTender()">
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Type Managerial</label>
								<select class="form-control" name="TipeManagerial" id="TipeManagerial" onchange="DataKSO()">
									<option value="Single">Single</option>
									<option value="JO Partial">JO Partial</option>
									<option value="JO Integrated">JO Integrated</option>
								</select>
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No. Rekening KSO</label>
								<input type="text" class="form-control" name="NoRekKSO" id="NoRekKSO" value="<?php echo $tatakelola->NoRekKSO ?>">
							</div>
						</div>
					</div>
					<p>
						<hr>
					</p>
					<div class="row" id="Leader">
						<div class="form-group">
							<div class="col-md-1">
								<div class="form-group">
									<p>
										<label>
											<input type="checkbox" id="chkLeader" value="1">
											LEADER
										</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="Form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="NamaLeader" id="NamaLeader" value="<?php echo $tatakelola->Member1 ?>">
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
									<label>Share %</label>
									<input type="text" class="form-control" name="PersenLeader" id="PersenLeader" value="<?php echo $tatakelola->PersenShare1 ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Bruto (Rp) </label>
									<input type="text" class="form-control" name="BrutoLeader" id="BrutoLeader" value="<?php echo number_format($tatakelola->BrutoShare1)  ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Nama Bank </label>
									<input type="text" class="form-control" name="BankLeader" id="BankLeader" value="<?php echo $tatakelola->BankInduk ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>No. Rekening </label>
									<input type="text" class="form-control" name="NoRekLeader" id="NoRekLeader" value="<?php echo $tatakelola->NoRekInduk ?>">
								</div>
							</div>

						</div>
						<button type="button" class="btn btn-box-tool" data-widget="add" title="Tambah Member"><i class="fa fa-plus"></i></button>
					</div>
					<div class="row" id="Member1">
						<div class="form-group">
							<div class="col-md-1">
								<div class="form-group">
									<label>
										<input type="checkbox" name="ChkMember" id="ChkMember" value="1">
										MEMBER 1
									</label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="Form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="NamaMember" id="NamaMember" value="<?php echo $tatakelola->Member2 ?>">
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
									<label>Share %</label>
									<input type="text" class="form-control" name="PersenMember" id="PersenMember" value="<?php echo $tatakelola->PersenShare2 ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Bruto (Rp) </label>
									<input type="text" class="form-control" name="BrutoMember" id="BrutoMember" value="<?php echo number_format($tatakelola->BrutoShare2)  ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>Nama Bank </label>
									<input type="text" class="form-control" name="BankMember" id="BankMember" value="<?php echo $tatakelola->BankMember ?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>No. Rekening </label>
									<input type="text" class="form-control" name="NoRekMember" id="NoRekMember" value="<?php echo $tatakelola->NoRekMember ?>">
								</div>
							</div>

						</div>
						<button type="button" class="btn btn-box-tool" data-widget="add" title="Tambah Member"><i class="fa fa-plus"></i></button>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-microsoft">UPDATE</button>
					</div>
				</div>
			</div>
		</form>






		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title" style="font-size: larger;">MAN POWER PLANNING</h3>

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
						<table class="table table-hover" border="1" cellspacing="2" width="50%">

							<tr style="background-color: coral;">
								<th>No</th>
								<th>NIK</th>
								<th>Nama Karyawan</th>
								<th>Posisi</th>
							</tr>

							<?php $no = 1;

									foreach ($TblMPP as $mpp ) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?= $mpp->NIK; ?></td>
								<td><?= $mpp->Nama;?></td>
								<td><?= $mpp->Posisi;?></td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>

				</div>
				<!-- </div> -->
				<!-- </div> -->
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
