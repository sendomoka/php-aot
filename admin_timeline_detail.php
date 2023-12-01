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

    $query = mysqli_query($conn, "SELECT * FROM timeline WHERE id = '$id'");
    $data = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Timeline | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_timeline_detail.css">
    <style>
        a[href="admin_timeline.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <img src="assets/images/timeline/<?= $data['image'] ?>" alt="image">
        <div class="text">
            <div class="sub">
                <p>Time : <?= $data['time'] ?></p>
                <p>Undiscovered Death : <?= $data['undiscovered_death'] ?></p>
            </div>
            <h1><?= $data['place'] ?></h1>
            <p><?= $data['details'] ?></p>
        </div>
    </main>
</body>
</html>