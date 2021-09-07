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
        <a href="<?= site_url('job/sub_job/'.$dipa->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> MENU INPUTAN</a>
        <a href="<?= site_url('job/tatakelola/' .$dipa->JobNo) ?>" data-toggle="modal" class="btn btn-primary"> NEXT TO TATA KELOLA &nbsp <i class="fa fa-arrow-right"></i></a>
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
                            <?php echo form_open_multipart('job/TambahDipa') ; ?>
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
                                <th></th>
                                <th>Tahun</th>
                                <th>DIPA (Rp)</th>
                                <th>DIPA Pagu Bruto (Rp)</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($tbldipa as $dipa) : ?>
                                <tr>
                                    <td><?= $dipa->id_Dipa ?></td>
                                    <td><?= $dipa->Tahun ?></td>
                                    <td><?= buatRupiah($dipa->Budget); ?></td>
                                    <td><?= buatRupiah($dipa->PaguBudget); ?></td>
                                    <td><?php echo anchor('Job/DeleteDipa/'.$dipa->id_Dipa, '<div class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></div>') ?>
                                    <?php echo anchor('Job/UpdateFHO/'.$dipa->id_Dipa,'<div class=btn btn-xs btn-primary><i class=fa fa-edit"></i></div>') ?></td>
                                    <!-- <td><button type="button" data-toggle="modal" data-target="#modal-EditDipa" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>
                                        <a href=""ata-toggle="modal" data-target="#modal-Jaminan" class="btn btn-danger btn-xs "><i class="fa fa-trash-o"></i></a>
                                    </td> -->
                                </tr>
                            <?php endforeach; ?>
                           
                     </table>
                    </div>

                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

        <div class="modal fade" id="modal-EditDipa">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Dipa</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="id_Dipa" hidden="">
                                <label>Tahun</label>
                                <input type="text" name="JobNm" id="InfoPasar" class="form-control">
                                <label>DIPA (Rp)</label>
                                <input type="text" name="JobNm" id="InfoPasar" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

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
                                    <a data-target="#modalRencanaTermin" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Termin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modalRencanaTermin">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">DATA ENTRY TERMIN</h4>
                            </div>

                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Termin</label>
                                        <div class="col-sm-8">
                                            <select name="JenisTermin" class="form-control">
                                                <option value="">--Pilih Jenis Termin--</option>
                                                <option value="Uang Muka">Uang Muka</option>
                                                <option value="Termin">Termin</option>
                                                <option value="Retensi">Retensi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Rencana Tgl Jatuh Tempo</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="tglRencanaTermin" class="form-control" id="TglRencanaTermin">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Uraian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="UraianTermin" placeholder="Uraian Termin">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Presentasi Rencana</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="PresentaseRencana" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nominal Rencana (A)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="NominalRencanaTermin">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Potongan Uang Muka (B = A x n%)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="PotUangMuka">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Retensi (C = A x 5%)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="Retensi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Total Potongan (D = B + C)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="TotalPotongan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">PPN (F = (E/1.1) x10%)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="PPNRencanaTermin">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Total Nett Exc. PPN (G = E- F)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="TotalNett">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">PPH (H = (E/1.1)x3%)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="PPH">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Netto Exc. PPN & PPH (I = G-H)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="Netto">
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
                                <th>Tahun</th>
                                <th>DIPA (Rp)</th>
                                <th>DIPA Pagu Bruto (Rp)</th>
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

                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="box-title" style="font-size: larger;">PENERIMAAN TERMIN</h1>
                <p></p>


                <div class="modal fade" id="modal-default-PM">
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
                        <div class="col-md-9">
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
                                                                    <div class="col-sm-8">
                                                                        <select name="JenisTermin" class="form-control">
                                                                            <option value="Uang Muka">Uang Muka</option>
                                                                            <option value="Termin">Termin</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Tgl Cair</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" name="TglCair" class="form-control" id="TglCair" >
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
                                                                        <input type="text" name="Uraian" class="form-control" name="Uraian" placeholder="Uraian"></input>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Bruto BoQ (Rp)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="BrutoBoq" id="BrutoBoq" placeholder="BrutoBoQ">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Potongan Uang Muka (Rp)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="PotUM" id="PotUM" placeholder="Potongan Uang Muka">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Potongan Retensi (Rp)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="Potretensi" id="Potretensi" placeholder="Potongan Retensi">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Netto BoQ (Rp)</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control" name="NettoBoq" id="NettoBoQ" placeholder="Netto BoQ">
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

                                            <!-- <div class="modal-body">
                                                <form class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label>Nilai Kontrak Incl Addendum</label>
                                                        <p></p>
                                                        <label for="inputName" class="col-sm-2 col-form-label">Netto BoQ (Rp)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputName" placeholder="Netto BoQ (Rp)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Fisik (Rp)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputEmail" placeholder="Fisik (Rp)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">PPN (Rp)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputName2" placeholder="PPN (Rp)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience" class="col-sm-2 col-form-label">PPH Final (Rp)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputExperience" placeholder="PPH Final (Rp)"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills" class="col-sm-2 col-form-label">Netto Penerimaan (Rp)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputSkills" placeholder="Netto Penerimaan (Rp)">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div> -->

                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover" border="1" cellspacing="2" width="100%">

                                                        <th colspan="7" scope="colgroup"><center>Nilai Kontrak Addendum</center></th>
                                                        <th>Netto BoQ (Rp)</th>
                                                        <th>Fisik (Rp)</th>
                                                        <th>PPN (Rp)</th>
                                                        <th>PPH Final (Rp)</th>
                                                        <th>Netto Penerimaan (Rp)</th>

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
        rupiah.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
        // rupiah.addEventListener('keydown', function(event) {
        //     return isNumberKey(event);
        // });

        var rupiah1 = document.getElementById('rupiah1');
        rupiah1.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah1.value = formatRupiah(this.value, 'Rp. ');
        });
 
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split           = number_string.split(','),
            sisa            = split[0].length % 3,
            rupiah          = split[0].substr(0, sisa),
            ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
 
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
 
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ?  rupiah : '');
            // return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>

    <?php  function buatRupiah($angka){
        $hasil = " Rp " . number_format($angka,2,',','.');
        return $hasil;
    }
 ?>


 ---Modal DIPA EDIT ---
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

 ---END DIPA EDIT --

    

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

</div>