<?php
session_start();
if (isset($_SESSION['uname'])) {
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

          <div>
          <ul class="ul">
            <li style="float: left;"><img src="images/logo2.png" height="120px" width="auto" vspace="1%" hspace="5%" /></li>
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
            



          <h1><p align="center">Chương Trình Đấu Giá Online</p></h1>
          <p align="center" >Tự do bán / đấu giá bao nhiêu sản phẩm mà người dùng muốn.</p> 
          <p align="center" >Tiêu chuẩn cao nhất về quyền riêng tư của khách hàng chúng tôi</p>
          <p align="center" >Thông tin sản phẩm và giá cả chính xác</p>

          <a href="auction.php"><button type="button" class="button">Tham gia đấu giá ngay</button></a>


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







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>