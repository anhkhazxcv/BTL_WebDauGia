<?php
    session_start();
    include('header-sp.php');
    $con=mysqli_connect("localhost","root","","webdaugia");

    if($con){
      echo "";
    }
    else{
        echo "connection failed";
    }
        

    if(isset($_POST['addPd'])){

        $sp_ma = $_POST['sp_ma'];
        $sp_loai = $_POST['sp_loai'];
        // $sp_anh = " ";
        $sp_mota = $_POST['sp_mota'];
        $sp_gia = $_POST['sp_gia'];
        $sp_trangthai = $_POST['sp_trangthai'];
        $uid = $_POST['sp_nguoiban'];       
        ?>
        <script>
            alert("<?php echo $_SESSION['uname'] ?>")
        </script>   
        <?php

        
        
        
        $ins = "INSERT INTO `product` (`pd_type`, `pd_description`, `pd_price`, `pd_startdate`, `pd_enddate`, `pd_status`, `uid`, `pd_name`) VALUES ( '$sp_loai' ,  '$sp_mota', '$sp_gia', '0000-00-00', '0000-00-00', '$sp_trangthai', '$uid','$sp_ma' ) ";
        $con->query($ins);

        header("location:   index-sp.php");
    }
    
?>
<div class="container">
    <form method="POST" enctype='multipart/form-data'>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="sp_ma" >
        </div>
        <div class="form-group">
            <label>Loại sản phẩm:</label>
            <input type="text" class="form-control" name="sp_loai" >
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm:</label>
            <input type="file" class="form-control" name="sp_anh" >
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="sp_mota" >
        </div>

        <div class="form-group">
            <label>Giá khởi điểm đấu giá (đơn vị $/USD):</label>
            <input type="text" class="form-control" name="sp_gia" >
        </div>

        <div class="form-group">
            <label>Người bán sản phẩm:</label>
            <input type="text" class="form-control" name="sp_nguoiban" value = <?php echo $_SESSION['uname'] ?> >
        </div>
        <div class="form-group">
            <label>Trạng thái sản phẩm:</label>
            <input type="text" class="form-control" name="sp_trangthai" >
        </div>
        
      
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="addPd">Lưu sản phẩm</button>
        </div>
    </form>
</div>
<?php
    include('footer-sp.php');
?>
