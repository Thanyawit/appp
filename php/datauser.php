<?php
session_start();
//connect
require("server.php");

$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
//select
$sql = "SELECT * FROM datauser WHERE user='$user'";
//execute
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
}
?>
<html>
    <head>
    <link rel="stylesheet" href="body.css">
    <script>
    function confirmeiei() {
        return confirm("Are you sure?");
    }
    </script>

    </head>
<body>
<table border = "1">
    <form action="update.php">
        <tr>
            <td>user</td>
            <td><?php echo   "<input type = 'text' name = 'user' value = " .$row['user'] . " readonly>"; ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td><?php echo "<input type = 'password' name = 'user_pass' value = " .$row['user_pass'] . ">"; ?></td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><?php  echo "<input type = 'text' name = 'fname_user' value = " .$row['fname_user'] . ">"; echo " "; echo  "<input type = 'text' name = 'lname_user' value = " .$row['lname_user'] . ">";?></td>
        </tr>
        <tr>
            <td>เบอร์</td>
            <td><?php echo "<input type = 'text' name = 'user_tell' value = " .$row['user_tell'] . ">"; ?></td>
        </tr>
        <tr>
            <td><?php echo "<td><input type = 'submit' name = 'b' value = 'edit' onClick='return confirmeiei()'></td>";?></td>
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