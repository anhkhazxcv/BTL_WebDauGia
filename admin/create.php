<?php
    include('headerad.php');
    $result = mysqli_query($conn,"SELECT * FROM user1");
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_all($result);
    }else echo 'Không đổ ra dữ liệu';
    var_dump('$user');
    if(isset($_POST['save'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        mysqli_query($conn, "INSERT INTO user1 (fname, lname, uid, pwd, email, mobile, dob, address) VALUES ('$fname','$lname','$uid','$pwd','$email','$mobile','$dob','$address') ");
        header("location:admin.php");
    }
    
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" readonly>
    </div>  
        <div class="form-group">
            <label>Họ tên đệm</label>
            <input type="text" class="form-control" name="fname" >
        </div>
        <div class="form-group">
            <label>Tên</label>
            <input type="text" class="form-control" name="lname" >
        </div>
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input type="text" class="form-control" name="uid" >
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="text" class="form-control" name="pwd" >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" >
        </div>
        <div class="form-group">
            <label>Số Điện thoại</label>
            <input type="text" class="form-control" name="mobile" >
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="text" class="form-control" name="dob" >
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="save">Save</button>
        </div>
    </form>
</div>

<?php
    header('footerad.php');

?>