<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:log.php");
}
?>
<head>
</head>
<body>
    <form action="logout.php">
    <h6>ยินดีตอนรับ</h6>
    <input type="submit" name="logout" value = "logout"></input>
    </form>
</body>