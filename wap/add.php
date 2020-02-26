<?php
  require("sv.php");

  $u = $_REQUEST['username'];
  $p = $_REQUEST['pass'];
  $e = $_REQUEST['email'];
  $n = $_REQUEST['number'];

  // 2. SELECT (SQL: INSERT)
  $sql = "INSERT INTO data (username, pass, email , number) VALUES ";
  $sql .= "('". $u ."','" . $p ."','" . $e ."','" . $n ."')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:log.html");

?>