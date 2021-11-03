<?php
    include('header.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM cars WHERE vehicle_id='$id'");
        header("location: index.php");
    }
?>

<?php
    include('footer.php');
?>