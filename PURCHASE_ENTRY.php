<?php include("db.php"); ?>
<?php session_start(); ?>
<?php ob_start(); ?>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <a href="#" class="nav-link active">
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
            <a href="STOCK_RFL_ALERT.php" class="nav-link">
              <i class='nav-icon fas fa-exclamation-circle' style='font-size:24px'></i>
              <p>
                Set stock refill alert
              </p>
            </a>
          </li>

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
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col">
              <h1>PURCHASE ENTRY</h1>
            </div>
          </div>
        </div>
      </section>


<?php
if(isset($_POST['supplier_submit'])){
  $supplier_name = $_POST['supplier_name'];
  $supplier_contact = $_POST['supplier_contact'];
  $sales_acc = $_POST['sales_acc'];
  echo $bill_date = $_POST['bill_date'];
  // echo $bill_number = mysqli_insert_id();
  $invoice_type = $_POST['invoice_type'];
  $paid_as = $_POST['paid_as'];
  
  if($_POST['bill_number'] == null){
  $query = "INSERT INTO `purchase_entry` (`supplier_name`, `supplier_contact`, `sales_acc`, `bill_date`, `invoice_type`, `paid_as`) VALUES ('$supplier_name', $supplier_contact, '$sales_acc', '$bill_date', '$invoice_type', '$paid_as')";
  $result = mysqli_query($connection, $query);
  echo $bill_number = mysqli_insert_id($connection);
  echo $_SESSION["bill_number"] = $bill_number;
  
  $query_to_insert_billnumber = "UPDATE `purchase_entry` SET `bill_number` = $bill_number WHERE `purchase_entry`.`purchase_id` = $bill_number";
  $result = mysqli_query($connection, $query_to_insert_billnumber);
  if (!$result) {
    echo("Error description: " . mysqli_error($connection));
    }
  }
  else{
    $bill_number = $_POST['bill_number'];
    $query = "UPDATE `sale_entry` SET customer_name='{$customer_name}', customer_contact = {$customer_contact}, sales_acc = '{$sales_acc}', bill_date='{$bill_date}', invoice_type='{$invoice_type}', paid_as='{$paid_as}' WHERE bill_number = {$bill_number} ";
    
    $result = mysqli_query($connection, $query);
    if (!$result) {
    echo("Error description: " . mysqli_error($connection));
    }
    
}
}


if(isset($_POST['submit_product'])){
	if($_SESSION["bill_number"] != null){

		echo $bill_number = $_SESSION['bill_number'];
		$product_name = $_POST['product_name'];
		$varient = $_POST['varient'];
		$product_rate = $_POST['product_rate'];
		$product_amount = $_POST['product_amount'];
		$product_quantity = $_POST['product_quantity'];
		$query = "INSERT INTO `purchase_product` (`bill_number`, `product_description`, `product_varient`, `product_qty`, `per_product_rate`, `product_amount`) VALUES ($bill_number, '$product_name', '$varient', $product_quantity, $product_rate, $product_amount)";
		$result = mysqli_query($connection, $query);
		if (!$result) {
			echo("Error description: " . mysqli_error($connection));
		}
	}else{
    echo "Bill number not given!";
  }
}







?>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="card card-default">



            <form action="" method="POST" >
<?php

if(isset($_SESSION['bill_number'])){
  $bill_number = $_SESSION['bill_number'];
  $query = "SELECT * FROM `purchase_entry` WHERE `bill_number` = $bill_number";
  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($result)){
    $supplier_name = $row['supplier_name'];
    $supplier_contact = $row['supplier_contact'];
    $sales_acc = $row['sales_acc'];
    $bill_date = $row['bill_date'];
    $invoice_type = $row['invoice_type'];
    $paid_as = $row['paid_as'];
  }
}




