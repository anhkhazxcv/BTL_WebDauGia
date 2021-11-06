<?php
    include('header-sp.php');
    $result = mysqli_query($conn,"SELECT * FROM product");
    if(mysqli_num_rows($result) > 0){
        $quanlysp = mysqli_fetch_all($result);
        $pdId = $quanlysp[0];
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
              <th width="60px">Đấu giá</th>
              <th width="60px">Xem chi tiết</th>
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
                  <th id ="status"><?php echo $i[8]; ?></th>
                  <th><?php echo $i[10]; ?></th>
    
                  <th><a href="create-sp.php?id=<?php echo $i[0];?>">
                  <a href="indexfetch.php?id=<?php echo $i[0];?>">  <button type="submit"  class="btn btn-primary" name="bid">Đấu giá</button></a></th>
                   <th><a href="details-sp.php?id=<?php echo $i[0];?>"><i class="fas fa-eye"></i></a></th>
                    <th><a href="edit-sp.php?id=<?php echo $i[0];?>"><i class="far fa-edit"></i></a></th>
                    <th><a href="delete-sp.php?id=<?php echo $i[0];?>"><i class="far fa-trash-alt"></i></a></th>
                
              </tr>
              <?php
                        }
                    ?>
            </tbody>
        
          </table>
        </div>

        
    <form method="POST" action="create-sp.php">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </form>
<?php
    include('footer-sp.php');
?>
