<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'config/connect.php';

if (isset($_SESSION['nickname']) != "") {
    header("Location: index.php");
}

if (isset($_POST['login'])) {
    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM user WHERE nickname = '" . $nickname. "' AND password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['nickname'] = $row['nickname'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid Nickname or Password!'); window.location.href='login.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
</head>
<body>
    <video autoplay muted loop id="bgvideo">
        <source src="https://ecom22a.com/rumbling/eren-speech-cutted.mp4" type="video/mp4">
    </video>
    <div class="container">
        <img src="assets/aot-logo.png" alt="logo">
        <h1>Beware the Rumbling!</h1>
        <p>As the Wall Titans unleashed by Eren approach trampling the earth, the survivors can only warn of the apocalyptic force that will soon destroy everything in it’s path.</p>
        <form action="" method="post">
            <input type="text" name="nickname" placeholder="YOUR NICKNAME">
            <input type="password" name="password" placeholder="YOUR PASSWORD">
            <input type="submit" name="login" value="ENTER">
        <a href="register.php">CREATE ACCOUNT</a>
    </div>
    <audio autoplay id="audio">
        <source src="assets/eren-speech.mp3" type="audio/mpeg">
    </audio>
    <script>
        document.body.addEventListener('click', function() {
        var audio = document.getElementById('audio');
        audio.play();
    });
    </script>
</body>
</html>