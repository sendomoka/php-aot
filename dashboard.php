<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    
    <div class="kiri">
        <a href="index.php">    
        <img src="assets/aot-logo.png" alt="aot">
        </a>
        <button id="btn1" class="active">Setting</button>
        <button id="btn2">Timeline</button>
        <button id="btn3">Death</button>
        <button id="btn4">User</button>
    </div>

    <div class="atas">
        <h1>Setting</h1>
        <img src="assets/Vector.png" alt="">
        <p class="username">Jehian Athaya</p>
        <p class="role">Eldian</p>
    </div>

    <div class="content1" id="content-1">
        <form method="post">
            <div class="form-group">

                <div class="input-group-avatar">
                    <p>Change Avatar</p>
                    <img src="assets/Vector.png" alt="">
                </div>

                <div class="input-group-2">
                    <input type="file">
                </div>

                <div class="input-group-nick">
                    <p>Nickname</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-name">
                    <p>Name</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-pw">
                    <p>Password</p>
                    <input type="password" name="password" value="12345">
                </div>

                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>

    <div class="content2" id="content-2">
        <form method="post">
            <div class="form-group">

                <div class="input-group-nick">
                    <p>Nickname</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-name">
                    <p>Name</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-pw">
                    <p>Password</p>
                    <input type="password" name="password" value="12345">
                </div>

                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>

    <div class="content3" id="content-3">
        <form method="post">
            <div class="form-group">

                <div class="input-group-nick">
                    <p>Email</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-name">
                    <p>Nickname</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-pw">
                    <p>Password</p>
                    <input type="password" name="password" value="12345">
                </div>

                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>

    <div class="content4" id="content-4">
        <form method="post">
            <div class="form-group">

                <div class="input-group-nick">
                    <p>JALSKDJAW</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-name">
                    <p>AWSDWA</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-pw">
                    <p>ASDWASD</p>
                    <input type="password" name="password" value="12345">
                </div>

                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>

    <script src="js/dashboard.js"> </script>
</body>
</html>