?>

          <div class="card-body">
              <div class="row">
                    <div class="col-lg-4" id="SUPPLIER">
                        <span>SUPPLIER:</span>
                        <input type="text" name="supplier_name" value="<?php if(isset($_SESSION['bill_number'])){echo $supplier_name;} ?>" class="input">
                    </div>
                    <div class="col-lg-4" id="SUPPLIER">
                        <span>SALES A/C:</span>
                        <input type="text" name="sales_acc" id="sales_acc" value="<?php if(isset($_SESSION['bill_number'])){echo $sales_acc;} ?>" class="input">
                        <div class="col-lg-5" style="position:relative;margin-left:70px;">
                              <div class="list-group" id="show-acc">
                                
                              </div>
                            </div>  
                        
                        <script>
                              $(document).ready(function(){
                                $("#sales_acc").keyup(function(){
                                  var salesAccText = $(this).val();
                                  if(salesAccText != ''){
                                    $.ajax({
                                      url:'action.php',
                                      method:'post',
                                      data:{salesAccQuery:salesAccText},
                                      success:function(response){
                                        $("#show-acc").html(response);
                                      }
                                    });
                                  }else{
                                    $("#show-acc").html('');
                                  }
                                });
                                $(document).on('click','a',function(){
                                  $("#sales_acc").val($(this).text());
                                  $("#show-acc").html('');
                                });
                              });
                            </script>
                  </div>
                  <div class="col-lg-4">
                    <div id="SUPPLIER">
                        <span>MOBILE NO:</span>
                        <input type="number" name="supplier_contact" value="<?php if(isset($_SESSION['bill_number'])){echo $supplier_contact;} ?>" class="input">
                    </div>
                  </div>
              </div>
      
              <br>
              
              <div class="row" style="text-align: center">
                <div class="col-lg-3" id="SUPPLIER">
                        <span>BILL DATE:</span>
                        <input type="date" name="bill_date" value="<?php if(isset($_SESSION['bill_number'])){echo $bill_date;}else{echo date('Y-m-d');} ?>" class="input">
                </div>
                <div class="col-lg-3" >                      
                        <span>BILL NO:</span>
                        <input type="number" name="bill_number" value="<?php if(isset($_SESSION['bill_number'])){echo $bill_number;} ?>" class="inpuut" >
                </div>
<!--
              </div>  
              
              <br>
              
              <div class="row" style="text-align: center">
