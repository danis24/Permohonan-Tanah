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
                    <form action="<?=base_url('index.php/Permohonan/proses_update/'.$permohonan->idpermohonan);?>" method="POST"  enctype="multipart/form-data" id="tambah_permohonan" width="100%">
                        <div class="box-body">
                            <div class="form-group">
                                <label>ID Permohonan</label>
                                <input type="text" name="idpermohonan" id="idpermohonan" value="<?=$permohonan->idpermohonan?>" class="form-control" placeholder="ID permohonan" required="" disabled="">
                                <div style="color: red; font-size: 10pt;" id="invalid-idpermohonan" class="error_msg"></div>
                            </div>

                            <div class="form-group">
                                <label>Nama Pemohon</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?=$permohonan->nama_pemohon?>" required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-nama" class="error_msg"></div>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?=$permohonan->alamat?>" required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-alamat" class="error_msg"></div>
                            </div>

                            <div class="form-group">
                                <label>No. Telepon/HP</label>
                                <input type="text" name="nohp" id="nohp" class="form-control" value="<?=$permohonan->nohp?>" required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-nohp" class="error_msg"></div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="<?=$permohonan->email?>" required="">
                                <div style="color: red; font-size: 10pt;" id="invalid-email" class="error_msg"></div>
                            </div>

                            <div class="form-group">
                                <label>Pilih Jenis Layanan</label>
                                <select class="form-control" name="jenislayanan" style="width:100%;"  required="">
                                    <option value="">Pilih jenis layanan</option>
                                    <?php foreach ($layanan->result() as $key) { $i=1;?>


                                        <option <?php if ($key->idlayanan == $permohonan->idlayanan ) { echo "selected";} ?> value="<?=$permohonan->idlayanan?>"><?php echo $key->nama_l; ?></option>


                                        <?php $i++; } ?>

                                    </select>
                                    <div style="color: red;font-size: 10pt;" id="invalid-jenislayanan" class="error_msg"></div>
                                </div>

                                <div class="form-group">
                                    <label>Pilih Status Bukti Kepemilikan Tanah</label>
                                    <select class="form-control" name="statusp" style="width:100%;" id="statusp" required="">
                                        <option value="">Pilih status bukti kepemilikan tanah</option>

                                        <option <?php if ($permohonan->status_tanah == 'Sudah Sertifikat') { echo "selected";} ?> value="Sudah Sertifikat">Sudah Sertifikat</option>
                                        <option <?php if ($permohonan->status_tanah == 'Belum Sertifikat') { echo "selected";} ?> value="Belum Sertifikat">Belum Sertifikat</option>

                                    </select>
                                    <div style="color: red;font-size: 10pt;" id="invalid-statusp" class="error_msg"></div>
                                </div>

                                <div class="form-group">
                                    <label>Persyaratan</label>

                                    <?php foreach ($layanan->result() as $key) { $i=1;
                                        if ($key->idlayanan == $permohonan->idlayanan ) {$syarat="$key->syarat";}

                                        ?>

                                        <?php } ?>
                                        <textarea disabled="" name="syarat" id="syarat" class="form-control" rows="3" ><?= $syarat; ?> </textarea>
                                        <div style="color: red; font-size: 10pt;" id="invalid-syarat" class="error_msg"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Status Persyaratan</label>
                                        <select class="form-control" name="status_s" style="width:100%;" id="status_s" required="">
                                            <option value="">Pilih status Kelengkapan Syarat</option>
                                            <option value="Lengkap">Lengkap</option>
                                            <option value="Belum Lengkap">Belum Lengkap</option>


                                        </select>
                                        <div style="color: red;font-size: 10pt;" id="invalid-statusp" class="error_msg"></div>
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
