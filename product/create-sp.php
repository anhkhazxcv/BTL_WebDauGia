<?php
    session_start();
    if (isset($_SESSION['uname'])) {
    include('header-sp.php');
    $result = mysqli_query($conn,"SELECT * FROM product");
    if(mysqli_num_rows($result) > 0){
        $quanlysp = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';

    if(isset($_POST['save'])){
        $sp_id = $_POST['sp_id'];
        $sp_type = $_POST['sp_type'];
        $sp_img = $_POST['sp_img'];
        $sp_name = $_POST['sp_name'];
        $sp_description = $_POST['sp_description'];
        $sp_price = $_POST['sp_price'];
        $sp_startdate = $_POST['sp_startdate'];
        $sp_enddate = $_POST['sp_enddate'];
        // $sp_status = $_POST['sp_status'];
        // $sp_buyer = $_POST['sp_buyer'];
        $uid = $_POST['uid'];


        mysqli_query($conn, "INSERT INTO `product` (`sp_id`, `sp_type`, `sp_img`, `sp_name`, `sp_description`, `sp_price`, `sp_startdate`, `sp_enddate`,`uid`) VALUES ('$sp_id', '$sp_type', '$sp_img', '$sp_name', '$sp_description', '$sp_price', '$sp_startdate', '$sp_enddate', '$uid')"); 

       


        header("location: index-sp.php");
    }
?>
<div class="container">
    <form method="POST">

        <div class="form-group">
            <label>Loại sản phẩm:</label>
            <input type="text" class="form-control" name="sp_type" >
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm:</label>
            <input type="text" class="form-control" name="sp_img" >
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="sp_name" >
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="sp_description" >
        </div>

        <div class="form-group">
            <label>Giá khởi điểm đấu giá:</label>
            <input type="number" class="form-control" name="sp_price" >
        </div>

        <div class="form-group">
			<label for="birthday">Ngày đấu giá:</label>
			<input type="date" class="form-control" id="year" name="sp_startdate" >
		</div>

        <div class="form-group">
			<label for="birthday">Ngày kết thúc đấu giá:</label>
			<input type="date" class="form-control" id="year" name="sp_enddate" >
		</div>

        
       <div class="form-group">
            <label>Người bán sản phẩm:</label>
            <input type="text" class="form-control" name="uid" value = "<?php echo $_SESSION['uname']?>">
        </div> 

      
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Lưu sản phẩm</button>
        </div>
    </form>
</div>
<?php
    include('footer-sp.php');
}else{
    header("Location: index.php");
    exit();
}
?>
