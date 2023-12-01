<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $queryTimeline = mysqli_query($conn, "SELECT * FROM timeline WHERE id = '$id'");
    $dataTimeline = mysqli_fetch_array($queryTimeline);
    $queryDeath = mysqli_query($conn, "SELECT death.*, user.name, user.fraction_ethnic, COALESCE(timeline.place, '(not found)') as place, timeline.time 
    FROM death
    INNER JOIN user ON death.userid = user.id
    LEFT JOIN timeline ON death.timelineid = timeline.id
    WHERE death.timelineid = '$id'");
    $deathData = mysqli_fetch_all($queryDeath, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Timeline | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_timeline_detail.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('../assets/images/main-bg.png');
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
        main {
            margin-top: 8rem;
        }
        .card {
            background-color: black;
            color: white;
            margin: 10px;
        }
        .card-image {
            margin-left: 35px;
        }
    </style>
</head>
<body>
<?php include "components/header.php" ?>
    <main>
        <img src="assets/images/timeline/<?= $dataTimeline['image'] ?>">
        <div class="text">
            <div class="sub">
                <p>Time : <?= $dataTimeline['time'] ?></p>
                <p>Undiscovered Death : <?= $dataTimeline['undiscovered_death'] ?></p>
            </div>
            <h1 style="color: white"><?= $dataTimeline['place'] ?></h1>
            <p><?= $dataTimeline['details'] ?></p>
        </div>
        <div class="grid">
            <?php foreach ($deathData as $death) : ?>
                <div class="card">
                    <div class="card-image">
                        <img src="assets/images/death/<?= $death['image'] ?>" alt="image">
                    </div>
                    <div class="card-text">
                        <b>In Honored Memory Of</b>
                        <h1><?= $death['name'] ?></h1>
                        <p><?= $death['fraction_ethnic'] ?></p>
                        <hr>
                        <p><?= $death['place'] ?></p>
                        <small>CAUSE OF DEATH</small>
                        <small><?= $death['cause'] ?></small>
                        <p><?= $death['time'] ?> OF RUMBLING - 854</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>