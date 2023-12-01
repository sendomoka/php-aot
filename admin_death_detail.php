<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
} else {
    if ($_SESSION['role'] != 'Admin') {
        header("Location: index.php");
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT death.*, user.name, user.fraction_ethnic, COALESCE(timeline.place, '(not found)') as place, timeline.time FROM death
    INNER JOIN user ON death.userid = user.id
    LEFT JOIN timeline ON death.timelineid = timeline.id
    WHERE death.id = '$id'");
    $data = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Death | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_death_detail.css">
    <style>
        a[href="admin_death.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <div class="card">
            <div class="card-image">
                <img src="assets/images/death/<?= $data['image'] ?>" alt="image">
            </div>
            <div class="card-text">
                <b>In Honored Memory Of</b>
                <h1><?= $data['name'] ?></h1>
                <p><?= $data['fraction_ethnic'] ?></p>
                <hr>
                <p><?= $data['place'] ?></p>
                <small>CAUSE OF DEATH</small>
                <small><?= $data['cause'] ?></small>
                <p><?= $data['time'] ?> OF RUMBLING - 854</p>
            </div>
        </div>
    </main>
</body>
</html>