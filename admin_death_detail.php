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
    $query = mysqli_query($conn, "SELECT * FROM death WHERE id = '$id'");
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
                <p>In Honored Memory Of</p>
                <h3><?= $data['name'] ?></h3>
                <p><?= $data['fraction_ethnic'] ?></p>
                <hr>
                <p><?= $data['place'] ?></p>
                <p>CAUSE OF DEATH</p>
                <p><?= $data['cause'] ?></p>
                <p><?= $data['time'] ?> OF RUMBLING - 854</p>
            </div>
        </div>
    </main>
</body>
</html>