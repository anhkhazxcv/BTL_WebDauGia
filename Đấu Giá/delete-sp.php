<?php
    include('header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM product WHERE sp_id='$id'");
        header("location: index-sp.php");
    }
?>

<?php
    include('footer-sp.php');
?>
