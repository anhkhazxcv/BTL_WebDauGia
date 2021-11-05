<?php
    include('header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM product WHERE sp_id = '$id'");
        if(mysqli_num_rows($result)==1){
            $quanlysp = mysqli_fetch_array($result);
            $sp_id =  $quanlysp['sp_id'];
            $sp_type = $quanlysp['sp_type'];
            $sp_img =  $quanlysp['sp_img'];
            $sp_name =  $quanlysp['sp_name'];
            $sp_description =  $quanlysp['sp_description'];
            $sp_price =  $quanlysp['sp_price'];
            $sp_startdate =  $quanlysp['sp_startdate'];
            $sp_enddate = $quanlysp['sp_enddate'];
            $sp_status = $quanlysp['sp_status'];
            $uid = $quanlysp['uid'];
            
        }
    }
    if(isset($_POST['update'])){
        $sp_id = $_POST['sp_id'];
        $sp_type = $_POST['sp_type'];
        $sp_img = $_POST['sp_img'];
        $sp_name = $_POST['sp_name'];
        $sp_description = $_POST['sp_description'];
        $sp_price = $_POST['sp_price'];
        $sp_startdate = $_POST['sp_startdate'];
        $sp_enddate = $_POST['sp_enddate'];
        $sp_status = $_POST['sp_status'];
        $uid = $_POST['uid'];

        mysqli_query($conn, "UPDATE product SET sp_id='$sp_id',sp_type='$sp_type', sp_img='$sp_img', sp_name='$sp_name', sp_description='$sp_description', sp_price='$sp_price', sp_startdate='$sp_startdate',sp_enddate='$sp_enddate',sp_status='$sp_status',uid='$uid' WHERE sp_id ='$id' ");
        header("location: index-sp.php");
    }
?>
    <div class="container">
    <form method="POST">
       
        <div class="form-group">
            <label>Mã Sản Phẩm:</label>
            <input type="number" class="form-control" name="sp_id"value="<?php echo $id?>" >
        </div>
        <div class="form-group">
            <label>Loại sản phẩm:</label>
            <input type="text" class="form-control" name="sp_type" value="<?php echo $sp_type?>" >
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm:</label>
            <input type="text" class="form-control" name="sp_img" value="<?php echo $sp_img?>" >
        </div>
        <div class="form-group">
            <label>Tên sản phẩm:</label>
            <input type="text" class="form-control" name="sp_name" value="<?php echo $sp_name?>" >
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm:</label>
            <input type="text" class="form-control" name="sp_description" value="<?php echo $sp_description?>">
        </div>

        <div class="form-group">
            <label>Giá khởi điểm đấu giá:</label>
            <input type="number" class="form-control" name="sp_price"  value="<?php echo $sp_price?>">
        </div>

        <div class="form-group">
		    <label for="birthday">Ngày đấu giá:</label>
			<input type="date" class="form-control" id="year" name=" sp_startdate" value="<?php echo $sp_startdate?>" >
		</div>
        <div class="form-group">
			<label for="birthday">Ngày kết thúc đấu giá:</label>
			<input type="date" class="form-control" id="year" name=" sp_enddate" value="<?php echo $sp_enddate?>" >
		</div>
       
        <div class="form-group">
            <label>Trạng thái sản phẩm:</label>
            <input type="text" class="form-control" name="sp_status"  value="<?php echo $sp_status?>">
        </div>
        <!-- <div class="form-group">
            <label>Người mua sản phẩm:</label>
            <input type="text" class="form-control" name="sp_buyer" value="<?php echo $sp_buyer?>" >
        </div>  -->

        <div class="form-group">
            <label>Người bán sản phẩm:</label>
            <input type="text" class="form-control" name="uid" value="<?php echo $uid?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Lưu sản phẩm</button>
        </div>

    </form>
</div>

<?php
    include('footer-sp.php');
?>
