<?php
     include('../config.php');
    if(isset($_GET['uid'])){
        var_dump($_GET['uid']);
        $id = $_GET['uid'];
        mysqli_query($conn, "DELETE FROM `users` WHERE `uid` = $id");
        //header("location: admin.php");
    }
?>

