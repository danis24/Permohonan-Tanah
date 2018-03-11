<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Pemilik Tanah
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
        <div class="col-md-6">
              <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Masukan Data Pemilik Tanah</h3>
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
                <form action="<?php echo base_url(); ?>index.php/Pemilik/proses_tambah" method="POST"  enctype="multipart/form-data" id="tambah_pemilik">
                <div class="box-body">
                    <div class="form-group">
                        <label>No. Kohir</label>
                        <input type="text" name="nokohir" id="nokohir" class="form-control" placeholder="No. kohir" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-nokohir" class="error_msg"></div>
                    </div>
					
                    <div class="form-group">
                        <label>Nama Wajib Pajak</label>
			<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Wajib Pajak" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-nama" class="error_msg"></div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
			<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-alamat" class="error_msg"></div>
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