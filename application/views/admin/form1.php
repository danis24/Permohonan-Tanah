      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Form Tambah Data Tanah
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
                  <h3 class="box-title">Silahkan Masukan Data..</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="<?=base_url('index.php/Tanah/proses_tambah/');?>" method="POST"  enctype="multipart/form-data" id="add_barang">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">No. Kohir</label>
					  <input type="text" name="nokohir" id="nokohir" class="form-control" placeholder="No kohir" required="">
					  <div style="color: red;font-size: 10pt;" id="invalid-nokohir" class="error_msg"></div>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">No. Persil</label>
					  <input type="text" name="nopersil" id="nopersil" class="form-control" placeholder="No persil" required="">
					  <div style="color: red;font-size: 10pt;" id="invalid-nopersil" class="error_msg"></div>
                    </div>
					
					<div class="form-group">
                      <label>Jenis Tanah</label>
                      <select class="form-control" name="jenistanah" style="width:100%;" id="jenistanah" required="">
                        <option value="">Pilih jenis tanah</option>
						<option value="Sawah">Sawah</option>
						<option value="Kering">Kering</option>
                      </select>
					  <div style="color: red;font-size: 10pt;" id="invalid-jenistanah" class="error_msg"></div>
                    </div>
					
					<div class="form-group">
						<label>Luas Tanah</label>
						<input type="text" name="luastanah" id="luastanah" class="form-control" required="">
						<div style="color: red;font-size: 10pt;" id="invalid-luastanah" class="error_msg"></div>
					</div><!-- /.form-group -->
					
					<div class="form-group">
                      <label>Keterangan</label>
                      <select class="form-control" name="ket" style="width:100%;" id="ket" required="">
                        <option value="">Pilih keterangan</option>
						<option value="AJB">AJB</option>
						<option value="HB">HB</option>
						<option value="PHB">PHB</option>
						<option value="PW">PW</option>
						<option value="Wasiat">Wasiat</option>
						<option value="Kasih">Kasih</option>
						<option value="Beli">Beli</option>
						<option value="Jual">Jual</option>
                      </select>
					  <div style="color: red;font-size: 10pt;" id="invalid-ket" class="error_msg"></div>
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