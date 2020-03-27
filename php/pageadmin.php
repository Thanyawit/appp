<html>
    <head>
    <link href="body.css" rel="stylesheet" type="text/css">
    </head>
    <dody>
        <table border='1' align='center' width='1000'>
        <tr align='center' bgcolor='#57000'>
        <td>user</td>
        <td>ชื่อจริง</td>
        <td>นามสกุล</td>
        <td>รหัส</td>
        <td>เบอร์</td>
        <td>สถานะ</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
        </tr>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
require('server.php');

$datauser = "SELECT * FROM datauser INNER JOIN statususer ON datauser.status_ID = statususer.status_ID";
$result = mysqli_query($con,$datauser);


while($row = mysqli_fetch_assoc($result)){
    if($row["status_name"]=="user"){
    echo "<form action = 'update.php'>";
    echo "<tr>";
    echo "<td><input type='text' name='user' value = " .$row["user"] .  " readonly></td> ";
    echo "<td><input type='text' name='fname_user' value = ".$row["fname_user"] .  "></td> "; 
    echo "<td><input type='text' name='lname_user' value = " .$row["lname_user"] .  "></td> "; 
    echo "<td><input type='text' name='user_pass' value = ".$row["user_pass"] .  "></td> "; 
    echo "<td><input type='text' name='user_tell' value = ".$row["user_tell"] .  "></td> ";
    echo "<td>".$row["status_name"] ."</td> ";  
    echo "<td><input type = 'submit' name = 'a' value = 'edit' ></td>";
    echo "<td><input type = 'submit' name = 'a' value = 'del' ></td>";
    echo "</tr>";
    echo "</form>";
    }
}
?>
<div class="pagee">
        <a href="pageadmin.php">ข้อมูลผู้ใช้</a>
        <a href="durable.php">ครุภัณฑ์</a>
        <a href="datauser.php">ข้อมูลส่วนตัว</a>
        <a href="logout.php">login</a>
        </div>
        </table>
    </dody>
</html>