<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - AoT Rumbling</title>
    <link rel="stylesheet" href="css/style.css">
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
                            destroy everything in it's path.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td> 
                        <div class="hover-container">

                                <img name="ereh" src="assets/images/ereh1.png" alt="" onmouseover="ganti_gambar2()" onmouseout="ganti_gambar1()">
                                <div id="click-text" class="click-text">Click the Founder</div>
                                <audio id="hover-sound" src="assets/audios/erenroar.mp3" preload="auto" muted></audio>

                        <div class="hover-text" id="text">
                            <a href="timeline.php" class="button">
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
                        <img src="assets/images/transform.png" alt="">
                    </td>
                </tr>
            </table>
            </div>

            <div class="nextpage2">
                <table>
                    <tr>
                        <td><p>Story Begin<p></td>
                    </tr>
                    <tr>
                        <td>
                            <img id="nextpage2" src="assets/images/arrow-down.png" alt="arrow">
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
                        <img src="assets/images/brush.png" alt="">
                        <div class="sub-title">Willy Tybur Speech</div>
                    </td>
                </tr>
            </table>
        </div>

        <button id="playButton"></button>
        <audio id="willyspeech" src="assets/audios/willyspeech.mp3" preload="auto"></audio>

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

       

        <div class="fuzzy-overlay"></div>
        <div class="nextpage3">
            <table>
                    <td>
                        <img id="nextpage3" src="assets/images/arrow-down.png" alt="arrow">
                    </td>
                </tr>
            </table>   
            </div>
    </div>

    <div class="container3">

        <div class="upperimage2" id="upperimage2">
                <table>
                    <tr>
                        <td>
                            <img src="assets/images/brush.png" alt="">
                            <div class="sub-title">Prelude</div>
                        </td>
                    </tr>
                </table>
        </div>

        <div class="content3">

            <div class="content3-inner">

                <div class="image-text" id="image-text-1">
                    <img id="wallmaking" src="assets/images/wallmaking.png" alt="">
                    <h2>King Karl Fritz Builds the Walls</h2>
                    <p>King Karl Fritz builds 3 massive walls on Paradis Island using the power of the Founding Titan to protect the remnants of the Eldian Empire.</p>
                </div>

                <img id="arrowright-1" src="assets/images/arrow-right.png" alt="">

                <div class="image-text" id="image-text-2">
                    <img id="idiots" src="assets/images/6idiots.png" alt="">
                    <h2>Marley's Infiltration Plan into Paradis Island</h2>
                    <p>Due to the threat of the Rumbling, Marley plans to infiltrate the "Warrior Unit" into Paradis Island to steal the power of the Titans.</p>
                </div>

                <img id="arrowright-2" src="assets/images/arrow-right.png" alt="">

                <div class="image-text" id="image-text-3">
                    <img id="brainwash" src="assets/images/brainwash.png" alt="">
                    <h2>Grisha Yeager Steals the Titan Powers</h2>
                    <p>Grisha Yeager steals the Founding Titan power and slaughters the Reiss family after receiving future memories from Eren.</p>
                </div>

                <img id="arrowright-3" src="assets/images/arrow-right.png" alt="">

                <div class="image-text" id="image-text-4">
                    <img id="brothers" src="assets/images/brothers.png" alt="">
                    <h2>Eren's Plan to Use the Colossal Titans</h2>
                    <p>Eren plans to cooperate temporarily with Zeke in order to gain control over the Colossal Titans within the Walls and destroy all life outside of Paradis Island.</p>
                </div>

            </div>

            <audio id="rock" src="assets/audios/rocksound.mp3" preload="auto"></audio>
            <audio id="camera" src="assets/audios/camerasound.mp3" preload="auto"></audio>
            <audio id="whisper" src="assets/audios/brainwash.mp3" preload="auto"></audio>

            <div class="nextpage4">
                <table>
                    <tr>
                        <td><p>Conclusion<p></td>
                    </tr>
                    <tr>
                        <td>
                            <img id="nextpage4" src="assets/images/arrow-down.png" alt="arrow">
                        </td>
                    </tr>
                </table>   
            </div>
            
        </div>
    </div>

    <div class="container4">
        <img id="ruin" src="assets/images/localman.png" style="width: 300px;">
        <div class="eldian">
            <table>
                <tr>
                    <td>
                        <img src="assets/images/eldialogo.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td><h2>Eldian</h2></td>
                </tr>
                <tr>
                    <td>
                        <p>Eldian is a nation that is currently located on Paradis Island which is chiefly populated by the Subjects of Ymir, a race that used to be able turn into Titans if injected with a serum.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="marley">
        <table>
                <tr>
                    <td>
                        <img src="assets/images/marleylogo.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td><h2>Marley</h2></td>
                </tr>
                <tr>
                    <td>
                        <p>Marley is a nation located beyond the Walls and across the ocean from Paradis Island. Marley was once conquered by Eldian in ancient times, but during the Great Titan War, the Marleyans rose up and subjugated all of Eldian's territory with the exception of Paradis Island.</p>
                    </td>
                </tr>
            </table>
        </div>

        <a href="#" class="arrow up">Up</a>

    </div>

    <script src="js/index.js"> </script>
</body>
</html>