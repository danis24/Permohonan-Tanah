<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Permohonan Layanan Pengurusan Surat Kepemilikan Tanah

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
              <h3 class="box-title">Lihat Data Permohonan</h3>
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
            <div class="box-body" style="border:1px solid white; overflow-y:hidden; overflow-x:scroll;" >
              <table id="example1" class="table table-bordered table-striped" width="150%" >
                <thead>
                <tr>
                  <th>ID Permohonan</th>
                  <th>Nama Pemohon</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Nama Layanan</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Status Syarat</th>
                  <th>Syarat Belum Lengkap</th>
                  <th>Progres</th>
                  <th>Status Pemilikan</th>
                  <th>Petugas Pencatat</th>
                  <th>Persetujuan</th>
                  <th>Kelola</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($permohonan->result() as $key) { $i=1;?>
                    <tr>
                        <td><?php echo $key->idpermohonan; ?></td>
                        <td><?php echo $key->nama_pemohon; ?></td>
                        <td><?php echo $key->alamat; ?></td>
                        <td><?php echo $key->nohp; ?></td>
                        <td><?php echo $key->nama_l; ?></td>
                        <td><?php $tglaju = $key->tgl_aju; echo date('d-m-Y', strtotime($tglaju)); ?></td>
                        <td><?php echo $key->status_syarat; ?></td>
                        <td><?php echo $key->syarat_belum; ?></td>
                        <td><?php echo $key->progres; ?></td>
                        <td><?php echo $key->status_tanah; ?></td>
                        <td><?php echo $key->pencatat; ?></td>
                        <td><?php echo $key->statperm; ?></td>
                        <td>
                        <a onclick="return confirm('Yakin akan menyetujui permohonan?')" href="<?php echo base_url()?>index.php/permohonan/setujui/<?php echo $key->idpermohonan?>" class="btn btn-success">Setujui</a>
                        <a onclick="return confirm('Yakin akan menyetujui permohonan?')" href="<?php echo base_url()?>index.php/permohonan/tolak/<?php echo $key->idpermohonan?>" class="btn btn-danger">Tolak</a>
                        <a href="" class="btn btn-primary">Cetak Bukti</a>
                        </td>
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
