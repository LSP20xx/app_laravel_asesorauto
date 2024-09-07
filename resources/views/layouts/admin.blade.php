<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AsesorAutos | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/assets/lte3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/public/assets/lte3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Aside -->
    @include('admin.asideLte')
    <!-- /Aside -->
    <!-- NavBar -->
    @include('admin.navBarLte')
    <!-- /NavBar -->
    <!-- Content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <!--<div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!--<ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>-->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <section class="content">
        <div class="container-fluid">
          @include('admin.flash-message')

          @yield('content')
        </div>
      </section>

    </div>
    <!-- /Content -->
    <!-- Footer -->
    @include('admin.footerLte')
    <!-- /Footer -->
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="/public/assets/lte3/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/public/assets/lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/public/assets/lte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/public/assets/lte3/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="/public/assets/lte3/dist/js/demo.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="/public/assets/lte3/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="/public/assets/lte3/plugins/raphael/raphael.min.js"></script>
  <script src="/public/assets/lte3/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="/public/assets/lte3/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="/public/assets/lte3/plugins/chart.js/Chart.min.js"></script>

  <!-- PAGE SCRIPTS -->
  <script src="/public/assets/lte3/dist/js/pages/dashboard2.js"></script>
</body>


</html>