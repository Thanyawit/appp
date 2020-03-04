<?php
// Start SESSION
session_start();

// 1. Connect
require("sv.php");

//checkLogin.php

$user = $_REQUEST['username'];
$pass = $_REQUEST['pass'];
echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM data WHERE username='$user' AND pass='$pass'";

echo $sql;

// 3. Execute SQL
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);

    $_SESSION['user'] = $row['username'];
    $_SESSION['e'] = $row['email'];


    header("Location:ei.html");
}
else {
    header("Location:log.html");
}


?>