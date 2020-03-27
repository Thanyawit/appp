<?php
session_start();
//connect
require("server.php");

$user = $_REQUEST['user'];
$pass = $_REQUEST['user_pass'];
//select
$sql = "SELECT * FROM datauser WHERE user='$user' and user_pass='$pass'";
//execute
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $_REQUEST['user'];
    $_SESSION['pass'] = $_REQUEST['user_pass'];
    $_SESSION['status'] = $row['status_ID'];
        if($_SESSION['status']=="1"){
        header("Location:pageadmin.php");
    }
        if($_SESSION['status']=="2"){
        header("Location:page.php");
    }
}

else{
    echo "<script>";
         echo "alert('รหัสผิด !!!');";
         echo "window.location='login.php';";
        echo "</script>";
}
?>