<?php
    include('header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM quanlysp WHERE sp_ma = '$id'");
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
    if(isset($_POST['update'])){
        $sp_ma = $_POST['sp_ma'];
        $sp_loai = $_POST['sp_loai'];
        $sp_anh = $_POST['sp_anh'];
        $sp_ten = $_POST['sp_ten'];
        $sp_mota = $_POST['sp_mota'];
        $sp_gia = $_POST['sp_gia'];
        $sp_ngaybd = $_POST['sp_ngaybd'];
        $sp_ngaykt = $_POST['sp_ngaykt'];
        $sp_nguoiban = $_POST['sp_nguoiban'];
        $sp_trangthai = $_POST['sp_trangthai'];
        $sp_nguoimua = $_POST['sp_nguoimua'];

        mysqli_query($conn, "UPDATE quanlysp SET sp_ma='$sp_ma',sp_loai='$sp_loai', sp_anh='$sp_anh', sp_ten='$sp_ten', sp_mota='$sp_mota', sp_gia='$sp_gia', sp_ngaybd='$sp_ngaybd',sp_ngaykt='$sp_ngaykt',sp_nguoiban='$sp_nguoiban',sp_trangthai='$sp_trangthai',sp_nguoimua='$sp_nguoimua' WHERE sp_ma ='$id' ");
        header("location: index-sp.php");
    }
?>
    <div class="container">
    <form method="POST">
       
        <div class="form-group">
            <label>Mã Sản Phẩm:</label>
            <input type="number" class="form-control" name="sp_ma"value="<?php echo $id?>" >
        </div>
        <div class="form-group">
            <label>Loại sản phẩm:</label>
            <input type="text" class="form-control" name="sp_loai" value="<?php echo $sp_loai?>" >
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm:</label>
            <input type="text" class="form-control" name="sp_anh" value="<?php echo $sp_anh?>" >
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="sp_ten" value="<?php echo $sp_ten?>" >
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="sp_mota" value="<?php echo $sp_mota?>">
        </div>

        <div class="form-group">
            <label>Giá khởi điểm đấu giá:</label>
            <input type="number" class="form-control" name="sp_gia"  value="<?php echo $sp_gia?>">
        </div>

        <div class="form-group">
		    <label for="birthday">Ngày đấu giá:</label>
			<input type="date" class="form-control" id="year" name=" sp_ngay" value="<?php echo $sp_ngaybd?>" >
		</div>
        <div class="form-group">
			<label for="birthday">Ngày kết thúc đấu giá:</label>
			<input type="date" class="form-control" id="year" name=" sp_ngaykt" value="<?php echo $sp_ngaykt?>" >
		</div>
        <div class="form-group">
            <label>Người bán sản phẩm:</label>
            <input type="text" class="form-control" name="sp_nguoiban" value="<?php echo $sp_nguoiban?>">
        </div>
        <div class="form-group">
            <label>Trạng thái sản phẩm:</label>
            <input type="text" class="form-control" name="sp_trangthai"  value="<?php echo $sp_trangthai?>">
        </div>
        <div class="form-group">
            <label>Người mua sản phẩm:</label>
            <input type="text" class="form-control" name="sp_nguoimua" value="<?php echo $sp_nguoimua?>" >
        </div> 


        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Lưu sản phẩm</button>
        </div>

    </form>
</div>

<?php
    include('footer-sp.php');
?>
