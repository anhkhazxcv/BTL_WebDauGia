<!DOCTYPE html>
<html lang="en">
<head>
<title>a</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
	.row::after 
	{
    	content: "";
    	clear: both;
    	display: block;
	}
	[class*="col-"] 
	{
    	float: left;
   		padding: 15px;
	}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
	.menu 
	{
    	color: #ffffff;
    	font: normal normal normal 14px/1 FontAwesome;
    	font-size: inherit;
    	text-rendering: auto;
	}
</style>
<script type="text/javascript">
    function getTimeRemaining(endtime){
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor( (t/1000) % 60 );
      var minutes = Math.floor( (t/1000/60) % 60 );
      var hours = Math.floor( (t/(1000*60*60)) % 24 );
      var days = Math.floor( t/(1000*60*60*24) );
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }
    function initializeClock(id, endtime){
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

        var timeinterval = setInterval(function(){
      var t = getTimeRemaining(endtime);
      clock.innerHTML =  t.days + ':' +
                       t.hours
                       + ':' + t.minutes + ':' +
                       t.seconds;
      if(t.total<=0){
        clearInterval(timeinterval);}     
      },1000);
      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = t.hours;
      minutesSpan.innerHTML = t.minutes;
      secondsSpan.innerHTML = t.seconds;
    }
    
        
    

  </script>

</head>
<body>

<div>
<ul class="ul">
	<li style="float: left;"><img src="images/logo2.png" height="120px" width="auto" vspace="1%" hspace="5%" /></li>
			<a href="register_form.php">
			<li class="li"><button class="buttonp" style="background-color: blue;">Đăng Kí</button></li></a>
			<a href="login.php"><li class="li"><button class="buttonp">Đăng Nhập</button></li></a>
			
</ul>
</div>

<div id="div2">
  <div id="slider">
    <img src="images/pic5.jpg">
    <img src="images/pic6.jpg">
    <img src="images/pic7.jpg">
  <img src="images/pic1.jpg">
   </div>
</div>

<div>
<ul class="ul2">
  <li><a class="active" href="bidbuyuse.php">Trang Chủ</a></li>
  <li><a href="about.php">Giới Thiệu</a></li>
  <li><a href="contactus.php">Liên Hệ</a></li>
  <li><a href="member.php">Sản Phẩm</a></li>
  <li><a href="register_form.php">Đăng Kí</a></li>
  <li><a href="winners.php">Chiến Thắng</a></li>
 
</ul>
</div>
  



<h1><p align="center">Chương Trình Đấu Giá Online</p></h1>
<p align="center" >Tự do bán / đấu giá bao nhiêu sản phẩm mà người dùng muốn.</p> 
<p align="center" >Tiêu chuẩn cao nhất về quyền riêng tư của khách hàng chúng tôi</p>
<p align="center" >Thông tin sản phẩm và giá cả chính xác</p>

<a href="register_form.php"><button type="button" class="button">Đăng Kí Ngay</button></a>


<div class="row">

<div class="col-5 menu">
<div class="button1">
<ul>
<li>Lựa chọn đấu giá / Giá thầu.</li>
<li>Lời khuyên của các chuyên gia.</li>
<li>Bán sản phẩm của bạn.</li>
<li>Không có giới hạn về bán / giá thầu.</li>
<li>Nhận và giao hàng dễ dàng.</li>
</ul>
</div>
</div>
<div class="col-4">
<img src="" alt="ảnh">
</div>

</div>
          

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="position: relative; left: 0; top: 0;">
  <img src="images/auction.jpg" style="position: relative; top: 0; left: 0;width:100%;height:300px"/>
  <img src="images/mobile.png" style="position: absolute; bottom: 180px; left: 70px;"/>
</div>


  
    <h1 align="center">---- Đấu Giá Online ----</h1>
  


<?php
error_reporting(0);
include 'config.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
  if($row['status']==1)
{
?>	<div class="spacing">
	<div class="col-3">
    <table style="border:1px solid black;">
    	<tr>
    		<th>
    		<h3><?php echo $row['pname']; ?></h3>
        	</th>
        </tr>

        <tr>
        	<td>
            <h3>MRP:<?php echo $row['currentprice']; ?></h3><br>
            <img  src="check.php?image_id=<?php echo $row["pid"]; ?>" width="300pd" height="250pd"><br>
            <h4>Auction id:<?php echo $row['pid']; ?></h4>
            <h5 align="right"><div id='clockdi<?php echo $row["pid"]?>'></div></h5>
            </td>
        </tr>

        <tr bgcolor="#3d4d65">
        <td style="text-align:center" padding:30px;>      
            <a href="login.php"><h3><font color="#fff">BID</font></h3></a>
        </td>
        </tr>
   	</table>
   	</div>
   	</div>
<?php
echo  "<script type='text/javascript'>";
echo 'var a='.json_encode($row['enddate']).';';
echo 'initializeClock("clockdi'.$row['pid'].'",a);';
echo "</script>";
}
}
?>

<div style=" padding-bottom: 15px">
  <div class="row">
      	<div class="col-6">
        	
          		<h4><u>QUY TẮC ĐẤU GIÁ TRỰC TUYẾN</u></h4>
          		
            		<ul>
              		<li>Cho phép một tài khoản người dùng cho mỗi người / Địa chỉ IP / Nhà</li>
              		<li>Đấu thầu nhóm hoàn toàn không được phép</li>
              		<li>Không sử dụng bất kỳ phần mềm đấu thầu của bên thứ 3 nào của bot để đấu thầu</li>
              		<li>Không cho phép sử dụng ID người dùng gây hiểu lầm - Vui lòng không thử thủ thuật của bạn</li>
              		<li>Vi phạm các quy tắc sẽ dẫn đến việc tạm ngưng tài khoản của bạn</li>
            		</ul>
           			
      	</div>

      	
    
  </div>

<footer>
<br>
<a href="bidbuyuse.php"><font color="#fff">Trang Chủ</font></a> 
| <a href="about.php"><font color="#fff">Hoạt Động </font></a>
| <a href="login.php"><font color="#fff">Sản Phẩm Nổi Bật</font></a>
| <a href="contactus.php"><font color="#fff">Liên hệ</font></a>
<h5>Nguyễn Văn Khá.
</h5>
</footer>

</body>
</html>





