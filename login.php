<?php
session_start();
include "config/models.php";

if(isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['login'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    login($nickname, $password);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <video autoplay muted loop id="bgvideo">
        <source src="https://ecom22a.com/rumbling/eren-speech-cutted.mp4" type="video/mp4">
    </video>
    <div class="container">
        <img src="assets/images/aot-logo.png" alt="logo">
        <h1>Beware the Rumbling!</h1>
        <p>As the Wall Titans unleashed by Eren approach trampling the earth, the survivors can only warn of the apocalyptic force that will soon destroy everything in it's path.</p>
        <form action="" method="post">
            <input type="text" name="nickname" placeholder="YOUR NICKNAME">
            <input type="password" name="password" placeholder="YOUR PASSWORD">
            <input type="submit" name="login" value="ENTER">
        <a href="register.php">CREATE ACCOUNT</a>
    </div>
    <audio autoplay id="audio">
        <source src="assets/audios/eren-speech.mp3" type="audio/mpeg">
    </audio>
    <script>
        document.body.addEventListener('click', function() {
        var audio = document.getElementById('audio');
        audio.play();
    });
    </script>
</body>
</html>