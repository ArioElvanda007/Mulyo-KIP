
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
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <div class="box-body">               

                            content
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



    

