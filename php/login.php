<?php
session_start();
?>
<html>
<head>
    <title>ครุภัณฑ์</title>
    <link rel="stylesheet" href="body.css">
</head>
<boby>
    <div class = "login">
    <div class = "loginn">
    <h1>Login</h1>
    <form action="loginserver.php" method="POST">
    <input type="text" name="user" placeholder="Username" required/><br>
    <input type="password" name="user_pass" placeholder="Password" required/><br>
    <input type="submit" name="submit" value="เข้าสู่ระบบ"><br>
    </form>
    <form action="register.html">
    <input type="submit" name="submit" value="register">
    </form>
    </div>
    </div>
</boby>
</html>
