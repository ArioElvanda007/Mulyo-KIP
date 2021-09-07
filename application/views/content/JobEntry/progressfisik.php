
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <label class="col-lg col-form-label"><?php echo $judul ?> </label><p></p>
            <label for="inputName" type="input" name="JobNo" class="col-sm col-form-label" id="JobNo"><?php echo $ProgressFisik->JobNo ?></label> - <label for="inputName" name="JobNm" class="col-sm col-form-label" id="JobNo"><?php echo $ProgressFisik->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $ProgressFisik->Lokasi ?></label>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('welcome/index') ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $judul ?></li>
        </ol>
    </section>

    <section class="content-header">
        <a href="<?= site_url('job/sub_job/'.$ProgressFisik->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
        <!-- <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a> -->
    </section>   

    <!-- <Section class="content"> -->
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="box-body">
                                <div class="form-group">
                                    <a href="#modal-entryProgressFisik" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                                    <p>
                                    <div class="box-body table-responsive no-padding">
                                        <table id="example1" class="table table-hover table-bordered table-striped">
                                            <tr>
                                                <th style="background-color: aliceblue;">Tahun</th>
                                                <th style="background-color: aliceblue;">Bulan</th>
                                                <th style="background-color: aliceblue;">Rencana Fisik <p>Komulatif (%)</th>
                                                <th style="background-color: aliceblue;">Realisasi Fisik <p> Komulatif (%)</th>
                                                <th style="background-color: aliceblue;">Realisasi Keuangan <p> Komulatif (%)</th>    
                                                <th style="background-color: aliceblue;">Rencana Fisik <p>Tahun Berjalan(%)</th>
                                                <th style="background-color: aliceblue;">Realisasi Fisik <p> Tahun Berjalan (%)</th>
                                                <th style="background-color: aliceblue;">Realisasi Keuangan <p>Tahun  BErjalan(%)</th>
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
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="modal-entryProgressFisik">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Entry Progress Fisik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <form class="form-horizontal">
                        <div class="form-group row">

                            <label class="col-sm-4 col-form-label">JobNo</label>
                            <div class="col-sm-8">
                                <input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $ProgressFisik->JobNo ?> - <?php echo $ProgressFisik->JobNm ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tahun</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="tahun">
                                <option value="">--pilih tahun--</option>
                                <?php $tahun = date('Y'); 
                                for($i='2020'; $i<$tahun+5;$i++) { ?>
                                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Bulan</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="bulan">
                                <option value="">--pilih bulan--</option>                    
                                  <option value="01">Januari</option>
                                  <option value="02">Februari</option>
                                  <option value="03">Maret</option>
                                  <option value="04">April</option>
                                  <option value="05">Mei</option>
                                  <option value="06">Juni</option>
                                  <option value="07">Juli</option>
                                  <option value="08">Agustus</option>
                                  <option value="09">September</option>
                                  <option value="10">Oktober</option>
                                  <option value="11">November</option>
                                  <option value="12">Desember</option>
                              </select>   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Rencana Fisik Komulatif (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RencanaFisikkom" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Realisasi Fisik Komulatif (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RealisasiFisikkom" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Realisasi Keuangan Komulatif (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RealisasiKeukom" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Rencana Fisik Tahun Berjalan (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RencanaFisikTahun" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Realisasi Fisik Tahun Berjalan (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RealisasiFisikTahun" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Realisasi Keuangan Tahun Berjalan (%)</label>
                            <div class="col-sm-8">
                                <input type="text" name="RencanaFisikkom" id="RealisasiKeuTahun" class="form-control" placeholder="0.000">
                            </div>
                        </div>
                    </form>
                        </div>

                         <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="fa fa-save"> Save</i></button>
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



    

