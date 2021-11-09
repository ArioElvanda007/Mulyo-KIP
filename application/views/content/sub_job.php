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
            Job Detail<p></p>
            <?php foreach ($job as $jb) ?>
            <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $jb->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $jb->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $jb->Lokasi ?></label></>

                <?php T_ENDFOREACH ?>
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
                            <a href="<?= site_url('job') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>


                        <section class="content">
                            <div class="row">
                                <div class="col-lg-3 col-xs-6" id="DataProyek">
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) ?>
                                            <a href="<?php echo site_url('job/dataproyek/' . $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Data Proyek</h3>
                                                <p style="color: aliceblue;">Job No, Nama Proyek, HPS, Wilayah Pekerjaan, dll</p>
                                            </a>
                                            <?php T_ENDFOREACH ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-database"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) ?>
                                            <a href="<?php echo site_url('job/datakontrak/' . $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Data Kontrak</h3>

                                                <p style="color: aliceblue;">Addendum, Rekening Proyek, Jaminan, Ceklist Doc Proyek</p>
                                            </a>
                                            <?php T_ENDFOREACH  ?>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="Entry/dataproyek.php" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-orange">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) ?>
                                            <a href="<?php echo site_url('job/dipa/' . $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Dipa / Termin</h3>

                                                <p style="color: aliceblue;">Dipa, Rencana Termin, Penerimaan (Termin Induk, Termin Member) </p>
                                            </a>
                                            <?php T_ENDFOREACH ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-dollar"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-blue">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) ?>
                                            <a href="<?php echo site_url('job/tatakelola/' . $jb->JobNo)  ?>">
                                                <h3 style="color: aliceblue;">Tata Kelola</h3>

                                                <p style="color: aliceblue;">Data KSO, Struktur Organisasi, Tipe Managerial, Porsi Kontrak</p>
                                            </a>
                                            <?php T_ENDFOREACH ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/rap/' . $jb->JobNo)  ?>">
                                                    <h3 style="color: aliceblue;">RAP</h3>

                                                    <p style="color: aliceblue;">RAP, SUMDA</p>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-blue">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/spr/' . $jb->JobNo)  ?>">
                                                <h3 style="color: aliceblue;">SPR</h3>

                                                <p style="color: aliceblue;">Daftar Permintaan Material / Alat</p>
                                            </a>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-purple">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/pdpj/' . $jb->JobNo)  ?>">
                                                    <h3 style="color: aliceblue;">PD / PJ</h3>

                                                    <p style="color: aliceblue;">PD Lapangan, PJ Lapangan</p>
                                                </a>
                                            <?php endforeach;  ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/rppm/' . $jb->JobNo)  ?>">
                                                <h3 style="color: aliceblue;">RPPM</h3>

                                                <p style="color: aliceblue;">RPPM, EMON</p>
                                            </a>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/mos/' . $jb->JobNo)  ?>">
                                                <h3 style="color: aliceblue;">MOS</h3>

                                                <p style="color: aliceblue;">Mos In, Mos Out</p>
                                            </a>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                                <a href="<?php echo site_url('job/leaflet/' . $jb->JobNo)  ?>">
                                                <h3 style="color: aliceblue;">Leaflet Proyek</h3>

                                                <p style="color: aliceblue;">Data Profil Proyek</p>
                                            </a>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                

                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Progress Fisik</h3>

                                                <p style="color: aliceblue;">Progress Fisik Pengerjaan</p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
											</p>

                            <a href="#" class="btn btn-danger" style="width: 100%;"> PROCUREMENT / PURCHASHING</a>

											</p>

							<div class="row">
								<div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-orange">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Daftar KO / PO</h3>

                                                <p style="color: aliceblue;">Tambah Kontrak, Tambah PO</p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
								</div>
								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-blue">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h4 style="color: aliceblue;">Approve KO / PO</h4>

                                                <p style="color: aliceblue;">Approval Kontrak, Approval PO</p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
								</div>
								
								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-purple">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">MOS</h3>

                                                <p style="color: aliceblue;">List / Data Material On Project </p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Approval MOS</h3>

                                                <p style="color: aliceblue;">Approval MOS Base On Mos Project</p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-green">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Invoice</h3>

                                                <p style="color: aliceblue;">Invoice, Pembayaran PD </p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-red">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">KO Add/Revisi</h3>

                                                <p style="color: aliceblue;">Create Addendum, History addendum </p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-blue">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Tracking KO</h3>

                                                <p style="color: aliceblue;">Tracking KO </p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

								<div class="col-lg-3 col-xs-6">
									<div class="small-box bg-orange">
                                        <div class="inner">
                                            <?php foreach ($job as $jb) : ?>
                                            <a href="<?php echo site_url('job/progressfisik/'. $jb->JobNo) ?>">
                                                <h3 style="color: aliceblue;">Pembatalan KO</h3>

                                                <p style="color: aliceblue;">Pembatalan KO</p>
                                            </a>
                                        <?php  endforeach; ?>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bookmark-o"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Klik here <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


							</div>

						
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- </Section> -->

</div>
