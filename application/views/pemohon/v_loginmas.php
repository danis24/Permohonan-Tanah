<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Halaman Login</b> Masyarakat</a>
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
    
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>

    <form id="form_login" action="<?php echo base_url(); ?>index.php/Loginmas/do_login" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div style="color: red;font-size: 10pt;" id="invalid-username" class="error_msg"></div>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div style="color: red;font-size: 10pt;" id="invalid-password" class="error_msg"></div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url(); ?>index.php/Register" class="text-center">Registrasi Akun</a>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?=base_url('assets/backend/jquery-1.9.1.min.js');?>"></script>
<script src="<?=base_url('assets/backend/jquery.validate.min.js');?>"></script>
<script>
    (function($){
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });
       $("#form_login").validate({
            rules: {
          username:{ 
             required: true,
          },
          password: { 
            required : true, 
          }
        },
        messages: {
          username: { 
             required: "Tolong masukan username!",
          },
          password: { 
             required: "Tolong masukan password!",
          }         
        }
     });
    })($);
  </script>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/backend/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/backend/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
