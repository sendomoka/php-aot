<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

$query = mysqli_query($conn, "SELECT * FROM user WHERE SUBSTRING_INDEX(fraction_ethnic, ' ', -1) = 'Eldian'");
$eldianUsers = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eldian - AoT Rumbling</title>
    <link rel="stylesheet" href="css/eldian.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>
    <div class="eldiandesc">
        <div class="text">
            <h1>ELDIAN</h1>
            <img src="assets/images/eldianlogotp.png" alt="eldianlogo">
            <p>In ancient times, the people of Eldian existed as a primitive tribe. The Eldian tribe pillaged and raided opposing peoples, even cutting out the tongues of those they took for their slaves and gouging out the eyes of disobedient slaves. Around 2,000 years ago, a slave girl named Ymir gained the power of the Titans. The ruler of the Eldian tribe used Ymir's newfound powers to war against enemy nations such as Marley, and he would later take Ymir to mother his children in the Fritz family. 13 years later, Ymir Fritz died in defense of her king, and her powers were inherited by her three daughters when they cannibalized her body. Her powers would spread until there were Nine Titans. With their Titan powers, the Subjects of Ymir established the Eldian Empire.</p>
            <p>After 1,700 years, the Founding Titan came into the possession of Karl Fritz, the 145th King. The King believed that Eldian's sins cannot be atoned for, and that Eldians and Titans should not have existed in the first place. He pitied the Marleyans and devised a plan alongside the Tybur family, the keepers of the War Hammer Titan, to end the Eldian rule. The King abandoned the internal conflicts, and without the Founding Titan to keep order, the Eldian Empire collapsed. The Eldians fought and weakened themselves during the Great Titan War, while the King and the Tybur family presented the legend of Helos, a Marleyan hero who joined with the Tybur family to defeat the King. The Tybur family fought to restore Marley in the war; other noble families would evidently follow suit. They succeeded and Marley gained seven of the Nine Titans as a result. The King moved the capital to Paradis Island, Eldian's last remaining territory, and gathered as many Eldians he could on the island. The King erases humanity's memory.
                On Paradis Island, the King used the Founding Titan to cause Colossus Titans to form three concentric Walls around their territory: Maria, Rose, and Sheena.</p>
        </div>
    </div>

    <div class="eldianchar">

        <div class="upperimage" id="upperimage">
            <table>
                <tr>
                    <td>
                        <img src="assets/images/brush.png" alt="sub">
                        <div class="sub-title">People of Eldian</div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="grid">
        <?php foreach ($eldianUsers as $user): ?>
                <div class="item">
                    <img src="assets/images/profile_pic/<?php echo $user['avatar']; ?>" alt="<?php echo $user['nickname']; ?>">
                    <p><?php echo $user['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>