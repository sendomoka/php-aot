<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    
        <div class="container1">
        <div class="container1left">
            <table>

                <tr>
                    <td><h1>The Rumbling</h1></td>
                </tr>

                <tr>
                    <td>
                        <p>
                            As the Wall Titans unleashed by Eren approach 
                            trampling the earth, the survivors can only 
                            warn of the apocalyptic force that will soon 
                            destroy everything in it’s path.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td> 
                        <div class="hover-container">

                                <img name="ereh" src="assets/ereh1.png" alt="" onmouseover="ganti_gambar2()" onmouseout="ganti_gambar1()">
                                <div id="click-text" class="click-text">Click the Founder</div>
                                <audio id="hover-sound" src="assets/erenroar.mp3" preload="auto" muted></audio>

                        <div class="hover-text" id="text">
                            <a href="register.php" class="button">
                                START THE END
                            </a>
                        </div>
                        
                        </div>
                    </td>
                </tr>

            </table>
        </div>

        <div class="container1right">
            <table>
                <tr>
                    <td>
                        <img src="assets/transform.png" alt="">
                    </td>
                </tr>
            </table>
        </div>

        <div class="container1bottom">
            <table>
                <tr>
                    <td><p>Story Begin<p></td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/arrow-down.png" alt="arrow">
                    </td>
                </tr>
            </table>
            
        </div>

    </div>

    <div class="container2">
        

        <div class="speech">
            <table>

                <tr>
                    <td>
                        <img src="assets/speech.png" alt="">
                    </td>
                </tr>

            </table>
        </div>

        <div class="speechtext">
            <table>
                <tr>
                    <td>
                        <p>
                        While we saw the rise of weapons more powerful than Titans in the last war... 
                        we will never see a weapon that can stop the advance of millions of Colossal Titans. 
                        If the Walls walk even a single time... there will be nothing left we can do. 
                        All that can remain for humanity would be to flee in terror at the rumble of 
                        the footsteps that signal our end. These massive creatures would trample our 
                        cities, our societies... They would crush the flora and fauna in every ecosystem. 
                        They would literally flatten our world.
                        </p>
                        <small>— Willy Tybur explains the destructive potential of the Rumbling to his audience during the Liberio festival</small>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container2bottom">
            <img src="assets/scrolldown.png" alt="scrollimg">
        </div>

    </div>

    <script src="js/index.js"> </script>
</body>
</html>