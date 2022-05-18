<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>STOCK REFILL ALERT | TLS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    
    

  <!-- Navbar -->
  <?php

include 'themepart/header.php'

?>
  <!-- /.navbar -->

    
    
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="TLS.php" class="brand-link">
      <img src="dist/img/tls.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">The Loop Studio - TLS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/gt-logo.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="DASHBOARD.php" class="d-block">GOPAL TRADERS</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="GENERATE_BILL.php" class="nav-link">
              <i class='nav-icon fas fa-print' style='font-size:24px'></i>
              <p>
                Generate Bill
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="PURCHASE_ENTRY.php" class="nav-link">
              <i class='nav-icon fas fa-file-invoice' style='font-size:24px'></i>
              <p>
                Purchase Entry
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="ADD_STOCK.php" class="nav-link">
              <i class='nav-icon fas fa-edit' style='font-size:21px'></i>
              <p>
                Add Stock
              </p>
            </a>
        </li>
          <li class="nav-item has-treeview">
            <a href="STOCK_MNTN.php" class="nav-link">
              <i class='nav-icon fas fa-tasks' style="font-size: 23px"></i>
              <p>
                Stock Maintenance
              </p>
            </a>
        </li>
          
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class='nav-icon fas fa-exclamation-circle' style='font-size:24px'></i>
              <p>
                Set stock refill alert
              </p>
            </a>
          </li>
<!--
            <li class="nav-item">
            <a href="pages/widgets.php" class="nav-link">
              <i class='nav-icon far fa-comment-dots' style='font-size:24px'></i>
              <p>
                Update on SMS / Whatsapp
              </p>
            </a>
          </li>
-->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class='nav-icon fas fa-clipboard-check' style='font-size:24px'></i>
              <p>
                Status Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="SALES-SR.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="PURCHASE-SR.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purachase</p>
                </a>
              </li>
             </ul>
          </li>
            
          <li class="nav-item">
            <a href="CREATE_ACCOUNT.php" class="nav-link">
              <i class='nav-icon fas fa-user-plus' style='font-size:20px'></i>
              <p>
                CREATE ACCOUNT
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>STOCK REFILL ALERT</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="card card-default">
          <div class="card-body">
              <div class="row" style="text-align: center">
                    <div class="col-lg-6" id="SUPPLIER">
                        <br>
                        <span>PRODUCT:</span><br>
                        <input type="text" name="NAME" class="input"><br><br>
                   
                        <span>COMPANY:</span><br>
                        <input type="number" name="NAME" class="input"><br><br>
                   
                        <span>BRAND:</span><br>
                        <input type="number" name="NAME" class="input"><br><br>
                    </div>
                  
                    <div class='col-lg-6 '>
                        <span>UNITS:</span><br>
                        <input type="text" name="NAME" class="input"><br><br>
                   
                        <span>QUANTITY:</span><br>
                        <input type="number" name="NAME" class="input"><br><br>
            
                        <span>SET ALERT (QUANTITY):</span><br>
                        <input type="text" name="NAME" class="input"><br><br>
                    
                        <span>SET ALERT (DATE):</span><br>
                        <input type="date" name="NAME" class="input"><br><br>
                    </div>
                </div>
  
              <div style="text-align: center">
                  <button type="button" class="btn col-lg-2 btn-primary">SET</button>
              </div>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php

include 'themepart/footer.php'

?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
