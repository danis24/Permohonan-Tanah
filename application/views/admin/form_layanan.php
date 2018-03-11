<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Layanan Pengurusan Surat Kepemilikan Tanah
            <small>Desa Sukapura</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

        <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
        <div class="col-md-12">
              <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Masukan Data Layanan</h3>
                </div><!-- /.box-header --> 
                
                <?php 
                    if ($this->session->flashdata()==null) {
                    }else{
                ?>

                    <div class="alert <?php echo $this->session->flashdata('alert');?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>  <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('pesan');?></h4>
                        <?php echo $this->session->flashdata('detail_pesan');?>
                    </div>    
                <?php
                    }
                ?>
                
                <!-- form start -->
                <form action="<?php echo base_url(); ?>index.php/Layanan/proses_tambah" method="POST"  enctype="multipart/form-data" id="tambah_layanan">
                <div class="box-body">
                    <div class="form-group">
                        <label>ID Layanan</label>
                        <input type="text" name="idlayanan" id="idlayanan" class="form-control" value="<?= $kodeunik; ?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-idlayanan" class="error_msg"></div>
                    </div>
					
                    <div class="form-group">
                        <label>Nama Layanan</label>
			<input type="text" name="namalayanan" id="namalayanan" class="form-control" placeholder="Nama Layanan" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-namalayanan" class="error_msg"></div>
                    </div>
                    
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Persyaratan</label>
                      <textarea name="syarat" id="syarat" class="ckeditor" rows="3" placeholder="Masukan Persyaratan"></textarea>
                      <div style="color: red; font-size: 10pt;" id="invalid-syarat" class="error_msg"></div>
                    </div>
	
                </div><!-- /.box-body -->
				  
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
                </form>
            </div><!-- /.box -->

              <!-- Form Element sizes -->
     
              <!-- Input addon -->
	</div><!--/.col (left) -->
			
            <!-- right column -->
           
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->