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
    $checkDeath = mysqli_query($conn, "SELECT * FROM death WHERE timelineid = '$id'");
    $hasref = mysqli_num_rows($checkDeath) > 0;
    if ($hasref) {
        $nullplace = mysqli_query($conn, "UPDATE death SET timelineid = NULL WHERE timelineid = '$id'");
    }
    $query = mysqli_query($conn, "DELETE FROM timeline WHERE id = '$id'");
    if ($query) {
        header("Location: admin_timeline.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <style>
        a[href="admin_timeline.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <div class="top">
            <a class="insert" href="admin_timeline_insert.php">
                <img src="assets/images/addicon.png" alt="add">
                Add Data
            </a>
            <div class="top-right">
                <div class="filter">
                    <a href="javascript:void(0)" onclick="clearTimeFilter()">Time ⇵</a>
                    <div class="filter-item">
                        <?php
                            $query = mysqli_query($conn, "SELECT DISTINCT time FROM timeline");
                            while($row = mysqli_fetch_array($query)){
                                echo "<a href='?time=$row[time]'>$row[time]</a>";
                            }
                        ?>
                    </div>
                </div>
                <form action="admin_timeline.php" method="get">
                    <input type="text" name="insearch" placeholder="Search">
                    <button type="submit" name="btnsearch">Search</button>
                </form>
            </div>
        </div>
        <table border="1">
            <tr>
                <th>#</th>
                <th>Place</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $no = ($page - 1) * 7 + 1;
                if (isset($_GET['btnsearch'])) {
                    $searchTerm = mysqli_real_escape_string($conn, $_GET['insearch']);
                    $query = "SELECT * FROM timeline WHERE place LIKE '%$searchTerm%' OR time LIKE '%$searchTerm%'";
                } else {
                    $offset = ($page - 1) * 7;
                    $time = isset($_GET['time']) ? $_GET['time'] : '';
                    $query = "SELECT * FROM timeline";
                    if (!empty($time)) {
                        $query .= " WHERE time = '$time'";
                    }
                    $query .= " ORDER BY time ASC LIMIT $offset, 7";
                }
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                            <td>$no.</td>
                            <td>$row[place]</td>
                            <td>$row[time]</td>
                            <td>
                                <a href='admin_timeline_detail.php?id=$row[id]'>
                                    <img src='assets/images/detailicon.png' alt='detail'>
                                </a>
                                <a href='admin_timeline_update.php?id=$row[id]'>
                                    <img src='assets/images/editicon.png' alt='edit'>
                                </a>
                                <a href='?id=$row[id]'>
                                    <img src='assets/images/deleteicon.png' alt='delete'>
                                </a>
                            </td>
                        </tr>
                    ";
                    $no++;
                }
            ?>
        </table>
        <div class="pagination">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM timeline");
                $count = mysqli_num_rows($query);
                $total = ceil($count / 7);
                for ($i = 1; $i <= $total; $i++) {
                    echo "<a href='?page=$i'>$i</a>";
                }
            ?>
        </div>
    </main>
</body>
<script>
    function clearTimeFilter() {
        var url = window.location.href;
        var updatedUrl = url.split('?')[0];
        history.replaceState(null, null, updatedUrl);
        location.reload();
    }
</script>
</html>