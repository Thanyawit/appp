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
        <a href="pageadmin.php">ข้อมูลผู้ใช้</a>
        <a href="durable.php">ครุภัณฑ์</a>
        <a href="datauser.php">ข้อมูลส่วนตัว</a>
        <a href="logout.php">login</a>
        </div>
        </table>
    <div class="abcd">
    <form action="adddurable.php">
    <h2>เลขครุภัณฑ์  <input type="text" name="durable_ID" required></h2>
    <h2>ชื่อครุภัณฑ์  <input type="text" name="durable_name" required></h2>
    <h2>วันที่ครุภัณฑ์เข้า  <input type="date" name="durable_day" required></h2>
    <h2>สถานะ  <select type = "text" name="durablestatus">
    <option value="">กรุณาเลือก</option>
    <option value="ใช้งานได้">ใช้งานได้</option>
    <option value="ชำรุด">ชำรุด</option>

    </select></h2>
    <input type="submit" name="submit" value="add">
    </form>
    </div>
    <table border='1' align='center' width='1000'>
        <tr align='center' bgcolor='#57000'>
        <td>รหัสครุภัณฑ์</td>
        <td>ชื่อครุภัณฑ์</td>
        <td>วันที่ครุภัณฑ์เข้า</td>
        <td>สถานะ</td>
        <td>แก้ไข</td>
        <td>ลบ</td>
        </tr>


<?php
require('server.php');
$sql = "SELECT * FROM datadurable ";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
if($row["durablestatus"] == "ใช้งานได้"){
    echo "<form action = 'updatedurable.php'>";
    echo "<tr>";
    echo "<td><input type='text' name='durable_ID' value = " .$row["durable_ID"] .  "></td> ";
    echo "<td><input type='text' name='durable_name' value = ".$row["durable_name"] .  "></td> "; 
    echo "<td><input type='date' name='durable_day' value = " .$row["durable_day"] .  "></td> "; 
    echo "<td><select type = 'text' name='durablestatus'>
                <option value=''>".$row["durablestatus"] ."</option>
                <option value='ชำรุด'>ชำรุด</option> </td> "; 
    echo "<td><input type = 'submit' name = 'c' value = 'edit' ></td>";
    echo "<td><input type = 'submit' name = 'c' value = 'del' ></td>";
    echo "</tr>";
    echo "</form>";
    }


else{
    echo "<form action = 'updatedurable.php'>";
    echo "<tr>";
    echo "<td><input type='text' name='durable_ID' value = " .$row["durable_ID"] .  "></td> ";
    echo "<td><input type='text' name='durable_name' value = ".$row["durable_name"] .  "></td> "; 
    echo "<td><input type='date' name='durable_day' value = " .$row["durable_day"] .  "></td> "; 
    echo "<td><select type = 'text' name='durablestatus'>
                <option value=''>".$row["durablestatus"] ."</option>
                <option value='ใช้งานได้'>ใช้งานได้</option> </td> "; 
    echo "<td><input type = 'submit' name = 'c' value = 'edit' ></td>";
    echo "<td><input type = 'submit' name = 'c' value = 'del' ></td>";
    echo "</tr>";
    echo "</form>";

}
}
?>
</table>
    </dody>
</html>
