<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Data Tanah
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
                    <h3 class="box-title">Masukan Data Permohonan Layanan</h3>
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
                <form action="<?php echo base_url(); ?>index.php/Permohonan/proses_tambah" method="post"  enctype="multipart/form-data" id="tambah_permohonan" width="100%">
                <div class="box-body">
                   
                    <div class="form-group">
                        <label>Pilih Kode Layanan</label>
                        <select class="form-control" name="nim" id="nim" required="" onchange="changeValue(this.value)" >
                                <option value="">Pilih</option>
                        
                        <?php 
                            
                            $jsArray = "var dtMhs = new Array();\n";
                            foreach ($mhs->result_array() as $data) { 
                                
                        ?>
                                <option value="<?= $data['idlayanan']; ?>"> <?= $data['idlayanan']; ?> </option>
                                <?php $jsArray .= "dtMhs['" . $data['idlayanan'] . "'] = {nama:'" . addslashes($data['nama_l'])."'};\n";   ?>

                        <?php  
                              
                            } 
                        ?>
                        </select>
        		
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Layanan</label>
                        <textarea name="nm" id="nm" class="form-control" rows="5" > </textarea>
			
                    </div>
                    <div id="tempat_hasil"> 
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

<script>   
    <?php echo $jsArray; ?> 
    function changeValue(nim){ 
    document.getElementById('nm').innerHTML = dtMhs[nim].nama; 
    
     
    }; 
 </script>