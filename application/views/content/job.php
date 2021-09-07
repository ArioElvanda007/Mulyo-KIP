<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KIP | <?php echo $judul ?></title>
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
            <?php echo $judul ?>
            <!--small>Control panel</small-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard')  ?>><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active">List Data Job</li>
        </ol>

        <p align="right">
		<a href="<?php echo base_url('auth/logout') ?>">Logout</a>
	</p>
    </section>

    

    <Section class="content">
        </br>
        <div class="row" style="margin-left: 0.01%;">
            <div class="col-xs-12">
                <div class="box">


                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" border="1" cellspacing="2" width="100%">

                            <tr style="background-color: dodgerblue;">
                                <th>No</th>
                                <th>Job No</th>
                                <th>Job Name</th>
                                <th>Deskripsi</th>
                                <th>Kontraktor</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>


                            <?php $no = 1;

                            foreach ($Job as $j => $value) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?= $value->JobNo; ?></td>
                                    <td><?= $value->JobNm; ?></td>
                                    <td><?= $value->Deskripsi; ?></td>
                                    <td><?= $value->CompanyId; ?></td>
                                    <td><?= $value->StatusJob; ?></td>
                                    <td><?= $value->Kategori; ?></td>
                                    <td style="width: 5%">
                                        <?php echo anchor('job/sub_job/' . $value->JobNo, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                    </td>
                                </tr>


                            <?php
                            endforeach;

                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </Section>

</div>
