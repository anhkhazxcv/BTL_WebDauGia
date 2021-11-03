<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web_daugia');
    if(!$conn){
        die("Kết nối thất bại" . mysqli_connect_error());
    } 
    mysqli_set_charset($conn, 'UTF8');
?>
