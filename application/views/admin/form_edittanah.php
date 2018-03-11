<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubah Data Tanah
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
                    <h3 class="box-title">Masukan Data Tanah</h3>
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
                <form action="<?=base_url('index.php/Tanah/proses_update/'.$tanah->no_persil);?>" method="POST"  enctype="multipart/form-data" id="tambah_tanah">
                <div class="box-body">
                    
					
                    <div class="form-group">
                        <label>Kelas Tanah</label>
                        <input type="text" name="kelastanah" id="kelastanah" class="form-control" value="<?=$tanah->kelas_t?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-kelastanah" class="error_msg"></div>
                    </div>
					
                    <div class="form-group">
                        <label>Jenis Tanah</label>
                        <select class="form-control" name="jenistanah" style="width:100%;" id="jenistanah" required="">
                            <option value="">Pilih jenis tanah</option>
                            <option <?php if ($tanah->jenis_t == 'Sawah') { echo "selected";} ?> value="Sawah">Sawah</option>
                            <option <?php if ($tanah->jenis_t == 'Kering') { echo "selected";} ?> value="Kering">Kering</option>
                        </select>
        		<div style="color: red;font-size: 10pt;" id="invalid-jenistanah" class="error_msg"></div>
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