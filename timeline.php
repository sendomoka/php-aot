<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

$erenstatus = mysqli_query($conn, "SELECT status FROM user WHERE nickname = 'eren'");
$eren = mysqli_fetch_assoc($erenstatus);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline - AoT Rumbling</title>
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
        <?php
            $query = mysqli_query($conn, "SELECT * FROM timeline ORDER BY id ASC");
            if(mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_array($query)){
                    echo "<a href='timeline_detail.php?id=$row[id]' style='text-decoration: none'>";
                    echo "<div class='container'>";
                    echo "<div class='text-content'>";
                    echo "<h1>$row[place]</h1>";
                    echo "<p style='color: #b2adad'>$row[details]</p>";
                    echo "<p><span class='time'>Time : $row[time]</span>  <span class='death'>Undiscovered Death : $row[undiscovered_death]</span></p>";
                    echo "</div>";
                    echo "<img src='assets/images/timeline/$row[image]' alt='Your Image'>";
                    echo "</div>";
                    echo "</a>";
                }
            } else {
                echo "<p style='margin: 0 auto; color: white'>Rumbling not started.</p>";
            }
            if($eren && $eren['status'] == 'Dead') {
                echo "<p style='margin: 20px auto; color: white'>Rumbling Stopped & Eren Yeager Dead!</p>";
            }
        ?>
    <script src="js/timeline.js"> </script>
</body>
</html>