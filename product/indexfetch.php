<?php
include('config-sp.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn, "UPDATE `product` SET `sp_status` = 'Running' WHERE `product`.`sp_id` = '$id' ");
};
header("location:index-sp.php");
?>