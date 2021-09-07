
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <label class="col-lg col-form-label"><?php echo $judul ?> </label><p></p>
            <label for="inputName" type="input" name="JobNo" class="col-sm col-form-label" id="JobNo"><?php echo $spr->JobNo ?></label> - <label for="inputName" name="JobNm" class="col-sm col-form-label" id="JobNo"><?php echo $spr->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $spr->Lokasi ?></label>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('welcome/index') ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $judul ?></li>
        </ol>
    </section>

    <section class="content-header">
        <a href="<?= site_url('job/sub_job/'.$spr->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
        <!-- <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a> -->
    </section>   

    <!-- <Section class="content"> -->
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                            <div class="box-header bg-blue-gradient">
                                  <h3 class="box-title">SPR </h3>
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                    </div>

                        <div class="box-body">
                            <div class="form-group">
                                <div class="box-body">
                                <div class="form-group">
                                    <a href="#modal-EntrySpr" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                                    <p>
                                    <div class="box-body table-responsive no-padding">
                                        <table id="example1" class="table table-hover table-bordered table-striped">
                                            <tr>
                                                <th style="background-color: aliceblue;">Tgl Pemakaian Material / Barang</th>
                                                <th style="background-color: aliceblue;">Nama Material / Barang</th>
                                                <th style="background-color: aliceblue;">Satuan</th>
                                                <th style="background-color: aliceblue;">QTY</th>
                                                <th style="background-color: aliceblue;">Keterangan</th>
                                                <th style="background-color: aliceblue;">Approved By</th>
                                                <th style="background-color: aliceblue;">Tgl Approved</th>
                                                <th style="background-color: aliceblue;"></th>
                                            </tr>
                                            <tr>
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
                    </div>
                </div>                        
            </div>

            <div class="modal fade" tabindex="-1" role="dialog" id="modal-EntrySpr">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Entry Permintaan Material / Alat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="modal-header">
                          <center><h4 class="modal-title">Informasi Dasar</h4></center>
                      </div>
                    <div class="col-md-6">                                  
                    <br>
                       <p>        
                      <label>Job No</label>
                      <input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $spr->JobNo ?> - <?php echo $spr->JobNm ?>">
                      <label>No SPR</label>
                      <input type="text" name="NoSpr" id="NoSpr" class="form-control" required="required">
                      <label>Tgl SPR</label>
                      <input type="date" name="TglSpr" id="TglSpr" class="form-control" required="required">
                    </div>

                     <div class="col-md-6">                                  
                    <br>
                       <p>        
                      <label>Kepada</label>
                      <input type="text" name="Kepada" id="Kepada" class="form-control" value="<?php echo $spr->JobNo ?> - <?php echo $spr->JobNm ?>">
                      <label>Tgl Penggunaan</label>
                      <input type="Date" name="TglPenggunaan" id="TglPenggunaan" class="form-control" required="required">
                      <label>Untuk Pekerjaan</label>
                      <textarea class="form-control" name="UraianPek" id="UraianPekerjaan"></textarea>
                    </div>
                </p>
                    <div class="modal-header">
                          <center><h4 class="modal-title">Informasi Pengiriman</h4></center>
                      </div>

                      <div class="col-md-6">                                  
                    <br>
                       <p>        
                      <label>Nama PIC Logistik</label>
                      <input type="text" name="JobNo" id="JobNo" class="form-control">
                      <label>Telepon / HP</label>
                      <input type="text" name="NoSpr" id="NoSpr" class="form-control" required="required">                     
                    </div>

                     <div class="col-md-6">                                  
                    <br>
                       <p>        
                      <label>Alamat Dikirim</label>
                      <input type="text" name="Kepada" id="Kepada" class="form-control" value="<?php echo $spr->JobNo ?> - <?php echo $spr->JobNm ?>">
                      <label>Waktu</label>
                      <input type="Date" name="TglPenggunaan" id="TglPenggunaan" class="form-control" required="required">                   
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                    <div class="form-group">
                        <a href="#modal-EntryBrgSpr" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Barang </a>
                        <p>
                        <div class="box-body table-responsive no-padding">
                            <table id="example1" class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th style="background-color: aliceblue;">No.</th>
                                    <th style="background-color: aliceblue;">Kode RAP</th>
                                    <th style="background-color: aliceblue;">Uraian</th>
                                    <th style="background-color: aliceblue;">Vol</th>
                                    <th style="background-color: aliceblue;">Satuan</th>
                                    <th style="background-color: aliceblue;"></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog" id="modal-EntryBrgSpr">
                          <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Entry Permintaan Barang / Material</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <!-- <div class="col-md-10">                                   -->
                                <br>
                                   <p>        
                                  <label>No</label>
                                  <input type="text" name="No_Urut" id="No_Urut" class="form-control">
                                  <label>Alokasi</label>
                                  <input type="text" name="alokasi" id="alokasi" class="form-control" required="required">
                                  <label>Kode RAP</label>
                                  <input type="text" name="koderap" id="Nabar" class="form-control" required="required">
                                  <label>Uraian</label>
                                  <textarea class="form-control" name="uraian" required="required"></textarea>
                                  <label>Volume</label>
                                  <input type="text" name="Vol" id="Vol" class="form-control"> 
                                  <label>Satuan</label>
                                  <input type="text" name="satuan" class="form-control">
                                  

                                <!-- </div> -->

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>

                              </div>

                          </div>
                      </div>
                    </div>

                    </div>


                  </div>

              </div>
          </div>
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



    

