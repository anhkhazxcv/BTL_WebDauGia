<?php
    include('header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM quanlysp WHERE sp_ma= '$id'");
        if(mysqli_num_rows($result)==1){
            $quanlysp = mysqli_fetch_array($result);
            $sp_ma =  $quanlysp['sp_ma'];
            $sp_loai = $quanlysp['sp_loai'];
            $sp_anh =  $quanlysp['sp_anh'];
            $sp_ten =  $quanlysp['sp_ten'];
            $sp_mota =  $quanlysp['sp_mota'];
            $sp_gia =  $quanlysp['sp_gia'];
            $sp_ngaybd =  $quanlysp['sp_ngaybd'];
            $sp_ngaykt = $quanlysp['sp_ngaykt'];
            $sp_nguoiban = $quanlysp['sp_nguoiban'];
            $sp_trangthai = $quanlysp['sp_trangthai'];
            $sp_nguoimua = $quanlysp['sp_nguoimua'];
            
        }
    }
?>
    <div class="container"  style=" margin-top : 70px;">
        <div class="form-group">
            <label>Mã sản phẩm: </label> <br>
            <?php echo $id?>
        </div>
        <div class="form-group">
            <label>Loại sản phẩm:</label><br>
            <?php echo $sp_loai?>
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
            <?php echo $sp_ngaybd?>
        </div>
        <div class="form-group">
			<label for="birthday">Ngày kết thúc đấu giá:</label>
			<?php echo $sp_ngaykt?>
		</div>
        <div class="form-group">
            <label>Người bán sản phẩm:</label><br>
            <?php echo $sp_nguoiban?>
        </div>
        <div class="form-group">
            <label>Trạng thái sản phẩm:</label><br>
            <?php echo $sp_trangthai?>
        </div>
        <div class="form-group">
            <label>Người mua sản phẩm:</label><br>
            <?php echo $sp_nguoimua?>
        </div> 
      
        <form method="POST" action="index-sp.php">
        <button type="submit" class="btn btn-primary">Back</button>
    </form>
</div>

<?php
    include('footer-sp.php');
?>
