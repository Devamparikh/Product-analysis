<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INVOICE | TLS</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>

</head>
<?php
if(isset($_GET['print'])){
    $bill_number = $_GET['print'];
    $query = "SELECT * FROM `purchase_entry` WHERE `bill_number` = $bill_number";
    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($result)){
        $supplier_name = $row['supplier_name'];
        $supplier_contact = $row['supplier_contact'];
        $sales_acc = $row['sales_acc'];
        $bill_date = $row['bill_date'];
        $invoice_type = $row['invoice_type'];
        $paid_as = $row['paid_as'];
        $total = $row['total'];
        $cgst = $row['cgst'];
        $sgst = $row['sgst'];
        $round_off = $row['round_off'];
        $payable_amount = $row['payable_amount'];

    }
}

?>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" d-flex">
                            <div class="image">
                            <a href="DASHBOARD.php" class="d-block"><img src="dist/img/gt-logo.jpeg" class="img-circle" alt="User Image" width="65" height="65"></a>
                            </div>
                            <div class="info">
                                &nbsp &nbsp &nbsp<a href="DASHBOARD.php" class="d-block"><b style="font-family:verdana; font-size:26px; color:black">GOPAL TRADERS</u></b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="float-right"><strong>Email: </strong>gopaltraders@gmail.com</span><br>
                        <span class="float-right"><strong>Phone: </strong>+91 81414 77739</span>
                    </div>
            </div>

            <div class="card-header">
                <div class="row">
                    <div class="col-lg-4">
                        <strong>Date: </strong><?php echo $bill_date; ?>
                    </div>
                    <div class="col-lg-4" style="text-align:center">
                        <strong>Invoice</strong>
                    </div>
                    <div class="col-lg-4">
                    <span class="float-right"> <strong>Status: </strong><?php echo $paid_as; ?></span>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong><?php echo $supplier_name; ?></strong>
                        </div>
                        <div>Phone: +91 <?php echo $supplier_contact; ?> </div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Gopal Traders</strong>
                        </div>
                        <div>111, Main Bajar</div>
                        <div>Bhatt street,</div>
                        <div>Dhari - 365640</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Varient</th>

                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        $query = "SELECT * FROM `purchase_product` WHERE `bill_number` = $bill_number";
                        $result = mysqli_query($connection, $query);
                        $count = 0;
                        while($row = mysqli_fetch_assoc($result)){
                            $product_description = $row['product_description'];
                            $product_varient = $row['product_varient'];
                            $product_qty = $row['product_qty'];
                            $per_product_rate = $row['per_product_rate'];
                            $product_amount = $row['product_amount'];
                            $count++;
                            echo "<tr>";    
                                echo "<td class='center'>$count</td>";
                                echo "<td class='left strong'>".$product_description."</td>";
                                echo "<td class='left'>".$product_varient."</td>";

                                echo "<td class='right'>₹".$per_product_rate."/-</td>";
                                echo "<td class='center'>".$product_qty."</td>";
                                echo "<td class='right'>₹".$product_amount."/-</td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right">₹<?php echo $total; ?>/-</td>
                                </tr>
                                <!-- <tr>
                                    <td class="left">
                                        <strong>Discount (20%)</strong>
                                    </td>
                                    <td class="right">$1,699,40</td>
                                </tr> -->
                                <?php
                                if($invoice_type == 'gst'){
                                    $gst = $cgst + $sgst;
                                echo "<tr>";
                                    echo "<td class='left'>";
                                        echo "<strong>VAT (18%)</strong>";
                                    echo "</td>";
                                    echo "<td class='right'>₹".$gst."/-</td>";
                                echo "</tr>";
                                }
                                
                                ?>
                                <!-- <tr>
                                    <td class="left">
                                        <strong>VAT (18%)</strong>
                                    </td>
                                    <td class="right">$679,76</td>
                                </tr> -->
                                <tr>
                                    <td class="left">
                                        <h5><strong>Total</strong></h5>
                                    </td>
                                    <td class="right">
                                        <h5><strong>₹<?php echo $payable_amount; ?>/-</strong></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div >
                <div class="row">
                    <div class="col-lg-4">
                    <span style="font-size: 10px">Designed & developed by: The Loop Studio - TLS<br> Deep (7874126300) & Devam (9978816621)</small> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
    <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>