<?php
session_start();
include 'config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<style>
.error {color: #FF0000;} 
</style>
<title></title>

</head>

<body background="images/pic11.jpg">
<?php

$username = $password= "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username && $password)
	{
			$sql = "SELECT * FROM users WHERE uid='$username' AND pwd='$password'";
			$result = mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				$_SESSION['uname'] = $username;
				$_SESSION['pwd'] = $password;
				header('location: home.php');
			}
			else{
			?>
			<script>
				alert("Nếu bạn chưa có, hãy tạo tài khoản!");
				window.location="index.php";
			</script>
			<?php 
			}

	}
}

?>
<div id="login">
<h2>Login</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<br><input type="text" name="username" placeholder="UserName" id="text"><span class="error">*</span><br>
<br><input type="password" name="password" placeholder="Password" id="text"><span class="error">*</span><br><br>
<input type="submit" class="buttonp">

</form>
<a href="register.php">
    <button class="buttonp" style="background-color: blue;">Đăng Kí</button>
</a>
</div>


</body>
</html>
