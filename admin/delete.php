<?php
    include('../header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM user1 WHERE id ='$id'");
        header("location: admin.php");
    }
?>

