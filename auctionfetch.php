<?php
include('config.php');
if(isset($_GET['id']) && isset($_GET['price'])){
    $id = $_GET['id'];
    $price = $_GET['price'] + 10;
    echo $price;
    // mysqli_query($conn, "UPDATE `product` SET `sp_status` = 'Running' WHERE `product`.`sp_id` = '$id' ");
    mysqli_query($conn, "UPDATE `product` SET `sp_price` = '$price' WHERE `product`.`sp_id` = '$id' ");
    header("location:auction.php");
} else echo "wrong"
?>