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
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timeline.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    
        <div class="title">
            <h1>Rumbling Timeline</h1>
            <h2>Year : 854</h2>
        </div>

    <script src="js/timeline.js"> </script>
</body>
</html>