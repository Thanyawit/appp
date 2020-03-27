<?php
session_start();
//connect
require("server.php");

$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
//select
$sql = "SELECT * FROM datauser WHERE user='$user' and user_pass='$pass'";
//execute
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
}
?>
<html>
    <head>
    <link rel="stylesheet" href="body.css">
    </head>
<body>
<table border = "1">
    <form>
        <tr>
            <td>user</td>
            <td><?php echo $row['user']; ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td><?php echo $row['user_pass']; ?></td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><?php echo $row['fname_user']; echo " "; echo $row['lname_user']; ?></td>
        </tr>
        <tr>
            <td>เบอร์</td>
            <td><?php echo $row['user_tell']; ?></td>
        </tr>

    </form>
</table>
<?php
if($row['status_ID'] == "2"){
    echo "<form action='page.php'>";
    echo "<input type = 'submit' name = 'submit' value = 'ย้อนกลับ'>";
    echo "</form>";
}else{
    echo "<form action='pageadmin.php'>";
    echo "<input type = 'submit' name = 'submit' value = 'ย้อนกลับ'>";
    echo "</form>";
}
?>
</body>
</html>