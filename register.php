<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
</head>
<body>

<video autoplay muted loop id="bgvideo">
  <source src="assets/aot-transform.mp4" type="video/mp4">
</video>

<div class="container">
        <img src="assets/aot-logo.png" alt="logo">
            <h1>The Founder Emerges!</h1>
            <p>As the Wall Titans unleashed by Eren approach trampling the earth, the survivors can only warn of the apocalyptic force that will soon destroy everything in it’s path.</p>
            <form action="includes/login.inc.php" method="post">
                <div class="input-grid">
                <input type="text" name="nickname" placeholder="YOUR NICKNAME">
                <input type="password" name="password" placeholder="YOUR PASSWORD">
                <input type="text" name="name" placeholder="YOUR NAME">
                <input type="password" name="confirmpassword" placeholder="CONFIRM PASSWORD">
                </div>
            <P>WHAT ARE YOU ?</P>

            <div class="image-grid">
                <img src="assets/eldian.png" alt="eldian" id="race">
                <img src="assets/marley.png" alt="marley" id="race">
            </div>

                <input type="submit" name="register" value="CREATE ACCOUNT">
            <a href="login.php">ALREADY HAVE AN ACCOUNT ?</a>

 </div>
        
        <!-- <div class="right">

        <video autoplay loop id="video">
            <source src="assets/aot-transform.mp4" type="video/mp4">
        </video>

        </div>
    </div>
    <script>

window.addEventListener('load', function() {
    var video = document.getElementById('video');
    video.play();
}); -->

    </script>
</body>
</html>