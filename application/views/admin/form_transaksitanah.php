

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tambah Transaksi Tanah
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
                    <h3 class="box-title">Masukan Data Transaksi Tanah</h3>
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
                <form  action="<?php echo base_url(); ?>index.php/Bukutanah/proses_tambah" method="POST"  enctype="multipart/form-data" id="tambah_transaksi">
                    
                <div class="box-body " style="border:1px solid white; overflow-y:hidden; overflow-x:scroll;">
                    <table border="1" width="150%">
                        
                        
                        
                        <tr><td>ID Transaksi</td><td>No. Persil</td><td>Kelas Tanah</td><td>Jenis Tanah</td><td>Luas Tanah</td><td>Pajak</td><td>Sebab Peralihan</td><td>Tanggal Peralihan</td><td>Kohir Asal</td><td>Keterangan</td><td>No. Kohir Tujuan</td></tr>
                        
                    <?php  
                        
                        for ($i=1; $i<=$jumlah; $i++)
                        {
                    ?>
                        
                        <tr>
                            <td>
                                <input type="text" name="idtransaksi<?php echo $i; ?>" id="idtransaksi<?php echo $i; ?>" value="<?= $kodeunik++; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-idtransaksi<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="nopersil<?php echo $i; ?>" id="nopersil<?php echo $i; ?>" value="<?=$transaksi->no_persil?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-nopersil<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="kelastanah<?php echo $i; ?>" id="kelastanah<?php echo $i; ?>" value="<?=$transaksi->kelas_t?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-kelastanah<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <select class="form-control" name="jenistanah<?php echo $i; ?>" style="width:100%;" id="jenistanah<?php echo $i; ?>" required="">
                                    <option value="">Pilih jenis tanah</option>
                                    
                                    <option <?php if($transaksi->jenis_t == "Sawah") { echo "selected";} ?> value="Sawah">Sawah</option>
                                    <option <?php if($transaksi->jenis_t == "Kering") { echo "selected";} ?> value="Kering">Kering</option>
                                </select>
                                <div style="color: red;font-size: 10pt;" id="invalid-jenistanah<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="luastanah<?php echo $i; ?>" id="luastanah<?php echo $i; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-luastanah<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="pajak<?php echo $i; ?>" id="pajak<?php echo $i; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-pajak<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="sebabalih<?php echo $i; ?>" id="sebabalih<?php echo $i; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-sebabalih<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" name="tglalih<?php echo $i; ?>" id="tglalih<?php echo $i; ?>" value="<?php echo date('d-m-Y'); ?>">
                                </div>
                            </td>
                            <td>
                                <input type="text" name="kohirasal<?php echo $i; ?>" id="kohirasal<?php echo $i; ?>" value="<?php echo $transaksi->nokohir; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-kohirasal<?php echo $i; ?>" class="error_msg"></div>
                            </td>
             
                            <td>
                                <input type="text" name="ket<?php echo $i; ?>" id="ket<?php echo $i; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-ket<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                            <td>
                                <input type="text" name="kohirtujuan<?php echo $i; ?>" id="kohirtujuan<?php echo $i; ?>" class="form-control"  required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-kohirtujuan<?php echo $i; ?>" class="error_msg"></div>
                            </td>
                        </tr>
                        
                        <?php } ?>    
                       
                    </table>
                    
        
                </div><!-- /.box-body -->
				  
                    <div class="box-footer">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <input type="hidden" name="batas_luastanah" value="<?php echo $transaksi->luas_t; ?>">
                        <input type="hidden" name="id_tanahalih" value="<?php echo $transaksi->id_transaksi; ?>">
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