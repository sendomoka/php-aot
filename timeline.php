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
    <title>Timeline</title>
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timeline.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    
        <div class="title">
            <h1>Rumbling Timeline</h1>
            <h3>Year : 854</h3>
        </div>

        <div class="container">
            <div class="text-content">
                <h1>Mitras, Paradis</h1>
                <p>Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.</p>
                <p><span class="time">Time : Day 1</span>  <span class="death">Death : 83</span></p>
            </div>
            <img src="assets/images/day1.png" alt="Your Image">
        </div>

        <div class="container">
            <div class="text-content">
                <h1>Mitras, Paradis</h1>
                <p>Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.</p>
                <p><span class="time">Time : Day 1</span>  <span class="death">Death : 83</span></p>
            </div>
            <img src="assets/images/day1.png" alt="Your Image">
        </div>

        <div class="container">
            <div class="text-content">
                <h1>Mitras, Paradis</h1>
                <p>Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.</p>
                <p><span class="time">Time : Day 1</span>  <span class="death">Death : 83</span></p>
            </div>
            <img src="assets/images/day1.png" alt="Your Image">
        </div>

    <script src="js/timeline.js"> </script>
</body>
</html>