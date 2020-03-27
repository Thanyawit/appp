<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="b.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="username" required="required" />
            <input type="password" name="pass" placeholder="password" required="required" />
            <input type="submit" class="btn btn-primary btn-block btn-large" value="login"></input><br>
        </form>
       <a href="register.html"><button type="submit" class="btn btn-primary btn-block btn-large">register</button></a>
</body>
</html>