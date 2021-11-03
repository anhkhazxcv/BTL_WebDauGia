<?php
include('../header-sp.php');
include('../config.php');
$result = mysqli_query($conn,"SELECT * FROM user1");
if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_all($result);
}else echo 'Không đổ ra dữ liệu';

?>

<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Họ tên đệm</th>
      <th scope="col">Tên</th>
      <th scope="col">Tên đăng nhập</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Emai</th>    
      <th scope="col">Ngày sinh</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">xem</th>
      <th scope="col">sửa</th>
      <th scope="col">xóa</th>
    </tr>
  </thead>
  <tbody>
            <?php
                foreach($user as $i){
            ?>
            <tr>
                <th><?php echo $i[0]; ?></th>
                <th><?php echo $i[1]; ?></th>
                <th><?php echo $i[2]; ?></th>
                <th><?php echo $i[3]; ?></th>
                <th><?php echo $i[4]; ?></th>
                <th><?php echo $i[5]; ?></th>
                <th><?php echo $i[6]; ?></th>
                <th><?php echo $i[7]; ?></th>
                <th><?php echo $i[8]; ?></th>
                <th><a href="details.php?id=<?php echo $i[3];?>"><i class="fas fa-eye"></i></a></th>
                <th><a href="edit.php?id=<?php echo $i[3];?>"><i class="far fa-edit"></i></a></th>
                <th><a href="delete.php?id=<?php echo $i[3];?>"><i class="far fa-trash-alt"></i></a></th>
                
            </tr>
            <?php
                }
            ?>
        </tbody>
</table>
<form method="POST" action="create.php">
        <button type="submit" class="btn btn-primary">New</button>
    </form>