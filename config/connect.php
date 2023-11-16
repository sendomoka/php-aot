<?php
error_reporting(E_ALL ^ E_NOTICE AND E_DEPRECATED);
//$conn = mysqli_connect("localhost","root","","aot");
$conn = mysqli_connect("localhost","root","","aot");
if (mysqli_connect_errno()){
    echo "Failed to connect database: " . mysqli_connect_error();
}
?>