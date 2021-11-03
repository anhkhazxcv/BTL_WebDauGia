<?php
    include('header.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM user1 WHERE id = '$id'");
        if(mysqli_num_rows($result)==1){
            $user = mysqli_fetch_array($result);
            $fname = $user['fname'];
            $lname = $cars['lname'];
            $uid = $cars['uid'];
            $pwd = $cars['pwd'];
            $email = $cars['email'];
            $mobile = $cars['mobile'];
            $dob = $cars['dob'];
            $address= $cars['address'];
        }
    }
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob  = $_POST['dob '];
        $address  = $_POST['address '];
        mysqli_query($conn, "UPDATE user1 SET fname='$fname', lname='$lname', uid='$uid', pwd='$pwd',email ='$demail', mobile='$mobile', mobile='$mobile', WHERE uid='$id'");
        header("location: index.php");
    }
?>
    <div class="container">
    <form method="POST">
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $id?>" readonly>
        </div>
        <div class="form-group">
            <label>Họ tên đệm</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname?>" >
        </div>
        <div class="form-group">
            <label>tên</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname?>">
        </div>
        <div class="form-group">
            <label>Tên tài khoản</label>
            <input type="text" class="form-control" name="uid" value="<?php echo $uid?>">
        </div>
        <div class="form-group">
            <label>mật khẩu</label>
            <input type="text" class="form-control" name="pwd" value="<?php echo $pwd?>">
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email?>">
        </div>
        <div class="form-group">
            <label>số điện thoại</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $mobile?>">
        </div>
        <div class="form-group">
            <label>ngày sinh</label>
            <input type="text" class="form-control" name="dob" value="<?php echo $dob?>">
        </div>    
        <div class="form-group">
            <label>địa chỉ</label>
            <input type="text" class="form-control" name="adress" value="<?php echo $address?>">
        </div>    
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
</div>

