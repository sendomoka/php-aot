<?php
// db hosting
$host = "sql201.infinityfree.com";  
$user = "if0_35430226";
$pass = "D1NxOOZCjjP";
$db = "if0_35430226_rumbling";

// db local
$host_local = "localhost";
$user_local = "root";
$pass_local = "";  
$db_local = "rumbling";

// cek domain
$domain = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($domain, "rumbling.infinityfreeapp.com") !== false) {
    $conn = mysqli_connect($host, $user, $pass, $db); 
} else {
    $conn = mysqli_connect($host_local, $user_local, $pass_local, $db_local);
}

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>