
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <label class="col-lg col-form-label"><?php echo $judul ?> </label><p></p>
            <label for="inputName" type="input" name="JobNo" class="col-sm col-form-label" id="JobNo"><?php echo $mos->JobNo ?></label> - <label for="inputName" name="JobNm" class="col-sm col-form-label" id="JobNo"><?php echo $mos->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $mos->Lokasi ?></label>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('welcome/index') ?>"><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $judul ?></li>
        </ol>
    </section>

    <section class="content-header">
        <a href="<?= site_url('job/sub_job/'.$mos->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
        <!-- <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a> -->
    </section>   

    <!-- <Section class="content"> -->
	<section class="content-header" >
		<div class="row" id="MOD-IN">
			<div class="col-md-12">
				<div class="box box-warning">
					<div class="box-header with-border">
						<div class="box box-solid">
                            <div class="box-header with-border">
                                <div class="box-header bg-blue-gradient">
                                  <h3 class="box-title">Material On Site </h3>
                                  <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="form-group">
                                    <a href="#modal-EntryMOS" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                                    <p>
                                    <div class="box-body table-responsive no-padding">
                                        <table id="example1" class="table table-hover table-bordered table-striped">
                                            <tr>
                                                <th style="background-color: aliceblue;">No MOS</th>
                                                <th style="background-color: aliceblue;">Tgl MOS</th>
                                                <th style="background-color: aliceblue;">Nama Vendor</th>
                                                <th style="background-color: aliceblue;">Approve By</th>
                                                <th style="background-color: aliceblue;">Tgl Approve</th>
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
                                </div>  
                            </div> 

					    </div>
				    </div>
			    </div>                        
		    </div>

            <div class="modal" tabindex="-1" role="dialog" id="modal-EntryMOS">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Entry MOS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col-md-6">                                  
                    <br>
                       <p>        
                      <label>Job No</label>
                      <input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $mos->JobNo ?> - <?php echo $mos->JobNm ?>">
                      <label>No MOS </label>
                      <input type="text" name="NoMos" id="NoMos" class="form-control">
                      <label>No Surat Jalan Vendor</label>
                      <input type="text" name="NoSjVendor" id="NoSjVendor" class="form-control">
                      <label>Tgl Terima Material</label>
                      <input type="date" name="tglMos" id="tglMos" class="form-control">
                    </div>
                    
                    <div class="col-md-6">
                    <br>
                        <label>Nama Vendor</label>
                        <input type="text" name="VendorNm" id="VendorNm" class="form-control">
                        <label>No PO / KO </label>
                        <input type="text" name="NoKO" id="NoKO" class="form-control">
                        <label>Tgl PO</label>
                        <input type="date" name="tglPo" id="TgpPo" class="form-control">
                        <label>No SPR</label>
                        <input type="text" name="NoSpr" id="NoSpr" class="form-control"> 
                    </div>                    
                  </div>

                  

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Tambah Data</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                  <div class="box-body table-responsive no-padding">
                      <table class="table table-hover table-bordered table-striped">
                          <tr>
                              <th>No</th>
                              <th>Kode RAP</th>
                              <th>Uraian</th>
                              <th>Volume</th>
                              <th>Satuan</th>
                              <th></th>
                          </tr>
                          <?php $i=1  ?>
                          <tr>
                              <td><?php echo $i++ ?></td>
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
            </section>

            <section class="content-header">
            <div class="row" id="MOS-OUT"> 
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <div class="box-header bg-red-gradient">
                                  <h3 class="box-title">Material OUT </h3>
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
                                    <a href="#modal-EntryMOS-Out" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
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
            <!--         </div>
                </div>
            </div>
 -->

            <div class="modal" tabindex="-1" role="dialog" id="modal-EntryMOS-Out">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Entry Pemakaian Barang / Material</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- <div class="col-md-10">                                   -->
                    <br>
                       <p>        
                      <label>Job No</label>
                      <input type="text" name="JobNo" id="JobNo" class="form-control" value="<?php echo $mos->JobNo ?> - <?php echo $mos->JobNm ?>">
                      <label>Tgl Pemakaian Material / Barang </label>
                      <input type="date" name="TglKeluarBarang" id="NoMos" class="form-control" required="required">
                      <label>Nama Barang / Material</label>
                      <input type="text" name="Nabar" id="Nabar" class="form-control" required="required">
                      <label>Qty Pemakaian</label>
                      <input type="text" name="QtyPakai" id="QtyPakai" class="form-control" required="required">
                      <label>Satuan</label>
                      <input type="text" name="Uom" id="Uom" class="form-control"> 
                      <label>Keterangan</label>
                      <textarea class="form-control" name="Keterangan_brgKeluar" required="required"></textarea>

                    <!-- </div> -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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



	

