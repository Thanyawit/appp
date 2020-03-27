<?php
session_start();
require('server.php');
$user = $_GET["user"];
$fname = $_GET["fname_user"];
$lname = $_GET["lname_user"];
$pass = $_GET["user_pass"];
$tell = $_GET["user_tell"];
$a = $_GET['a'];

if($a == 'edit'){
$sql = "UPDATE datauser 
SET fname_user = '$fname', lname_user = '$lname', user_pass = '$pass', user_tell = '$tell'
WHERE user = '$user'";
if (mysqli_query($con, $sql)) {
    echo "Update record successfully";
    header("Location:pageadmin.php");
} else {
    echo "Error: ";
}
}

else if($a == 'del'){
$sql = "DELETE FROM datauser WHERE user = '$user'";
if (mysqli_query($con, $sql)) {
    echo "Delete";
    header("Location:pageadmin.php");
} else {
    echo "Error: ";
}
}