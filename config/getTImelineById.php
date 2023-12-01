<?php
include 'models.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $timelineData = getTimelineById($id);

    // Mengirim data dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($timelineData);
}
?>