<?php
     include('../config.php');
<<<<<<< HEAD
    if(isset($_GET['uid'])){
        var_dump($_GET['uid']);
        $id = $_GET['uid'];
        mysqli_query($conn, "DELETE FROM `users` WHERE `uid` = $id");
        //header("location: admin.php");
=======
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM `user1` WHERE id = $id");
        header("location: admin.php");
>>>>>>> bed40f4baf60663f69b91bcbab67a4241022909f
    }
?>

