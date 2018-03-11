<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/bootstrap/js/ckeditor/ckeditor.js"></script>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/skins/_all-skins.min.css">
  
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/select2/select2.min.css">
  
  

  
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="<?php echo base_url(); ?>index.php/Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
       
        <li class="treeview">
            <a href="<?php echo base_url(); ?>index.php/Bukutanah">
            <i class="fa fa-laptop"></i>
            <span>Buku Transaksi Tanah</span>
                
          </a>
          
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Permohonan Surat Tanah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>index.php/Permohonan/tambah_permohonan"><i class="fa fa-circle-o"></i> Tambah Permohonan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/Permohonan"><i class="fa fa-circle-o"></i> Lihat Permohonan</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Persetujuan Permohonan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>index.php/Permohonan/get_persetujuan"><i class="fa fa-circle-o"></i>Persetujuan Permohonan Onsite</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Persetujuan Permohonan Online</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pengajuan ke Notaris </span>
                
          </a>
          
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Penandatanganan Akta </span>
                
          </a>
          
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Arsip Surat Kepemilikan Tanah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Arsip</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Lihat Arsip</a></li>
            
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Persetujuan Kepala Desa</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>/index.php/Permohonan/get_persetujuan"><i class="fa fa-circle-o"></i> Lihat Persetujuan Pencatatan Buku Tanah</a></li>
           
          </ul>
        </li>
        
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pengambilan Akta, Sertipikat</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Bukti Pengambilan</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lihat Pengambilan Surat</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Mencari Riwayat Tanah </span>
                
          </a>
          
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Tambah Data Tanah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Data</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lihat Data Tanah</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pemilik Tanah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>index.php/Pemilik/tambah_pemilik"><i class="fa fa-circle-o"></i> Tambah Pemilik Tanah</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/Pemilik"><i class="fa fa-circle-o"></i> Lihat Data Pemilik Tanah</a></li>
            
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kelola Akun</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>index.php/User/tambah_akun"><i class="fa fa-circle-o"></i> Tambah Akun</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/User"><i class="fa fa-circle-o"></i> Lihat Akun</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Layanan Surat Tanah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>index.php/Layanan/tambah_layanan"><i class="fa fa-circle-o"></i> Tambah Layanan</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/Layanan"><i class="fa fa-circle-o"></i> Lihat Data layanan</a></li>
            
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Laporan </span>
                
          </a>
          
        </li>
       
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        
        
        
        
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
        <?php echo $contents; ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="<?=base_url('assets/backend/jquery-1.9.1.min.js');?>"></script>
