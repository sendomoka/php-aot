<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

        <!-- <video autoplay muted loop class="bgvideo">
            <source src="assets/aot-transform.mp4" type="video/mp4">
        </video> -->

<div class="container">
        <div class="left">
            <img class="logo" src="assets/aot-logo.png" alt="logo">
            <div class="loginform">
            <h1>Register</h1>
            <form>
                <p>Nickname</p> 
                <input type="text" name="nickname" placeholder="Your Nickname" required>
                <p>Name</p> 
                <input type="text" name="name" placeholder="Your Name" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Password" required>
                <p>Confirm Password</p>
                <input type="password" name="password" placeholder="Confirm Password" required>
                <p>Choose Your Race</p>
                <div class="race-selection">
                    <img class="eldia" src="assets/logoeldia.png" alt="eldia">
                    <img class="marley" src="assets/logomarley.png" alt="marley">
                </div>
                <input type="submit" name="register" value="Register">
                <p>Already have an account ? <a href="login.php" style="color: white; text-decoration: none;"><u>Login</u></a></p>

            </form>
            </div>
        </div>
        
        <div class="right">

        <video autoplay loop id="video">
            <source src="assets/aot-transform.mp4" type="video/mp4">
        </video>

        </div>
    </div>
    <script>

window.addEventListener('load', function() {
    var video = document.getElementById('video');
    video.play();
});

    </script>
</body>
</html>