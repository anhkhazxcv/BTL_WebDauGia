<?php
    include('headerad.php');
    
    
    if(isset($_GET['uid'])){
        $id = $_GET['uid'];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE `uid` = '$id'");
        if(mysqli_num_rows($result)==1){
            $user = mysqli_fetch_array($result);
            $fname = $user['fname'];
            $lname = $user['lname'];
            $uid = $user['uid'];
            $pwd = $user['pwd'];
            $email = $user['email'];
            $mobile = $user['mobile'];
            $dob = $user['dob'];
            $address= $user['address'];
        }
    }
    if(isset($_POST['update'])){
        //var_dump($_POST);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob  = $_POST['dob'];
        $address  = $_POST['address'];
        //var_dump("UPDATE user1 SET `fname`='$fname', `lname`='$lname', `uid`='$uid', `pwd`='$pwd',`email` ='$email', `mobile`='$mobile', `dob` = '$dob', `address` = '$address' WHERE id='$id'");
        mysqli_query($conn, "UPDATE user1 SET `fname`='$fname', `lname`='$lname', `uid`='$uid', `pwd`='$pwd',`email` ='$email', `mobile`='$mobile', `dob` = '$dob', `address` = '$address' WHERE uid='$uid'");
        header("location: admin.php");
        
    }
?>
    <div class="container">
    <form method="POST">
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
            <input type="text" class="form-control" name="address" value="<?php echo $address?>">
        </div>    
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
</div>

<?php
    include('footerad.php');

?>