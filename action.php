<?php include("db.php"); ?>
<?php

if(isset($_POST['query'])){
    $inpText = $_POST['query'];
    $query = "SELECT `product_name` FROM `product` WHERE `product_name` LIKE '%$inpText%'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['product_name']."</a>";
        }
    }else{
        echo"<p class='list-group-item border-1'>No Record</p>";
    }
}

if(isset($_POST['salesAccQuery'])){
    $inpText = $_POST['salesAccQuery'];
    $query = "SELECT `name` FROM `create_account` WHERE `name` LIKE '%$inpText%'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['name']."</a>";
        }
    }else{
        echo"<p class='list-group-item border-1'>No Record</p>";
    }
}


?>