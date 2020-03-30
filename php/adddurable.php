<?php
require("server.php");
$dID = $_REQUEST['durable_ID'];
$dname = $_REQUEST['durable_name'];
$ddate = $_REQUEST['durable_day'];
$dstatus = $_REQUEST['durablestatus'];

$sql = "INSERT INTO datadurable (durable_ID, durable_name, durable_day, durablestatus) VALUES ";
$sql .="('". $dID ."','". $dname ."','". $ddate ."','". $dstatus ."')";
if (mysqli_query($con, $sql)){
    echo "New";
    header("Location:durable.php");
}else{
    echo "Error";
}
mysqli_close($con);
?>