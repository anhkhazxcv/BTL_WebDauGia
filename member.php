<?php
include 'config.php';
session_start();
if(!isset($_SESSION['uname']) || !isset($_SESSION['pwd'])){
  header('location: login.php');
}




    echo "<h1>".$_SESSION['uname']."</h1>";
    
?>
<!Doctype html>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-image:url("images/pic11.jpg");
	}
	.mem_but {
    background-color: #37F7E9;
    border: none;
    color: white;
    padding: 10px 40px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;

}
.div{
	display: block;
	border:none;
}
</style>
	<title>Thành Viên</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="cssfile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header style="text-align:left;">
<a href="logout.php" align="right" style="color:white; text-decoration:none;">Đăng Xuất</a> 
</header>


	
	
<br>
<br>

<div class="div">
<h1 style="font-family:Times New Roman, Times, serif;color: white; font-weight: bold;
" align="center"> Đấu Giá Sản Phẩm</h1>
<center><button  class="mem_but" ><a href="bidtest.php" style="text-decoration:none; color:white;">Đấu Giá</a></button></center>

</div >
<div  class="div">
<h1 style="font-family:Times New Roman, Times, serif ; color: white; font-weight: bold;
" align="center"> Bán Sản Phẩm</h1>
<center><button  class="mem_but"><a href="sell12.php" style="text-decoration:none; color: white; ">Bán</a></button></center>
</div>

</ul>
<footer style="position: fixed; bottom:0; width: 100%;">
<br>
<a href="bidbuyuse.php">Trang Chủ</a>
|<a href="winners.php"> Người Thắng </a>
|<a href="about.php"> Giới Thiệu </a>
|<a href="contactus.php">Liên Hệ</a>
<h5>Nguyễn Văn Khá</h5>
</footer>




</body>
</html>