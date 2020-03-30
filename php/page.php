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
    <body>
    <div class="pagee">
        <a href="page.php">หน้าหลัก</a>
        <a href="page1.php">ตรวจนับครุภัณฑ์</a>
        <a href="datauser.php">ข้อมูลส่วนตัว</a>
        <a href="logout.php">login</a>
        </div>
        <div class = "a"style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>ครุภัณฑ์</h2>
  <h3>เทคโนโลยีสารสนเทศและการสื่อสาร</h3>
</div>
    </body>
</html>