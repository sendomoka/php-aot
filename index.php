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

        <div class="upperimage" id="upperimage">
            <table>
                <tr>
                    <td>
                        <img src="assets/willyspeech.png" alt="">
                    </td>
                </tr>
            </table>
        </div>

        <button id="playButton"></button>

        <div class="speechfull" id="speechfull">
            <table>
                <tr>
                    <td>
                            <span class="speech-part"> Karl Fritz used the power of the Founding Titan to build three concentric walls. </span> 
                            <span class="speech-part"> These walls, made of untold millions of Collosals Titans, </span> 
                            <span class="speech-part"> have acted as both spear and shield to protect the world's peace until now. </span> 
                            <span class="speech-part"> However, several years ago, a revolution occured on Paradis Island. </span> 
                            <span class="speech-part"> King Fritz's peaceful ideology has been overthrown, and the Founding Titan has been stolen by a certain individual. </span> 
                            <span class="speech-part"> The world is once again in danger. </span> 
                            <span class="speech-part"> The name of this rebel who threatens our peace is Eren Yeager </span> 
                            <span class="speech-part"> The threat posed by Paradis Island is the attack of this army of Collosal Titans: The Rumbling. </span> 
                            <span class="speech-part"> As i explained earlier, the royal bloodline is bound by the pledge renouncing war and cannot utilize the power of the Founding Titan. </span> 
                            <span class="speech-part"> but Eren Yeager, who now holds the Founding Titan is not bound by any such promise. </span> 
                            <span class="speech-part"> If he begins the Rumbling, there will be nothing we can do. </span> 
                            <span class="speech-part"> Humanity will be powerless but to cower in fear of the footfalls of the apocalypse. </span> 
                            <span class="speech-part"> The civilization and cities of our world will be destroyed </span> 
                            <span class="speech-part"> as everything we know and love is literally crushed flat. </span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="speechshort" id="speechshort">
            <table>
                <tr>
                    <td>
                        <p>
                        If he begins the Rumbling, there will be nothing we can do.
                        Humanity will be powerless but to cower in fear
                        of the footfallsof the apocalypse.
                        The civilization and cities of our world will be destroyed
                        as everything we know and love is literally crushed flat.
                        </p>
                        <small>— Willy Tybur explains the destructive potential of the Rumbling to his audience during the Liberio festival</small>
                    </td>
                </tr>
            </table>
        </div>

        <!-- <div class="container2bottom">
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
            </div> -->

        <div class="fuzzy-overlay"></div>
    </div>

    <audio id="sound" src="assets/willyspeech.mp3" preload="auto"></audio>
    <script src="js/index.js"> </script>
</body>
</html>