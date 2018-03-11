<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Buku Transaksi Tanah Desa Sukapura
        <small>Control panel</small>
      </h1>
        
        <?php 
            if ($this->session->flashdata()==null) {
                }else{
        ?>

                    <div class="alert <?php echo $this->session->flashdata('alert');?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>  <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('pesan');?></h4>
                        <?php echo $this->session->flashdata('detail_pesan');?>
                    </div>
                    <div class="alert <?php echo $this->session->flashdata('alert2');?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>  <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('pesan2');?></h4>
                        <?php echo $this->session->flashdata('detail_pesan2');?>
                    </div>
        <?php
            }
        ?>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <?php foreach ($pemilik->result() as $key) { ?>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $key->nokohir; ?></h3>

              <p><?php echo $key->nama_wp; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
              <a href="<?php echo base_url(); ?>index.php/Bukutanah/transaksi_tanah/<?php echo $key->nokohir; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <?php  } ?>
        
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->