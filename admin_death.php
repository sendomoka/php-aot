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
    $queryuser = mysqli_query($conn, "SELECT userid FROM death WHERE id = '$id'");
    $datauser = mysqli_fetch_assoc($queryuser);
    $userid = $datauser['userid'];
    $querydelete = mysqli_query($conn, "DELETE FROM death WHERE id = '$id'");
    if ($querydelete) {
        $makealive = mysqli_query($conn, "UPDATE user SET status = 'Alive' WHERE id = '$userid'");
        if ($makealive) {
            echo "User is alive now.";
        } else {
            echo "Error: " . $makealive . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $querydelete . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <style>
        a[href="admin_death.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <div class="top">
            <a class="insert" href="admin_death_insert.php">
                <img src="assets/images/addicon.png" alt="add">
                Add Data
            </a>
            <div class="top-right">
                <div class="filter">
                    <a href="javascript:void(0)" onclick="clearFilter()">Place ⇵</a>
                    <div class="filter-item">
                        <?php
                            $query = mysqli_query($conn, "SELECT DISTINCT place FROM timeline");
                            while($row = mysqli_fetch_array($query)){
                                echo "<a href='?place=$row[place]'>$row[place]</a>";
                            }
                        ?>
                    </div>
                </div>
                <form action="admin_death.php" method="get">
                    <input type="text" name="insearch" placeholder="Search">
                    <button type="submit" name="btnsearch">Search</button>
                </form>
            </div>
        </div>
        <table border="1">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Place</th>
                <th>Cause</th>
                <th>Action</th>
            </tr>
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $no = ($page - 1) * 7 + 1;
                if (isset($_GET['btnsearch'])) {
                    $search = $_GET['insearch'];
                    $query = "SELECT death.id, user.name, COALESCE(timeline.place, '(not found)') AS place, death.cause FROM death
                    INNER JOIN user ON death.userid = user.id
                    LEFT JOIN timeline ON death.timelineid = timeline.id
                    WHERE user.name LIKE '%$search%' OR timeline.place LIKE '%$search%' OR death.cause LIKE '%$search%'";
                } else if (isset($_GET['place'])) {
                    $place = $_GET['place'];
                    $query = "SELECT death.id, user.name, COALESCE(timeline.place, '(not found)') AS place, death.cause FROM death
                    INNER JOIN user ON death.userid = user.id
                    LEFT JOIN timeline ON death.timelineid = timeline.id
                    WHERE timeline.place = '$place'";
                } else {
                    $query = "SELECT death.id, user.name, COALESCE(timeline.place, '(not found)') AS place, death.cause FROM death
                    INNER JOIN user ON death.userid = user.id
                    LEFT JOIN timeline ON death.timelineid = timeline.id";
                }
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)){
                    echo "
                        <tr>
                            <td>$no.</td>
                            <td>$row[name]</td>
                            <td>$row[place]</td>
                            <td>$row[cause]</td>
                            <td>
                                <a href='admin_death_detail.php?id=$row[id]'>
                                    <img src='assets/images/detailicon.png' alt='detail'>
                                </a>
                                <a href='admin_death_update.php?id=$row[id]'>
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
                $query = mysqli_query($conn, "SELECT * FROM death");
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
    function clearFilter() {
        var url = window.location.href;
        var updatedUrl = url.split('?')[0];
        history.replaceState(null, null, updatedUrl);
        location.reload();
    }
</script>
</html>