<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
?>
<html>
    <head>
    <link rel="stylesheet" href="body.css">
    </head>
    <div class="pagee">
        <a href="pageadmin.php">ข้อมูลผู้ใช้</a>
        <a href="durable.php">ครุภัณฑ์</a>
        <a href="datauser.php">ข้อมูลส่วนตัว</a>
        <a href="logout.php">login</a>
        </div>
        </table>
    </dody>
</html>