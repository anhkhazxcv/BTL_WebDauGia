<?php
    include('header-sp.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM product WHERE sp_id= '$id'");
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
?>
    <div class="container"  style=" margin-top : 70px;">
        <div class="form-group">
            <label>Mã sản phẩm: </label> <br>
            <?php echo $id?>
        </div>
        <div class="form-group">
            <label>Loại sản phẩm:</label><br>
            <?php echo $sp_type?>
        </div>
        <div class="form-group">
            <label>Ảnh sản phẩm: </label> <br>
            <?php echo $sp_img?>
        </div>
        <div class="form-group">
            <label>Tên sản phẩm: </label><br>
            <?php echo $sp_name?>
        </div>
        <div class="form-group">
            <label>Mô tả sản phẩm: </label><br>
            <?php echo $sp_description?>
        </div>
        <div class="form-group">
            <label>Giá khởi điểm ban đầu: </label><br>
            <?php echo $sp_price?>
           
        </div>
        <div class="form-group">
            <label>Ngày đấu giá: </label><br>
            <?php echo $sp_startdate?>
        </div>
        <div class="form-group">
			<label for="birthday">Ngày kết thúc đấu giá:</label>
			<?php echo $sp_enddate?>
		</div>
        
        <div class="form-group">
            <label>Trạng thái sản phẩm:</label><br>
            <?php echo $sp_startdate?>
        </div>
        <!-- <div class="form-group">
            <label>Người mua sản phẩm:</label><br>
            <?php echo $sp_buyer?>
        </div>  -->
      <div class="form-group">
            <label>Người bán sản phẩm:</label><br>
            <?php echo $uid?>
        </div>
        <form method="POST" action="index-sp.php">
        <button type="submit" class="btn btn-primary">Back</button>
    </form>
</div>

<?php
    include('footer-sp.php');
?>
 
