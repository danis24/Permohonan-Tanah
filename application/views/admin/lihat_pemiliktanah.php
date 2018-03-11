<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pemilik Tanah di Desa Sukapura
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lihat Data Pemilik Tanah</h3>
            </div>
              
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
            <!-- /.box-header -->
            <div class="box-body" style="border:1px solid white; overflow-y:hidden; overflow-x:scroll;">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Kohir</th>
                  <th>Nama Wajib Pajak</th>
                  <th>Alamat</th>
                  <th>Petugas Pencatat</th>
                  <th>Kelola</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pemilik->result() as $key) { $i=1;?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $key->nokohir; ?></td>
                        <td><?php echo $key->nama_wp; ?></td>
                        <td><?php echo $key->alamat; ?></td>
                        <td><?php echo $key->username; ?></td>
                        <td><a href="<?php echo base_url(); ?>index.php/Pemilik/edit/<?php echo $key->nokohir; ?>"><i class="fa fa-edit"></i> Ubah</a></td>
                    </tr>
                    
                <?php $i++; } ?>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->