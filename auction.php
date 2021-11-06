<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "webdaugia");
if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}
if (isset($_SESSION['uname'])) {
    $result = mysqli_query($conn,"SELECT * FROM product");
    if(mysqli_num_rows($result) > 0){
        $quanlysp = mysqli_fetch_all($result);
        $pdId = $quanlysp[0];
    }else echo 'Không đổ ra dữ liệu';
?>
<!doctype html>
<html lang="en">

<head>
     <title>Đấu giá</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
     <style>
          a {
               color: #c00;
          }

          .page-content-wrapper .page-content {
               margin-left: 0;
               padding: 0;
          }

          .page-content-wrapper .page-content {
               padding: 0 !important;
          }

          .newest-auction {
               margin: 0;
               padding: 0;
               list-style: none;
          }

          .newest-auction>li {
               margin: 0 0 20px;
               width: 100%;
          }

          .newest-auction>li>img {
               float: left;
               width: 200px;
               height: 130px;
          }

          .newest-auction>li>.info {
               overflow: hidden;
               background-color: #f5f5f5;
               position: relative;
               height: 130px;
               padding-top: 7px;
               padding-right: 40px;
               text-align: left;
          }

          .newest-auction>li>.info>.title {
               font-size: 17pt;
               margin: 0;
               color: #c00;
          }

          .newest-auction>li>.info>.desc {
               font-size: 12pt;
               font-weight: 300;
               margin: 0;
          }

          .newest-auction>li>.info a {
               margin: 0 10px;
          }

          .newest-auction>li>.info>.price {
               font-size: 17pt;
               margin: 0;
               color: #c00;
          }

          .newest-auction>li>.info>.year {
               margin: 0;
          }

          .newest-auction>li>.info>.milage {
               margin: 0;
          }

          .newest-auction>li>.info>ul {
               display: table;
               width: 100%;
               margin: 10px 0 0;
               padding: 0;
               list-style: none;
               text-align: center;
          }

          .newest-auction>li>.info>ul>li {
               display: table-cell;
               font-size: 11pt;
               font-weight: 300;
               padding: 3px 0 3px 10px;
               text-align: left;
               color: #1e1e1e;
               border-right: 1px solid #fff;
          }

          .newest-auction>li>.info>ul>li>small {
               margin-left: 4px;
               color: #c00;
          }

          .newest-auction>li>.info>.title,
          .newest-auction>li>.info>.desc {
               padding: 0 10px;
          }

          .newest-auction>li>.info>.price {
               position: absolute;
               top: 6px;
               right: 10px;
          }

          .newest-auction>li>.info>.year {
               font-size: 11pt;
               position: absolute;
               top: 34px;
               right: 10px;
          }

          .newest-auction>li>.info>.milage {
               position: absolute;
               top: 55px;
               right: 10px;
          }

          .newest-auction>li>.info>ul {
               position: absolute;
               bottom: 0;
               left: 0;
               border-top: 1px solid #fff;
               background-color: #d9d9d9;
          }

          @media only screen and (max-width: 768px) {
               .newest-auction>li>img {
                    width: 100%;
                    height: 100%;
               }

               .newest-auction>li>.info>.title {
                    font-size: 14pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.desc {
                    font-size: 12pt;
                    font-weight: 300;
                    margin: 0;
               }

               .newest-auction>li>.info a {
                    font-size: 12pt;
                    margin: 0 10px;
               }

               .newest-auction>li>.info>.price {
                    font-size: 14pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.year {
                    position: absolute;
                    top: 27px;
                    font-size: 12pt;
               }

               .newest-auction>li>.info>.milage {
                    position: absolute;
                    top: 50px;
                    font-size: 12pt;
               }

               .newest-auction>li>.info>ul>li {
                    float: right;
                    display: table-cell;
                    font-size: 11pt;
                    font-weight: 300;
                    padding: 3px 0 3px 10px;
                    text-align: left;
                    color: #1e1e1e;
                    border-right: 1px solid #fff;
               }
          }

          @media only screen and (max-width: 480px) {
               .newest-auction>li>img {
                    width: 100%;
                    height: 100%;
               }

               .newest-auction>li>.info>.title {
                    font-size: 12pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.desc {
                    font-size: 10pt;
                    font-weight: 300;
                    margin: 0;
               }

               .newest-auction>li>.info a {
                    font-size: 10pt;
                    margin: 0 10px;
               }

               .newest-auction>li>.info>.price {
                    font-size: 12pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.year {
                    position: absolute;
                    top: 25px;
                    font-size: 10pt;
                    margin: 0;
               }

               .newest-auction>li>.info>.milage {
                    position: absolute;
                    top: 45px;
                    font-size: 10pt;
                    margin: 0;
               }

               .newest-auction>li>.info>ul>li {
                    display: table-cell;
                    font-size: 10pt;
                    font-weight: 300;
                    padding: 3px 0 3px 10px;
                    text-align: left;
                    color: #1e1e1e;
                    border-right: 1px solid #fff;
                    float: right;
               }
          }

          @media only screen and (max-width: 320px) {
               .newest-auction>li>img {
                    width: 100%;
                    height: 100%;
               }

               .newest-auction>li>.info>.title {
                    font-size: 17pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.desc {
                    font-size: 12pt;
                    font-weight: 300;
                    margin: 0;
               }

               .newest-auction>li>.info a {
                    margin: 0 10px;
               }

               .newest-auction>li>.info>.price {
                    font-size: 17pt;
                    margin: 0;
                    color: #c00;
               }

               .newest-auction>li>.info>.year {
                    margin: 0;
               }

               .newest-auction>li>.info>.milage {
                    margin: 0;
               }
          }

          .btn-bid {
               padding-left: 0 !important;
               text-align: center !important;
               vertical-align: middle;
               color: #fff !important;
               border-right: none !important;
               background-color: #c00;
               border-radius: 0;
               float: right;
          }

          .btn-bid:hover {
               background-color: #333 !important;
          }
     </style>
     <div>
          <ul class="ul">
               <li style="float: left;"><img src="images/logo2.png" height="120px" width="auto" vspace="1%"
                         hspace="5%" /></li>
               <li></li>

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
               <li><a class="active" href="home.php">Trang Chủ</a></li>
               <li><a href="about.php">Giới Thiệu</a></li>
               <li><a href="./product/index-sp.php">Sản Phẩm</a></li>
               <!-- <li><a href="#">Danh sách đầu giá thành công</a></li> -->
               <li><a href="logout.php">Đăng xuất</a></li>

          </ul>
     </div>




     <h1>
          <p align="center">Chương Trình Đấu Giá Online</p>
     </h1>
     <p align="center">Tự do bán / đấu giá bao nhiêu sản phẩm mà người dùng muốn.</p>
     <p align="center">Tiêu chuẩn cao nhất về quyền riêng tư của khách hàng chúng tôi</p>
     <p align="center">Thông tin sản phẩm và giá cả chính xác</p>




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
               <img src="images/logo1.jpg" alt="ảnh">
          </div>

     </div>

     <div class="row">
          <?php
                foreach($quanlysp as $i){
                    if($i[8] == "Running"){
            ?>
          <div class="col-12">
               <ul class="newest-auction">
                    <li>
                         <img src="<?php echo  $i[2]; ?>" alt="">
                         <div class="info">
                              <h2 class="title"><?php echo  $i[3]; ?></h2>
                              <p class="desc"><?php echo  $i[4]; ?></p>
                              <h2 class="price">Current Price: <?php echo  $i[5]; ?> $$$</h2>
                              <ul >
                                   <li>Start auction day:<?php echo  $i[6]; ?></li>
                                   <li>Stop auction: <?php echo  $i[7]; ?> </li>
                                   <!-- <li>06<br>Bid No.</li> -->
                                   <li class="btn btn-bid" style = "width: 200px">BID NOW</li>
                              </ul>
                         </div>
                    </li>
               </ul>
          </div>
          <?php
        }}
                    ?>
     </div>

     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


     <?php 
include('footer.php');
}else{
     header("Location: index.php");
     exit();
}
 ?>