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
    $userid = $_GET['id'];
    $deletedeathuser = mysqli_query($conn, "DELETE FROM death WHERE userid = '$userid'");
    $deleteuser = mysqli_query($conn, "DELETE FROM user WHERE id = '$userid'");
    if ($deletedeathuser && $deleteuser) {
        header("Location: admin_user.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_user.css">
    <style>
        a[href="admin_user.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <div class="top">
            <a class="insert" href="admin_user_insert.php">
                <img src="assets/images/addicon.png" alt="add">
                Add Data
            </a>
            <div class="top-right">
                <div class="filter">
                    <a href="javascript:void(0)" onclick="clearFilter()">Fraction - Ethnic ⇵</a>
                    <div class="filter-item">
                        <?php
                            $query = mysqli_query($conn, "SELECT DISTINCT fraction_ethnic FROM user");
                            while($row = mysqli_fetch_array($query)){
                                echo "<a href='?fraction_ethnic=$row[fraction_ethnic]'>$row[fraction_ethnic]</a>";
                            }
                        ?>
                    </div>
                </div>
                <div class="filter">
                    <a href="javascript:void(0)" onclick="clearFilter()">Status ⇵</a>
                    <div class="filter-item">
                        <?php
                            $query = mysqli_query($conn, "SELECT DISTINCT status FROM user");
                            while($row = mysqli_fetch_array($query)){
                                echo "<a href='?status=$row[status]'>$row[status]</a>";
                            }
                        ?>
                    </div>
                </div>
                <form action="admin_user.php" method="get">
                    <input type="text" name="insearch" placeholder="Search">
                    <button type="submit" name="btnsearch">Search</button>
                </form>
            </div>
        </div>
        <table border="1">
            <tr>
                <th>#</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Fraction - Ethnic</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $recordsPerPage = 6;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $offset = ($page - 1) * $recordsPerPage;
            $no = 1 + $offset;
            if (isset($_GET['btnsearch'])) {
                $search = $_GET['insearch'];
                $query = "SELECT * FROM user WHERE name LIKE '%$search%' OR fraction_ethnic LIKE '%$search%' OR status LIKE '%$search%'";
            } else if (isset($_GET['fraction_ethnic'])) {
                $fraction_ethnic = $_GET['fraction_ethnic'];
                $query = "SELECT * FROM user WHERE fraction_ethnic = '$fraction_ethnic'";
            } else if (isset($_GET['status'])) {
                $status = $_GET['status'];
                $query = "SELECT * FROM user WHERE status = '$status'";
            } else {
                $query = "SELECT * FROM user LIMIT $offset, $recordsPerPage";
            }
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result)) {
                if ($row['id'] == 1) {
                    echo "<tr style='background: rgba(175, 163, 65, 0.2)'>";
                } else if ($row['status'] == 'Dead') {
                    echo "<tr style='background: rgba(255, 0, 0, 0.05)'>";
                } else if ($row['status'] == 'Alive') {
                    echo "<tr style='background: rgba(0, 255, 0, 0.05)'>";
                } else {
                    echo "<tr>";
                }
                    echo "
                        <td>$no.</td>
                        <td><img src='assets/images/profile_pic/$row[avatar]' alt='avatar'></td>
                        <td>$row[name]</td>
                        <td>$row[fraction_ethnic]</td>
                        <td>$row[status]</td>
                        <td>
                            <a href='admin_user_update.php?id=$row[id]'>
                                <img src='assets/images/editicon.png' alt='edit'>
                            </a>
                            <a href='?id=$row[id]'>
                                <img src='assets/images/deleteicon.png' alt='delete'>
                            </a>
                    </tr>
                ";
                $no++;
            }
            ?>
        </table>
        <div class="pagination">
            <?php
                $query = mysqli_query($conn, "SELECT * FROM user");
                $count = mysqli_num_rows($query);
                $total = ceil($count / $recordsPerPage);
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