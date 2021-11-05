<?php
    include('headerad.php');
    $result = mysqli_query($conn,"SELECT * FROM product");
    if(mysqli_num_rows($result) > 0){
        $quanlysp = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';
?> 
 <div class="panel-body mt-3">
          
          <table class="table table-bordered">
            <thead>
              <tr>
              <th>Mã sản phẩm</th>
              <th>Loại sản phẩm</th>
              <th>Ảnh sản phẩm</th>
              <th>Tên Sản phẩm</th>
              <th>Mô tả sản phẩm</th>
              <th>Giá khởi điểm đấu giá</th>
              <th>Ngày bắt đầu đấu giá</th>
              <th>Ngày kết thúc đấu giá</th>
              <th>Trạng thái sản phẩm</th>
              <th>Người bán sản phẩm</th>
              <th width="60px">Sửa</th>
              <th width="60px">Xóa</th>
              </tr>
            </thead>
            <tbody>
            <?php
                foreach($quanlysp as $i){
                    ?>
              <tr>
                  <th><?php echo $i[0]; ?></th>
                  <th><?php echo $i[1]; ?></th>
                  <th><img src="<?php echo $i[2]; ?>" style ="width: 80px; height: 80px"></th>
                  <th><?php echo $i[3]; ?></th>
                  <th><?php echo $i[4]; ?></th>
                  <th><?php echo $i[5]; ?></th>
                  <th><?php echo $i[6]; ?></th>
                  <th><?php echo $i[7]; ?></th>
                  <th><?php echo $i[8]; ?></th>
                  <th><?php echo $i[10]; ?></th>
    
                    <th><a href="edit-ad.php?id=<?php echo $i[0];?>"><i class="far fa-edit"></i></a></th>
                    <th><a href="delete-ad.php?id=<?php echo $i[0];?>"><i class="far fa-trash-alt"></i></a></th>
                
              </tr>
              <?php
                        }
                    ?>
            </tbody>
        
          </table>
        </div>

        
    <form method="POST" action="create-ad.php">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </form>

<?php
    include('footerad.php');
?>