-->
                <div class="col-lg-3">
                    <p>PAYMENT METHOD:
                    <select class="btn btn-primary" name="paid_as">
                      <?php
                      if(isset($_SESSION['bill_number'])){
                        if($paid_as == 'cash'){
                          echo "<option selected hidden value='cash'>CASH</option>"; 
                          echo "<option value='card'>CARD</option>"; 
                        }else{
                          echo "<option value='cash'>CASH</option>"; 
                          echo "<option selected hidden value='card'>CARD</option>"; 
                        }
                      }else{
                        echo "<option value='cash'>CASH</option>"; 
                        echo "<option value='card'>CARD</option>"; 
                      }
                      
                      ?>
                        
                    </select></p>
                </div>
                  
                <div class="col-lg-3">
                    <p>INVOICE TYPE:
                        <select class="btn btn-primary" name="invoice_type">
                        <?php
                      if(isset($_SESSION['bill_number'])){
                        if($invoice_type == 'gst'){
                          echo "<option selected hidden value='gst'>GST</option>"; 
                          echo "<option value='nongst'>NON - GST</option>"; 
                        }else{
                          echo "<option value='gst'>GST</option>"; 
                          echo "<option selected hidden value='nongst'>NON - GST</option>"; 
                        }
                      }else{
                        echo "<option value='gst'>GST</option>"; 
                        echo "<option value='nongst'>NON - GST</option>"; 
                      }
                      
                      ?>
                    </select></p>
                </div>
              </div>   
              
              <div style="text-align: center">
                  <button type="submit" name="supplier_submit" class="btn col-lg-2 btn-primary">Submit</button>
              </div>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
          
      </form>
                  <form action="" method="POST" >
        
        <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <span>PRODUCT:</span><br>
                            <input type="text" name="product_name" id="product_name" class="input"><br>
                            <div class="col-lg-7" style="position:relative;margin-left:-8px;">
                              <div class="list-group" id="show-list">
                                
                              </div>
                            </div>
                        <span>VARIENT:</span><br>
                            <input type="text" name="varient" class="input"><br>
                        <span>QUALITY:</span><br>
                            <input type="number" name="product_quantity" id="product_quantity" class="input"><br>
                        <span>RATES:</span><br>
                            <input type="number" name="product_rate" id="product_rate" class="input"><br>
                        <span>AMOUNT:</span><br>
                            <input type="number" name="product_amount" id="product_amount" class="input"><br><br>
                            <script>
                              $(document).ready(function(){
                                $("#product_name").keyup(function(){
                                  var productText = $(this).val();
                                  if(productText != ''){
                                    $.ajax({
                                      url:'action.php',
                                      method:'post',
                                      data:{query:productText},
                                      success:function(response){
                                        $("#show-list").html(response);
                                      }
                                    });
                                  }else{
                                    $("#show-list").html('');
                                  }
                                });
                                $(document).on('click','a',function(){
                                  $("#product_name").val($(this).text());
                                  $("#show-list").html('');
                                });
                              });
                            </script>
                            <script>
                              // var qty = document.getElementById("product_quantity").value;
                              // var rate = document.getElementById("product_rate").value;
                              // var amount = qty * rate;
                              // document.getElementById("product_amount").value = amount;
                              $("#product_rate").keyup(function() {
                                var qty = $("#product_quantity").val();
                                var rate = $("#product_rate").val();
                                var amount = qty * rate;
                                $("#product_amount").val(amount);
                              });
                            </script>
                        
                        
                        <div style="text-align: right">
                            <button type="submit" name="submit_product" class="btn btn-primary">ADD -></button>
                        </div>
                    </div> 
                  </form>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-12 table-responsive">
                              <table class="table table-striped">
                                <thead>
                                <tr>
                                  <th>#</th>
                                  <th>PRODUCT</th>
                                  <th>VARIENT</th>
                                  <th>QUANTITY</th>
                                  <th>RATES</th>
                                  <th>AMOUNT</th>
                                  <th>REMOVE</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $amount = 0;
                                $n = 0;
	                              if(isset($_SESSION['bill_number'])){
                                  $bill_number = $_SESSION['bill_number'];
                                  $query = "SELECT * FROM `purchase_product` WHERE `bill_number` = $bill_number";
                                  $result = mysqli_query($connection, $query);
                                    
                                  while($row = mysqli_fetch_assoc($result)){
                                    $product_purchase_id = $row['purchase_product_id'];
                                    $product_description = $row['product_description'];
                                    $product_varient = $row['product_varient'];
                                    $product_qty = $row['product_qty'];
                                    $per_product_rate = $row['per_product_rate'];
                                    $product_amount = $row['product_amount'];
                                    $amount = $amount + $product_amount;
                                    $n++;
                                    echo "<tr>";
                                    echo "<td>$n</td>";
                                    echo "<td>$product_description</td>";
                                    echo "<td>$product_varient</td>";
                                    echo "<td>$product_qty</td>";
                                    echo "<td>$per_product_rate</td>";
                                    echo "<td>$product_amount</td>";
                                    echo "<td><button class='btn btn-danger' name='' ><a href='PURCHASE_ENTRY.php?delete={$product_purchase_id}' style='text-decoration : none; color : #fff;'>x</a></button></td>";
                                    echo "</tr>";
                                  }
                                }
                                
                                
                                ?>
                                <?php 
  
  if(isset($_GET['delete'])){
      
      echo $the_product_purchase_id = $_GET['delete'];
      
      $delete = " DELETE FROM purchase_product 
      WHERE purchase_product_id = {$the_product_purchase_id} ";
     
      
     $delete_query = mysqli_query($connection,$delete);
  
      header("Location: PURCHASE_ENTRY.php");
  }

?>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.col -->
                          </div>
                    </div>
                </div>
                    
                <div class="row" style="text-align: right">
                    <div class="col-lg-12">
<!--                        <hr>-->
                        <div>
                                <button type="button" class="btn col-lg-3 btn-secondary">TOTAL: <?php echo $amount; ?></button>
                        </div>
                    </div>
                </div>
                
                <hr>
<!--                <br><br>-->
                
                <div class="row" style="text-align: right">
                <?php
                if(isset($_SESSION['bill_number'])){
                  $bill_number = $_SESSION['bill_number'];
                  $query = "SELECT * FROM `purchase_entry` WHERE `bill_number` = $bill_number";
                  $result = mysqli_query($connection, $query);
                
                  while($row = mysqli_fetch_assoc($result)){
                    $supplier_name = $row['supplier_name'];
                    $supplier_contact = $row['supplier_contact'];
                    $sales_acc = $row['sales_acc'];
                    $bill_date = $row['bill_date'];
                    $invoice_type = $row['invoice_type'];
                    $paid_as = $row['paid_as'];
                  }
                  if($invoice_type == 'gst'){
                    $gst = (($amount*18)/100);
                    $gst_amount = $amount + $gst;
                    $cgst = $gst/2;
                    $sgst = $gst/2;
                    $amount_array = explode (".", $gst_amount);
                  }else{
                    $amount_array = explode (".", $amount);
                  }
                
                
                }
                
                ?>
                    <div class="col-lg-12">
                        <span>CGST:</span>
                            <input type="number" name="NAME" value="<?php if($invoice_type == 'gst'){echo $cgst;} ?>" class="input"><br>
                        <span>SGST:</span>
                            <input type="number" name="NAME" value="<?php if($invoice_type == 'gst'){echo $sgst;} ?>" class="input"><br>
                        <span>ROUND OFF:</span>
                        
                            <input type="number" name="NAME" value="<?php if(!empty($amount_array[1])){echo $amount_array[1];}else{echo 0;} ?>" class="input"><br>
                        <span>PAYABLE AMOUNT:</span>
                        <?php 
                        
                        if(!empty($amount_array[0])){
                        if(!empty($amount_array[1])){
                          $payable_amount = $amount_array[0] + $amount_array[1];
                        }else{
                          $payable_amount = $amount_array[0];
                        }
                        }
                        ?>
                            <input type="number" name="NAME" value="<?php if(!empty($amount_array[0])){$payable_amount = round($payable_amount); echo $payable_amount;}else{echo 0;} ?>" class="input"><br><br>
                    </div> 
                </div>
                