<script src="<?=base_url('assets/backend/jquery.validate.min.js');?>"></script>
<script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#tambah_tanah").validate({
            rules: {
          nopersil:{ 
             required: true,
          },
          kelastanah: { 
            required : true, 
          },
          jenistanah: { 
            required : true, 
          }
        },
        messages: {
          nopersil: { 
             required: "Nomor persil tanah tidak boleh kosong!",
          },
          kelastanah: { 
             required: "Kelas tanah tidak boleh kosong!",
          },
          jenistanah: { 
             required: "Jenis tanah tidak boleh kosong!",
          }
        }
     });
    })($);
  </script>
  
  <script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#tambah_layanan").validate({
            rules: {
          idlayanan:{ 
             required: true,
          },
          namalayanan: { 
            required : true, 
          },
          syarat: { 
            required : true, 
          }
        },
        messages: {
          idlayanan: { 
             required: "ID layanan tidak boleh kosong!",
          },
          namalayanan: { 
             required: "Nama layanan tidak boleh kosong!",
          },
          syarat: { 
             required: "Syarat layanan tidak boleh kosong!",
          }
        }
     });
    })($);
  </script>
  
  <script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#tambah_akun").validate({
            rules: {
          username:{ 
             required: true,
          },
          password: { 
            required : true, 
          },
          namap: { 
            required : true, 
          },
          alamat: { 
            required : true, 
          },
          nohp: { 
             number : true,
          },
          jenisakses: { 
            required : true, 
          }
        },
        messages: {
          username: { 
             required: "Username tidak boleh kosong!",
          },
          password: { 
             required: "Password tidak boleh kosong!",
          },
          namap: { 
             required: "Nama petugas tidak boleh kosong!",
          },
          alamat: { 
             required: "Alamat tidak boleh kosong!",
          },
          nohp: { 
             number:"Masukan harus berupa angka!"
          },
          jenisakses: { 
             required: "Jenis akses tidak boleh kosong!",
          }
        }
     });
    })($);
  </script>
  
  <script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#tambah_permohonan").validate({
            rules: {
          idpermohonan:{ 
             required: true,
          },
          nama: { 
            required : true, 
          },
          alamat: { 
            required : true, 
          },
          nohp: { 
            required : true,
            number : true,
          },
          jenislayanan: { 
             required : true,
          },
          statusp: { 
            required : true, 
          }
        },
        messages: {
          idpermohonan: { 
             required: "ID Permohonan tidak boleh kosong!",
          },
          nama: { 
             required: "Nama tidak boleh kosong!",
          },
          alamat: { 
             required: "Alamat tidak boleh kosong!",
          },
          nohp: { 
             required: "No. Telp/HP tidak boleh kosong!",
             number : "Masukan harus angka!"
          },
          jenislayanan: { 
             required: "Jenis layanan tidak boleh kosong!",
          },
          statusp: { 
             required: "Status bukti pemilikan tanah tidak boleh kosong!",
          }
        }
     });
    })($);
  </script> 
  
  <script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#tambah_pemilik").validate({
            rules: {
          nokohir:{ 
             required: true,
             number : true,
          },
          nama: { 
            required : true, 
          },
          alamat: { 
            required : true, 
          }
        },
        messages: {
          nokohir: { 
             required: "No. Kohir, tidak boleh kosong!",
             number : "Masukan harus angka!",
          },
          nama: { 
             required: "Nama Wajib Pajak, tidak boleh kosong!",
          },
          alamat: { 
             required: "Alamat, tidak boleh kosong!",
          }
        }
     });
    })($);
  </script>
  
  <script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
    
       $("#tambah_transaksi").validate({
            rules: {
    <?php 
        for ($i=1; $i<=$jumlah; $i++)
        {
    ?>            
          idtransaksi<?php echo $i; ?>:{ 
             required: true,
          },
          nopersil<?php echo $i; ?>: { 
            required : true, 
          },
          kelastanah<?php echo $i; ?>: { 
            required : true, 
          },
          jenistanah<?php echo $i; ?>: { 
            required : true, 
          },
          luastanah<?php echo $i; ?>: { 
            required : true,
            number : true,
           
          },
          pajak<?php echo $i; ?>: { 
            required : true, 
          },
          sebabalih<?php echo $i; ?>: { 
            required : true, 
          },
          tglalih<?php echo $i; ?>: { 
            required : true, 
          },
          kohirasal<?php echo $i; ?>: { 
            required : true, 
          },
          ket<?php echo $i; ?>: { 
            required : true, 
          },
    <?php
        } 
    ?>
    
    <?php 
        for ($i=1; $i<=$jumlah; $i++)
        {
            if ($i < $jumlah){
                echo "kohirtujuan$i: { 
                required : true, 
              },";
            }
            else {
                echo "kohirtujuan$i: { 
                required : true, 
              }";
            }
        } 
    ?>
        
        },
        messages: {
    <?php 
        for ($i=1; $i<=$jumlah; $i++)
        {
    ?>
          idtransaksi<?php echo $i; ?>:{ 
             required: "ID transaksi, tidak boleh kosong!",
          },
          nopersil<?php echo $i; ?>: { 
            required: "No. persil, tidak boleh kosong!", 
          },
          kelastanah<?php echo $i; ?>: { 
            required: "Kelas tanah, tidak boleh kosong!", 
          },
          jenistanah<?php echo $i; ?>: { 
            required: "Jenis tanah, tidak boleh kosong!", 
          },
          luastanah<?php echo $i; ?>: { 
            required: "Luas tanah, tidak boleh kosong!",
            number: "Masukan harus angka!",
          },
          pajak<?php echo $i; ?>: { 
            required: "Pajak tanah, tidak boleh kosong!", 
          },
          sebabalih<?php echo $i; ?>: { 
            required: "Masukan sebab peralihan!", 
          },
          tglalih<?php echo $i; ?>: { 
            required: "Tanggal peralihan, tidak boleh kosong!", 
          },
          kohirasal<?php echo $i; ?>: { 
            required: "No. kohir asal tanah, tidak boleh kosong!", 
          },
          ket<?php echo $i; ?>: { 
            required: "Keterangan, tidak boleh kosong!", 
          },
    <?php 
        }
    ?>
                    
    <?php 
        for ($i=1; $i<=$jumlah; $i++)
        {
            if ($i < $jumlah){
                echo "kohirtujuan$i: { 
                required: 'No. kohir penerima/tujuan, tidak boleh kosong!', 
                },";
            }
            else {
                echo "kohirtujuan$i: { 
                required: 'No. kohir penerima/tujuan, tidak boleh kosong!', 
                }";
            }
        } 
    ?>
          
        }
     });
    })($);
  </script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/backend/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/backend/dist/js/demo.js"></script>

<!-- page script -->



<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/timepicker/bootstrap-timepicker.min.js"></script>



<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/iCheck/icheck.min.js"></script>

                    <script>
                        $('#input').on('keyup', function(){
                           var input = $(this).val();
                           $('#preview_input').text(input);
                        });
                    </script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    
    <?php 
        for ($i=1; $i<=$jumlah; $i++)
        {
    ?>
    //Date picker
    $('#tglalih<?php echo $i; ?>').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true
    });
    
    <?php    
        } 
    ?>

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

</body>
</html>
