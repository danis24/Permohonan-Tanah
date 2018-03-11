<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ubah Data Akun Pengguna Aplikasi Pengelolaan Kepemilikan Tanah Desa Sukapura
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
                    <h3 class="box-title">Masukan Data Akun</h3>
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
                <form action="<?=base_url('index.php/User/proses_update/'.$user->username);?>" method="POST"  enctype="multipart/form-data" id="tambah_user">
                <div class="box-body">
                   
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?php echo $user->username; ?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-username" class="error_msg"></div>
                    </div>
		
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" name="namap" id="namap" class="form-control" value="<?php echo $user->nama_p; ?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-namap" class="error_msg"></div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $user->alamat; ?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-alamat" class="error_msg"></div>
                    </div>
                    <div class="form-group">
                        <label>No. Telp./HP</label>
                        <input type="text" name="nohp" id="nohp" class="form-control" value="<?php echo $user->nohp; ?>" required="">
			<div style="color: red; font-size: 10pt;" id="invalid-nohp" class="error_msg"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Pilih Jenis Akses</label>
                        <select class="form-control" name="jenisakses" style="width:100%;" id="jenisakses" required="">
                            <option value="">Pilih jenis akses</option>
                            <option <?php if ($user->jenis_akses == 'Petugas Seksi') { echo "selected";} ?> value="Petugas Seksi">Petugas Seksi</option>
                            <option <?php if ($user->jenis_akses == 'Kepala Seksi') { echo "selected";} ?> value="Kepala Seksi">Kepala Seksi</option>
                            <option <?php if ($user->jenis_akses == 'Kepala Desa') { echo "selected";} ?> value="Kepala Desa">Kepala Desa</option>
                        </select>
        		<div style="color: red;font-size: 10pt;" id="invalid-jenisakses" class="error_msg"></div>
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