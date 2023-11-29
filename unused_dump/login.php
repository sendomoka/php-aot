<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="container">
        <div class="left">
        <img src="assets/images/aot-cutted.png" alt="Image">
        </div>

        <div class="right">
        <img src="assets/images/aot-logo.png" alt="logo">
            <div class="loginform">
            <h1>Login</h1>
            <form>
                <p>Your Nickname</p> 
                <input type="text" name="nickname" placeholder="Nickname" required>
                <p>Your Password</p>
                <input type="password" name="password" placeholder="Password" required>
                <a href="tes.php" style="color: white; text-decoration: none; margin-bottom: 10px; display: block; text-align: right;"><u>Forget Your Password</u></a> <br>
                <input type="submit" name="signin" value="Login">
                <p>Don't have an account? <a href="register.php" style="color: white; text-decoration: none;"><u>Register</u></a></p>
            </form>
            </div>
           
        </div>
        
    </div>

    <audio autoplay loop id="audio">
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