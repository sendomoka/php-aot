<?php
session_start();
include "config/models.php";

if(isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['register'])) {
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $confirmpassword = $_POST['confirmpassword'];
    $fraction_ethnic = isset($_POST['fraction_ethnic']) ? $_POST['fraction_ethnic'] : '';
    register($nickname, $password, $confirmpassword, $name, $fraction_ethnic);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <video autoplay muted loop id="bgvideo">
        <source src="https://ecom22a.com/rumbling/aot-transform.mp4" type="video/mp4">
    </video>
    <div class="container">
        <img src="assets/images/aot-logo.png" style="height: 90px; width: auto; margin-top: 1rem; margin-bottom: .3rem">
        <h1>The Founder Emerges!</h1>
        <p>As the Wall Titans unleashed by Eren approach trampling the earth, the survivors can only warn of the apocalyptic force that will soon destroy everything in its path.</p>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="input-grid">
                <input type="text" name="nickname" placeholder="YOUR NICKNAME">
                <input type="password" name="password" placeholder="YOUR PASSWORD">
                <input type="text" name="name" placeholder="YOUR NAME">
                <input type="password" name="confirmpassword" placeholder="CONFIRM PASSWORD">
            </div>
            <p>WHAT ARE YOU ?</p>
            <div class="image-grid">
                <input type="radio" name="fraction_ethnic" value="Eldian" id="eldian-radio" style="display: none;">
                <label for="eldian-radio" class="race-label" id="eldian-label" onclick="selectRace('eldian')">
                    <img src="assets/images/eldian.png" alt="eldian" id="race">
                </label>

                <input type="radio" name="fraction_ethnic" value="Marley" id="marley-radio" style="display: none;">
                <label for="marley-radio" class="race-label" id="marley-label" onclick="selectRace('marley')">
                    <img src="assets/images/marley.png" alt="marley" id="race">
                </label>
            </div>
            <input type="submit" name="register" value="CREATE ACCOUNT">
            <a href="login.php">ALREADY HAVE AN ACCOUNT ?</a>
        </form>
    </div>
    <script>
        function selectRace(race) {
            document.querySelectorAll('.race-label').forEach(function(label) {
                label.classList.remove('selected');
            });
            if (race === 'eldian') {
                document.querySelector('#eldian-radio').checked = true;
                document.querySelector('#eldian-label').classList.add('selected');
            } else if (race === 'marley') {
                document.querySelector('#marley-radio').checked = true;
                document.querySelector('#marley-label').classList.add('selected');
            }
        }
    </script>
</body>
</html>