<?php

if(isset($_POST['cancel'])){
  if(!empty($bill_number)){
    
    $delete = " DELETE FROM purchase_product WHERE bill_number = {$bill_number} ";
    $delete_query = mysqli_query($connection,$delete);
    $delete = " DELETE FROM purchase_entry WHERE bill_number = {$bill_number} ";
    $delete_query = mysqli_query($connection,$delete);
    unset($_SESSION['bill_number']);
    header("Location: PURCHASE_ENTRY.php");
  }
}
if(isset($_POST['save'])){
  if(!empty($bill_number)){
    if(!empty($amount_array[1])){
      $save_total ="UPDATE `purchase_entry` SET `total` = $amount, `cgst` = $cgst, `sgst` = $sgst, `round_off` = $amount_array[1], `payable_amount` = $payable_amount WHERE `purchase_entry`.`bill_number` = $bill_number";
    }else{
      $save_total ="UPDATE `purchase_entry` SET `total` = $amount, `cgst` = $cgst, `sgst` = $sgst, `round_off` = 0, `payable_amount` = $payable_amount WHERE `purchase_entry`.`bill_number` = $bill_number";
    }
    $update_query = mysqli_query($connection,$save_total);
    unset($_SESSION['bill_number']);
    header("Location: PURCHASE_ENTRY.php");
  }
}
if(isset($_POST['print'])){
  if(!empty($bill_number)){
    if(!empty($amount_array[1])){
      $save_total ="UPDATE `purchase_entry` SET `total` = $amount, `cgst` = $cgst, `sgst` = $sgst, `round_off` = $amount_array[1], `payable_amount` = $payable_amount WHERE `purchase_entry`.`bill_number` = $bill_number";
    }else{
      $save_total ="UPDATE `purchase_entry` SET `total` = $amount, `cgst` = $cgst, `sgst` = $sgst, `round_off` = 0, `payable_amount` = $payable_amount WHERE `purchase_entry`.`bill_number` = $bill_number";
    }
    $update_query = mysqli_query($connection,$save_total);
    $print_bill = $_SESSION['bill_number'];
    unset($_SESSION['bill_number']);
    echo "<script language='javascript'>window.open('INVOICE-PE.php?print=$print_bill','_blank');</script>";
    echo "<script language='javascript'>window.open('PURCHASE_ENTRY.php','_self');</script>";
    // header("Location: PURCHASE_ENTRY.php");
  }
}

// $query_to_insert_billnumber = "UPDATE `purchase_entry` SET `bill_number` = $bill_number WHERE `purchase_entry`.`bill_number` = $bill_number";
// $result = mysqli_query($connection, $query_to_insert_billnumber);
// if (!$result) {
//   echo("Error description: " . mysqli_error($connection));
//   }


?>

                <div class="row" style="text-align: center">
                    <div class="col-lg-12">
                    <form action='' method="POST">
                        <button type="submit" name="cancel" class="btn col-lg-2 btn-primary">CANCEL</button> &nbsp &nbsp &nbsp &nbsp &nbsp
                        <button type="submit" name="print" class="btn col-lg-2 btn-primary">PRINT</button> &nbsp &nbsp &nbsp &nbsp &nbsp
                        <button type="submit" name="save" class="btn col-lg-2 btn-primary">SAVE</button>
                    </form>
                    </div>
                </div>
                        
          </div>
        
          <!-- right col -->
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
