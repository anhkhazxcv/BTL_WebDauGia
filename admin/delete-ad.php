<?php
    include('headerad.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM product WHERE sp_id='$id'");
        header("location: product-ad.php");
    }
?>

