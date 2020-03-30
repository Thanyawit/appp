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
        <div class = "a" style="margin-left:25%;padding:1px 16px;height:1000px;">
        <table border="1">
        <tr>
            <td>รหัสคครุภัณฑ์</td>
            <td>ชื่อครุภัณฑ์</td>
            <td>วัน/เดือน/ปี</td>
            <td>สถานะ</td>
        </tr>
        <?php 
        require('server.php');

        $sql = "SELECT * FROM datadurable";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$row["durable_ID"] .  " </td> ";
            echo "<td>".$row["durable_name"] .  "</td> "; 
            echo "<td>" .$row["durable_day"] .  "</td> "; 
            echo "<td>".$row["durablestatus"] .  "</td> "; 
            echo "</tr>";
            }
        ?>
    </table>    
    </div>
    </body>
</html>