<?php
    include('header.php');
    $result = mysqli_query($conn,"SELECT * FROM quanlysp");
    if(mysqli_num_rows($result) > 0){
        $quanlysp = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';

    if(isset($_POST['save'])){
        $sp_ma = $_POST['sp_ma'];
        $sp_anh = $_POST['sp_anh'];
        $sp_ten = $_POST['sp_ten'];
        $sp_mota = $_POST['sp_mota'];
        $sp_gia = $_POST['sp_gia'];
        $sp_ngay = $_POST['sp_ngay'];
        

        mysqli_query($conn, "INSERT INTO quanlysp (sp_ma, sp_anh, sp_ten, sp_mota, sp_gia, sp_ngay) VALUES ('$sp_ma','$sp_anh','$sp_ten','$sp_mota','$sp_gia','$sp_ngay') ");
        header("location:   index.php");
    }
    
?>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <label>Mã Sản Phẩm:</label>
            <input type="number" class="form-control" name="sp_ma" >
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm:</label>
            <input type="text" class="form-control" name="sp_anh" >
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="sp_ten" >
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="sp_mota" >
        </div>

        <div class="form-group">
            <label>Giá khởi điểm đấu giá:</label>
            <input type="number" class="form-control" name="sp_gia" >
        </div>

        <div class="form-group">
				  <label for="birthday">Ngày đấu giá:</label>
				  <input type="date" class="form-control" id="year" name=" sp_ngay" >
		</div>


        <!-- <div class="form-group">
            <label>Drate</label>
            <input type="datetime" class="form-control" name="sp_ngay" >
        </div>
        -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Lưu sản phẩm</button>
        </div>
    </form>
</div>
<?php
    include('footer.php');
?>
