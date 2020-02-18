<?php
$h = "localhost";
$u = "root";
$p = "";
$data = "cs";
$conn = mysqli_connect($h,$u,$p,$data);
if($conn){
    echo "connect";

}
else{
    echo "not";
}