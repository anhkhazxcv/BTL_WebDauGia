<?php
    include('header.php');
    // $result = mysqli_query($conn,"SELECT * FROM cars");
    // if(mysqli_num_rows($result) > 0){
    //     $car = mysqli_fetch_all($result);
    // }else echo 'Không đổ ra dữ liệu';
?> 

<div class="panel-body mt-3">
          
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>Mã phương tiện</th>
			<th>Biển số xe</th>
			<th>Model</th>
	   	<th>Năm sản xuất</th>
      <th>Kiểu oto</th>
      <th>Giá cho thuê theo ngày</th>
      <th>Giá cho thuê theo tuần</th>
      <th>Trạng thái</th>
			<th width="60px">Sửa</th>
			<th width="60px">Xóa</th>
      <th width="60px">Xem chi tiết</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td><button class="btn btn-warning" >Edit</button></td>
        <td><button class="btn btn-danger">Delete</button></td>
        <td><button class="btn btn-warning">Details</button></td>
        
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>





<?php
    include('footer.php');
?>
