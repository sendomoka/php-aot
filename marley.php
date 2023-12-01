<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

$query = mysqli_query($conn, "SELECT * FROM user WHERE SUBSTRING_INDEX(fraction_ethnic, ' ', -1) = 'Marley'");
$marleyUsers = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marley - AoT Rumbling</title>
    <link rel="stylesheet" href="css/marley.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/header.php'; ?>

    <div class="marleydesc">

        <div class="text">
            <h1>MARLEY</h1>
            <img src="assets/images/marleylogotp.png" alt="marleylogo">
            <p>Marley was a powerful nation in ancient times; however, around 2,000 years ago, a slave of the Eldians named Ymir gained the power of the Titans. King Fritz used her abilities to defeat Marley and force their surrender. One of the Marleyans attempted to assassinate Fritz several years after their defeat, but Ymir intervened and was killed instead. After Ymir's death, her power was split and passed down to her descendants in the form of the Nine Titans, who subsequently built the Eldian Empire. Using the Titans, the Eldians waged war against Marley and many other nations, utterly destroying them and obtaining complete rule over the continental mainland. This is considered to be the start of the Dark Ages. <br> <br>
                Over an unspecified amount of time, Marley gradually gained control of the continental mainland that once was ruled by Eldian until only Paradis Island remained as King Karl Fritz's undisputed territory. In the year 743, King Fritz moved as many Eldians as he could to Paradis Island, and used the Founding Titan to guide a massive number of Colossus Titans in the raising of three concentric Walls around Eldian's remaining territory. In order to force peace between Eldian and Marley, King Fritz gave the ultimatum that any further act of war against Eldian would be met with the releasing of the countless Titans within the Walls. With this, the Great Titan War ended.</p>
        </div>
        
    </div>

    <div class="marleychar">

        <div class="upperimage" id="upperimage">
            <table>
                <tr>
                    <td>
                        <img src="assets/images/brush.png" alt="sub">
                        <div class="sub-title">People of Marley</div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="grid">
        <?php foreach ($marleyUsers as $user): ?>
                <div class="item">
                    <img src="assets/images/profile_pic/<?php echo $user['avatar']; ?>" alt="<?php echo $user['nickname']; ?>">
                    <p><?php echo $user['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</body>
</html>