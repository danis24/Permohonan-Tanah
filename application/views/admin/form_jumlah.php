<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Jumlah Pemecahan (Split) Tanah
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
                <form action="<?php echo base_url(); ?>index.php/Bukutanah/tambah_transaksi" method="POST"  enctype="multipart/form-data" id="form_jumlah">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Masukan Jumlah Pemecahan</label>
                            <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah transaksi" required="">
                            <div style="color: red; font-size: 10pt;" id="invalid-jumlah" class="error_msg"></div>
                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <input type="hidden" name="idtransaksi" id="idtransaksi" value="<?php echo $idtransaksi; ?>"> 
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