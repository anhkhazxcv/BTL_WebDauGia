<?php
     include('../config.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM users WHERE `uid` = '$id'");
        header("location:admin.php");

    }
?>

