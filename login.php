<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PGSCOIS | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/AdminLTE/plugins/fontawesome-free/css/all.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/AdminLTE/dist/css/adminlte.css");?>">

  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/AdminLTE/plugins/toastr/toastr.css");?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">body{background:url(<?php assets($s3,$environment,"assets/PGSC/images/login.jpg");?>) no-repeat center center fixed!important; }</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
<!--   <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div> -->
  <!-- /.login-logo -->
      <div class="login-logo">
          <img src="<?php assets($s3,$environment,"assets/iPOD/img/socot_logo.png");?>">
      </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b> Provincial Goverment of South Cotabato</b> <br> Information System</p>

      <form action="function/php/ajax_login.php" id="form_login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="user" name="user" required placeholder="User">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="btn_login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php assets($s3,$environment,"assets/AdminLTE/plugins/jquery/jquery.min.js");?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php assets($s3,$environment,"assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php assets($s3,$environment,"assets/AdminLTE/dist/js/adminlte.min.js");?>"></script>

<script src="<?php assets($s3,$environment,"assets/AdminLTE/plugins/toastr/toastr.min.js");?>"></script>
<script src="function/js/login.js" type="text/javascript"></script>
</body>
</html>
