
<?php include '../config/config.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css");?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css");?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/jqvmap/jqvmap.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/dist/css/adminlte.min.css");?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css");?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/daterangepicker/daterangepicker.css");?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/summernote/summernote-bs4.css");?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php assets($s3,$environment,"../assets/iPOD/img/socot_logo.png");?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PGSCIOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://ui-avatars.com/api/?background=0D8ABC&color=ffff&name=Admin&rounded=true" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">USER</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
     
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
    
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
<!--     <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1-pre
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/jquery/jquery.min.js");?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js");?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- overlayScrollbars -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/adminlte.js");?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/pages/dashboard.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php assets($s3,$environment,"../assets/AdminLTE/dist/js/demo.js");?>"></script>
</body>
</html>