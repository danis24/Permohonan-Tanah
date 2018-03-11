<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transaksi Tanah
        
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
                <table>
                        <h3 class="box-title col-md-4">Nama Wajib Pajak : <?php echo $pemilik->nama_wp; ?></h3> <h3 class="box-title col-md-4">No. Kohir : <?php echo $pemilik->nokohir; ?></h3> <h3 class="box-title col-md-4">Tempat Tinggal : <?php echo $pemilik->alamat; ?></h3>
                        
                </table>
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
              <table id="example1" class="table table-bordered table-striped" width="150%">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>No. Persil</th>
                  <th>Kelas Tanah</th>
                  <th>Jenis Tanah</th>
                  <th>Luas Tanah</th>
                  <th>Pajak Tanah</th>
                  <th>Sebab Alih</th>
                  <th>Tanggal Peralihan</th>
                  <th>Kohir Asal</th>
                  <th>Keterangan</th>
                  <th>Status Tanah</th>
                  <th>Kelola</th>
                 
                </tr>
                </thead>
                <tbody>
                    
                <?php foreach ($transaksi->result() as $key) { $i=1;?>
                    
                    <tr <?php if ($key->statustanah == "Sudah pindah kepemilikan") {echo "style='background-color:red;'";} ?> >
                        <td><?php echo $key->id_transaksi; ?></td>
                        <td><?php echo $key->no_persil; ?></td>
                        <td><?php echo $key->kelas_t; ?></td>
                        <td><?php echo $key->jenis_t; ?></td>
                        <td><?php echo $key->luas_t; ?></td>
                        <td><?php echo $key->pajak; ?></td>
                        <td><?php echo $key->sebab_alih; ?></td>
                        <td><?php $tglalih = $key->tgl_alih; echo date('d-m-Y', strtotime($tglalih));  ?></td>
                        <td><?php echo $key->asal_kohir; ?></td>
                        <td><?php echo $key->ket; ?></td>
                        <td><?php echo $key->statustanah; ?></td>
                        <?php
                            if ($key->statustanah == "Sudah pindah kepemilikan") {
                                echo "<td></td>";
                            } else {    
                        ?>
                            <td><a href="<?php echo base_url(); ?>index.php/Bukutanah/jumlah_transaksi/<?php echo $key->id_transaksi; ?>"><i class="fa fa-arrow-right"></i> Transaksi</a></td>
                        <?php 
                            }
                        ?>
                        
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