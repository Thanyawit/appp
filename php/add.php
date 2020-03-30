<?php
require("server.php");
$u = $_REQUEST['user'];
$ufname = $_REQUEST['fname_user'];
$ulname = $_REQUEST['lname_user'];
$upass = $_REQUEST['user_pass'];
$utell = $_REQUEST['user_tell'];
$status = "2";

//เช็ค user ผู้สมัครว่าซ้ำไหม
$check = "SELECT * FROM datauser  WHERE  user = '$u'";
$result = mysqli_query($con,$check) or die(mysqli_error($result));
$num=mysqli_num_rows($result); 
    if($num > 0)   		
    {
         echo "<script>";
         echo "alert('รายชื่อนี้มีการลงทะเบียนไปแล้ว !!!');";
         echo "window.location='register.html';";
        echo "</script>";
        

    }else{

$sql = "INSERT INTO datauser (user, fname_user, lname_user, user_pass, user_tell, status_ID) VALUES ";
$sql .= "('". $u ."','". $ufname ."','". $ulname ."','". $upass ."','". $utell ."','". $status ."')";
if (mysqli_query($con, $sql)){
    echo "<script>";
    echo "alert('สำเร็จการลงทะเบียน');";
    echo "window.location='login.php';";
   echo "</script>";
}else{
    echo "Error";
}
mysqli_close($con);
}?>