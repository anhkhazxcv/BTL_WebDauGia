<?php
    include('header.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM quanlysp WHERE sp_ma= '$id'");
        if(mysqli_num_rows($result)==1){
            $quanlysp = mysqli_fetch_array($result);
            $sp_ma =  $quanlysp['sp_ma'];
            $sp_anh =  $quanlysp['sp_anh'];
            $sp_ten =  $quanlysp['sp_ten'];
            $sp_mota =  $quanlysp['sp_mota'];
            $sp_gia =  $quanlysp['sp_gia'];
            $sp_ngay =  $quanlysp['sp_ngay'];
            
        }
    }
?>
    <div class="container"  style=" margin-top : 70px;">
        <div class="form-group">
            <label>Mã sản phẩm: </label> <br>
            <?php echo $id?>
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm: </label> <br>
            <?php echo $sp_anh?>
        </div>
        <div class="form-group">
            <label>Tên sản phẩm: </label><br>
            <?php echo $sp_ten?>
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm: </label><br>
            <?php echo $sp_mota?>
        </div>
        <div class="form-group">
            <label>Giá khởi điểm ban đầu: </label><br>
            <?php echo $sp_gia?>
           
        </div>
        <div class="form-group">
            <label>Ngày đấu giá: </label><br>
            <?php echo $sp_ngay?>
        </div>
      
        <form method="POST" action="index.php">
        <button type="submit" class="btn btn-primary">Back</button>
    </form>
</div>

<?php
    include('footer.php');
?>
