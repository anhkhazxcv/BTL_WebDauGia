
<?php
session_start();
//redirection page link
header("location:index.php");
$con=mysqli_connect("localhost","root","","webdaugia");

if($con){
  echo "";
}
else{
	echo "connection failed";
}


if(isset($_POST['register'])){

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$cn=$_POST['cname'];
$e=$_POST['email'];
$cn=$_POST['phone'];
$ps=$_POST['password'];



$sel="SELECT * FROM users WHERE email ='$e'";

$r=$con->query($sel);

if($r->num_rows> 0){
	echo "email tồn tại";
}

else {
$ins="INSERT INTO users SET fname='$fn',lname = '$ln', uid = '$cn',pwd='$ps', email='$e', mobile='$phone',dob='$', address = ' ', admin = ''";
$con->query($ins);
 
}
}


?>

