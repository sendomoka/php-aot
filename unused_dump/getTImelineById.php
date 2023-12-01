<?php
include 'models.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $timelineData = getTimelineById($id);
    header('Content-Type: application/json');
    echo json_encode($timelineData);
}
?>