<div class="content-wrapper">
    <section class="content-header">
        <h1>
            PD & PJ ( LAPANGAN )
            <p>
            </p>

            <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $pdpj->JobNo ?></label> - <label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $pdpj->JobNm ?></label>
            <br><small><label for="inputName" class="col-sm col-form-label" id="JobNo"><?php echo $pdpj->Lokasi ?></label></>
                <!--small>Control panel</small-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboard')  ?>><i class=" fa fa-dashboard"></i> Home</a></li>
            <li class="active">PD & PJ</li>
        </ol>
    </section>

    <section class="content-header">

        <a href="<?= site_url('job/sub_job/'.$pdpj->JobNo) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
        <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</a>

    </section>

    <!-- <Section class="content"> -->
    <section class="content">



        <div class="box box-success">
            <div class="box-header with-border">
                <h1 class="box-title">Entry Permintaan Dana ( Lapangan )</h1>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <form class="form-horizontal">
                        <div class="form-group row">

                            <label for="inputName" class="col-sm-2 col-form-label">Alokasi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Alokasi_Pd" id="Alokasi_Pd" style="width: 50%;">
                                    <option value="disable diselected">--Pilih Salah Satu--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputname" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-5">
                                <input type="Search" name="SearchPD" id="SearchPD" class="form-control" style="width: 100%;">
                            </div>
                            <a href="#" class="btn btn-success" title="Cari data PD"><i class="fa fa-search"></i></a>
                        </div>

                    </form>
                    <p></p>
                    <a data-target="#modal-info-PD" data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> TAMBAH PD</a>
                    <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAH PDRKD</a>

                    <p></p>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" border="1" cellspacing="2" width="100%">
                            <tr>
                                <th style="background-color: darkorange">
                                    <center> No PD</center>
                                </th>
                                <th style="background-color: darkorange">
                                    <center> No.Ref <p> Lapangan</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> Tgl PD</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> Alokasi</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> Type Form</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> No KO</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> Deskripsi</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <Center> Total PD(Rp)</Center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center> Approved By<p> (Lapangan)</center>
                                </th>
                                <th style="background-color: darkorange;">
                                    <center>Approve On </center>
                                </th>
                                <th style="background-color: darkorange;"></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" id="modal-info-PD" draggable="true">
            <div class="modal-dialog modal-lg">

                <div class="modal-content" style="width: 125%; padding-left: 1%;" draggable="true">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h1 class="box-title">Entry Permintaan Dana</h1>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="NoPd" id="NoPd" class="form-control" placeholder="No PD">
                                        <p></p>
                                        <input type="text" name="No. BAP" id="NoBap" class="form-control" placeholder="No. BAP/Ref Lapangan">
                                        <p></p>
                                        <input type="text" name="JobNo" id="JobNo" class="form-control" placeholder="JobNo">
                                        <p></p>
                                        <label class="form-control"><input type="date" name="tglPermintaan" id="TglPermintaan" title="Tgl Permintaan">&nbsp Tgl Permintaan</label>
                                        <p></p>
                                        <label class="form-control"><input type="checkbox" id="ckPdJaminan"> &nbsp PD Jaminan</label>
                                        <p></p>
                                        <textarea name="Deskripsi" id="Deskripsi" cols="30" rows="3" class="form-control" placeholder="Deskripsi"></textarea>
                                        <p></p>
                                        <label class="form-control"><input type="date" name="periode" id="periode" style="width: 30%;" title="Periode">
                                            s/d <input type="date" name="periode2" id="periode2" style="width: 30%;" title="sampai">
                                            &nbsp Minggu ke &nbsp;<input type="text" name="mingguke" id="mingguke" style="width: 20%;"></label>
                                        <p></p>

                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <input type="text" name="alokasi" id="alokasi" class="form-control" placeholder="Alokasi">
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="tipeform" id="tipeform" class="form-control">
                                                    <option value="0">--Pilih Type Form--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="box-header with-border">
                                            <center style="background-color: cornflowerblue">
                                                <h1 class="box-title">Bukti Pendukung</h1>
                                            </center>
                                            <hr>
                                            <div class="checkbox">
                                                <div class="form-group">

                                                    <label>
                                                        <input type="checkbox">
                                                        Invoice/Kwitansi
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    <label>
                                                        <input type="checkbox">
                                                        Surat Jalan/Tanda Terima Lapangan
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="checkbox">
                                                        Copy PO
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    &nbsp;
                                                    <label>
                                                        <input type="checkbox">
                                                        Faktur Pajak
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                </div>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="checkbox">
                                                        Berita Acara Pembayaran
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                    <label>
                                                        <input type="checkbox">
                                                        Berita Acara Opname Pekerjaan
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" name="Keterangan" id="keterangan" class="form-control" placeholder="Keterangan">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="box-header with-border">
                                            <center style="background-color: cyan">
                                                <h1 class="box-title"> Bayar Kepada</h1>
                                            </center>
                                            <p></p>
                                            <input type="text" name="NoKO" id="NoKO" class="form-control" placeholder="No Kontrak/PO">
                                            <p></p>
                                            <input type="text" name="NoTagihan" id="Notagihan" class="form-control" placeholder="No. Tagihan">
                                            <p></p>
                                            <input type="text" name="Id" id="Id" class="form-control" placeholder="ID Vendor">
                                            <p></p>
                                            <input type="text" name="Nama" id="nama" class="form-control" placeholder="Nama Vendor">
                                            <p></p>
                                            <input type="text" name="Telp" id="telp" class="form-control" placeholder="No Telepon">
                                            <p></p>
                                            <input type="text" name="Npwp" id="npwp" class="form-control" placeholder="NPWP">
                                            <p></p>
                                        </div>
                                        <div class="box-header with-border">
                                            <center style="background-color: cornflowerblue;">
                                                <h1 class="box-title"> Rekening Penerima</h1>
                                            </center>
                                            <p></p>
                                            <input type="text" name="Norek" id="norek" class="form-control" placeholder="No. Rekening">
                                            <p></p>
                                            <input type="text" name="Anbank" id="anbank" class="form-control" placeholder="Atas Nama">
                                            <p></p>
                                            <select name="Bank" id="bank" class="form-control">
                                                <option value="0">--Pilih Nama Bank--</option>

                                            </select>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-danger btn-sm float-right" type="submit" name="BatalEPD" style="float: right;">
                                BATAL
                            </button>
                            <p></p>
                            <button class="btn btn-success btn-sm float-right" type="submit" name="simpanEPD" style="float: right;">
                                SIMPAN
                            </button>

                            <!-- <h4 class="mt-5 ">Custom Content Above</h4> -->
                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Uraian PD</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-content">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <center>
                                    <h1 class="box-title">URAIAN PERMINTAAN DANA</h1>
                                </center>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                                </div>
                            </div>
                            <p></p>
                            <a data-target="#modal-default-uraianpd" data-toggle="modal" class="btn btn-warning"><i class="fa fa-plus"></i> TAMBAH</a>
                            <p></p>
                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                    <table class="table table-hover" border="1" cellspacing="2" width="100%">
                                        <tr>
                                            <th style="background-color: mediumturquoise">
                                                <center> No.</center>
                                            </th>
                                            <th style="background-color: darksalmon">
                                                <center> Kode RAP</center>
                                            </th>
                                            <th style="background-color: mediumturquoise;">
                                                <center> Uraian</center>
                                            </th>
                                            <th style="background-color: darksalmon;">
                                                <center> Volume</center>
                                            </th>
                                            <th style="background-color: mediumturquoise;">
                                                <center> Sat</center>
                                            </th>
                                            <th style="background-color: darksalmon;">
                                                <center> Harga Satuan (Rp)</center>
                                            </th>
                                            <th style="background-color: mediumturquoise;">
                                                <center> Jumlah Harga (Rp)</center>
                                            </th>

                                            <th style="background-color: darksalmon;"></th>
                                        </tr>
                                    </table>


                                </div>

                            </div>

                        </div>

                        <div class="modal fade" id="modal-default-uraianpd">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form class="form-horizontal">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Data Entry</h4>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputNo" class="col-sm-2 col-form-label">No. </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="inputName">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputalokasi" class="col-sm-2 col-form-label">Alokasi</label>
                                                <div class="col-sm-8">
                                                    <select name="alokasi" id="alokasi" class="form-control">
                                                        <option value="0">--Pilih Salah Satu--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputkoderap" class="col-sm-2 col-form-label">Kode RAP</label>
                                                <div class="col-sm-8">
                                                    <select name="KodeRAP" id="KodeRap" class="form-control">
                                                        <option value="0">--Pilih Salah Satu--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputalokasi" class="col-sm-2 col-form-label">Uraian</label>
                                                <div class="col-sm-8">
                                                    <textarea name="uraianPDentry" id="uraianPDentry" cols="62" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputvolume" class="col-sm-2 col-form-label">Volume</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="VolPDentry" id="VolPDentry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSatuan" class="col-sm-2 col-form-label">Satuan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="SatPDentry" id="SatPDentry" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="HargaSatuan" class="col-sm-2 col-form-label">Harga Satuan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="HarSatPDentry" id="HarSatPDentry" class="form-control">
                                                </div>
                                            </div>
                                            <hr>
                                            <button name="S_PDEntry" id="S_PDEntry" class="btn btn-success">Simpan</button>
                                            &nbsp;
                                            <button name="Btl_PDEntry" id="Btl_PDEntry" class="btn btn-warning">Batal</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>


        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title" style="font-size: larger;">Entry Pertanggungjawaban Dana (Lapangan)</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <form class="form-horizontal">
                        <div class="form-group row">

                            <label for="inputName" class="col-sm-2 col-form-label">Alokasi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="Alokasi_Sumda" id="Alokasi_Sumda" style="width: 50%;">
                                    <option value="disable diselected">--Pilih Salah Satu--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputname" class="col-sm-2 col-form-label">Search</label>
                            <div class="col-sm-5">
                                <input type="Search" name="SearchPJ" id="SearchPD" class="form-control" style="width: 100%;">
                            </div>
                            <a href="#" class="btn btn-success" title="Cari data PJ"><i class="fa fa-search"></i></a>
                        </div>
                    </form>
                    <p></p>
                    <p></p>
                    <a href="<?= site_url('job') ?>" class="btn btn-warning"><i class="fa fa-plus"></i> TAMBAH DATA</a>
                    <a href="#save" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAH VERSI</a>
                    <!-- <a href="#save" data-toggle="modal" class="btn btn-success"><i class="fa fa-print"></i> PRINT</a> -->
                    <p></p>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" border="1" cellspacing="2" width="100%">
                            <tr>
                                <th style="background-color: darksalmon">
                                    <center> No PD</center>
                                </th>
                                <th style="background-color: darksalmon">
                                    <center> Tgl PD</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center>Tipe Form</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center> Deskripsi</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center> Total PD (Rp)</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center> No PJ</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center> Tgl PJ</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <Center> Total PJ (Rp)</Center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center> Approved By<p> (Lapangan)</center>
                                </th>
                                <th style="background-color: darksalmon;">
                                    <center>Approve On </center>
                                </th>
                                <th style="background-color: darksalmon;"></th>
                            </tr>
                        </table>
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