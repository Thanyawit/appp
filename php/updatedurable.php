<?php
session_start();
require('server.php');
$durableID = $_GET["durable_ID"];
$durablename = $_GET["durable_name"];
$durableday = $_GET["durable_day"];
$durablestatus = $_GET["durablestatus"];
$c = $_GET['c'];

if ($c == 'edit'){
    $sql = "UPDATE datadurable
    SET durable_ID = '$durableID' , durable_name = '$durablename' , durable_day = '$durableday' , durablestatus = '$durablestatus'
    WHERE  durable_ID = '$durableID'";
        if (mysqli_query($con, $sql)) {
          echo "<script>";
            echo "alert('update');";
            echo "window.location='durable.php';";
           echo "</script>";
        }else {
            echo "Error: ";
        }
    }

else{
    $sql = "DELETE FROM datadurable WHERE durable_ID = '$durableID'";
    if (mysqli_query($con, $sql)) {
        echo "<script>";
            echo "alert('delete');";
            echo "window.location='durable.php';";
           echo "</script>";
    }else {
    echo "Error: ";
    }
}