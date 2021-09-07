

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=".<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $judul ?> <p></p>
             <label for="inputName" type="input" name="JobNo" class="col-sm col-form-label" id="JobNo"><?php echo $rppm->JobNo ?></label> - <label for="inputName" name="JobNm" class="col-sm col-form-label" id="JobNo"><?php echo $rppm->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $rppm->Lokasi ?></label>
        </h1>
        <!-- <ol class="breadcrumb">
            <li><a href="<?= site_url('welcome/index') ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $title ?></li>
        </ol> -->
    </section>

    <section class="content-header">

      <a href="<?= site_url('job/sub_job/'.$rppm->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      
       
    </section>   

    <!-- <Section class="content"> -->
	<section class="content">
		<!-- <div class="row"> -->
			<!-- <div class="col-md-14"> -->
				<div class="box box-solid">
					<div class="box-header with-border">
            <div class="box-header bg-purple-gradient">
              <h3 class="box-title">Realisasi Pelaksanaan Progress Mingguan </h3>
              <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
          </div>

            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
              <a href="#modal-rppm" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
              <p>

              <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <col>
                  <colgroup span="3"></colgroup>
                  <colgroup span="3"></colgroup>
                  <tr>
                    <td rowspan="2"><center>No</center></td>
                    <td rowspan="2"><center>Nama Penawar / Uraian Kegiatan</center></td>

                    <td rowspan="2"><center>Sat</center></td>
                    <th colspan="4" scope="colgroup"><center>Kontrak</center></th>
                    <th colspan="5" scope="colgroup"><center>S/D Periode Minggu Lalu</center> </th>
                    <th colspan="5" scope="colgroup"><center>Periode Ini</center> </th>
                    <th colspan="4" scope="colgroup"><center>S/D Periode ini</center> </th>
                    <td rowspan="2"><center>Keterangan</center></td>
                  </tr>
                  <tr>
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Tgl Periode</center></th>                    
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Tgl Periode</center></th>

                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                  </tr>

                  <?php $i='1'   ?>

                  <tr>
                    <td><?php echo $i++ ?></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <center><a href="#" class="btn btn-success" title="Edit Data"><i class="fa fa-edit"></i></a>&nbsp;
                    <!-- <a onclick="return confirm('Yakin Hapus..?')" href="#" class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></a> -->
    
                    </td>
                  </tr>
                  
              </table>
              </div>
              </div>
              <div class="col-sm-6">
                
              </div>
            </div>
            <!-- /.box-body -->
          <!-- </div> -->
					<!-- </div> -->

          <div class="modal fade " id="modal-rppm">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Entry RPPM</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-6">                                  
                <h4 class="modal-title">Kolom Kontrak</h4>
                <br>
                   <p>        
                  <label>Nama Penawar / Uraian Kegiatan</label>
                  <input type="text" name="UraianPekerjaan" id="UraianPekerjaan" class="form-control">
                  <label>Satuan</label>
                  <input type="text" name="Sat" id="Sat" class="form-control">
                  <label>Volume</label>
                  <input type="text" name="Volume_rap" id="Volume_rap" class="form-control">
                  <label>Harga Satuan</label>
                  <input type="text" name="HargaSat_rap" id="HargaSat_rap" class="form-control">
                  <label>Total Harga</label>
                  <input type="text" name="TotalHar_rap" id="TotalHar_rap" class="form-control">
                  <label>Bobot</label>
                  <input type="text" name="Bobot_rap" id="Bobot_rap" class="form-control">
                  </div>
                
                <div class="col-md-6">
                <h4 class="modal-title">Periode Mingguan</h4>
                <br>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Periode  </label>
                        <input type="date" class="form-control" name="NpwpProyek" id="NpwpProyek">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Sampai </label>
                          <input type="date" class="form-control" name="NpwpProyek" id="NpwpProyek">
                      </div>
                  </div>
                  </p>
                    <label>Volume</label>
                    <input type="text" name="Volume_rap" id="Volume_rap" class="form-control">
                    <label>Harga Satuan</label>
                    <input type="text" name="HargaSat_rap" id="HargaSat_rap" class="form-control">
                    <label>Total Harga</label>
                    <input type="text" name="TotalHar_rap" id="TotalHar_rap" class="form-control">
                    <label>Bobot</label>
                    <input type="text" name="Bobot_rap" id="Bobot_rap" class="form-control">
                    <label>Kategori Periode</label>
                    <select name="KategoriPeriode" class="form-control">
                      <option value="Periode Sekarang">Periode Sekarang</option>
                      <option value="lalu">Periode Minggu Lalu</option>
                      <option value="simpan">simpan</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary">Save changes</button>

                <!-- </div> -->

              <!-- <div class="modal-footer" style="margin-top: 100px">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                  
              </div> -->
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>



				</div>
			<!-- </div>  -->



      
    




      <div class="col-md-14">
        <div class="box box-solid">
          <div class="box box-header with-border">
            <div class="box-header bg-red-gradient">
              <h3 class="box-title">EMON</h3>
              <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
              <a href="#modal-emon" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
              <p>
              <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <col>
                  <colgroup span="3"></colgroup>
                  <colgroup span="3"></colgroup>
                  <tr>
                    <td rowspan="2"><center>No</center></td>
                    <td rowspan="2"><center>Nama Penawar / Uraian Kegiatan</center></td>

                    <td rowspan="2"><center>Sat</center></td>
                    <th colspan="4" scope="colgroup"><center>Kontrak</center></th>
                    <th colspan="5" scope="colgroup"><center>S/D Periode Minggu Lalu</center> </th>
                    <th colspan="5" scope="colgroup"><center>Periode Ini</center> </th>
                    <th colspan="4" scope="colgroup"><center>S/D Periode ini</center> </th>
                    <td rowspan="2"><center>Keterangan</center></td>
                  </tr>
                  <tr>
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Tgl Periode</center></th>                    
                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                    <th scope="col"><center>Tgl Periode</center></th>

                    <th scope="col"><center>Volume</center></th>
                    <th scope="col"><center>Harga Satuan <p> (Rupiah)</center></th>
                    <th scope="col"><center>Total Harga <p> (Rupiah)</center></th>
                    <th scope="col"><center>Bobot</center></th>
                  </tr>

                  <?php $i='1'   ?>

                  <tr>
                    <td><?php echo $i++ ?></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <center><a href="#" class="btn btn-success" title="Edit Data"><i class="fa fa-edit"></i></a>&nbsp;
                    <!-- <a onclick="return confirm('Yakin Hapus..?')" href="#" class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></a> -->
    
                    </td>
                  </tr>
                  
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>                       
		<!-- </div> -->


  <div class="modal fade " id="modal-emon">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Entry EMON </h4>
              </div>
              <div class="modal-body">
                <div class="col-md-6">                                  
                <h4 class="modal-title">Kolom Kontrak</h4>
                <br>
                   <p>        
                  <label>Nama Penawar / Uraian Kegiatan</label>
                  <input type="text" name="UraianPekerjaan" id="UraianPekerjaan" class="form-control">
                  <label>Satuan</label>
                  <input type="text" name="Sat" id="Sat" class="form-control">
                  <label>Volume</label>
                  <input type="text" name="Volume_rap" id="Volume_rap" class="form-control">
                  <label>Harga Satuan</label>
                  <input type="text" name="HargaSat_rap" id="HargaSat_rap" class="form-control">
                  <label>Total Harga</label>
                  <input type="text" name="TotalHar_rap" id="TotalHar_rap" class="form-control">
                  <label>Bobot</label>
                  <input type="text" name="Bobot_rap" id="Bobot_rap" class="form-control">
                  </div>
                
                <div class="col-md-6">
                <h4 class="modal-title">Periode Mingguan</h4>
                <br>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Periode  </label>
                        <input type="date" class="form-control" name="NpwpProyek" id="NpwpProyek">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Sampai </label>
                          <input type="date" class="form-control" name="NpwpProyek" id="NpwpProyek">
                      </div>
                  </div>
                  </p>
                    <label>Volume</label>
                    <input type="text" name="Volume_rap" id="Volume_rap" class="form-control">
                    <label>Harga Satuan</label>
                    <input type="text" name="HargaSat_rap" id="HargaSat_rap" class="form-control">
                    <label>Total Harga</label>
                    <input type="text" name="TotalHar_rap" id="TotalHar_rap" class="form-control">
                    <label>Bobot</label>
                    <input type="text" name="Bobot_rap" id="Bobot_rap" class="form-control">
                    <label>Kategori Periode</label>
                    <select name="KategoriPeriode" class="form-control">
                      <option value="Periode Sekarang">Periode Sekarang</option>
                      <option value="lalu">Periode Minggu Lalu</option>
                      <option value="simpan">simpan</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary">Save changes</button>

                <!-- </div> -->

              <!-- <div class="modal-footer" style="margin-top: 100px">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                  
              </div> -->
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>


   
		
	</section>			

                <script>
    $(document).idle({
        onIdle: function(){
            window.location="/logout.php";                
        },
        idle: 10000
    });
</script>
</div>


<!-- /.container-fluid -->
</section>



</section>



<!-- </Section> -->



	

