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

$id = $_GET['id'];
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $place = $_POST['place'];
    $cause = mysqli_real_escape_string($conn, $_POST['cause']);
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_name = time() . "-" . $image_name;
    $image_path = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/death/" . $image_name;
    if (move_uploaded_file($image_tmp, $image_path)) {
        $query = mysqli_query($conn, "UPDATE death SET timelineid = '$place', cause = '$cause', image = '$image_name' WHERE id = '$id'");
        if ($query) {
            header("Location: admin_death.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error uploading image.";
    }
}
$queryname = mysqli_query($conn, "SELECT * FROM user");
$queryplace = mysqli_query($conn, "SELECT * FROM timeline");
$querydeath = mysqli_query($conn, "SELECT death.*, user.name, user.fraction_ethnic, COALESCE(timeline.place, '(not found)') as place, timeline.time FROM death
INNER JOIN user ON death.userid = user.id
LEFT JOIN timeline ON death.timelineid = timeline.id
WHERE death.id = '$id'");
$data = mysqli_fetch_array($querydeath);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Death | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_insert.css">
    <style>
        a[href="admin_death.php"] {
            background: gray;
        }
    </style>
</head>
<body>
    <?php include "admin_nav.php" ?>
    <main>
        <?php if ($data['id'] != "") { ?>
            <form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Name</td>
                        <td>
                            <select name="name" required>
                                <option value="">-- Select Name --</option>
                                <?php
                                while ($dataname = mysqli_fetch_array($queryname)) {
                                    if ($dataname['id'] == $data['userid']) {
                                        echo "<option value='" . $dataname['id'] . "' selected>" . $dataname['name'] . "</option>";
                                    } else {
                                        echo "<option value='" . $dataname['id'] . "'>" . $dataname['name'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td>
                            <select name="place" required>
                                <option value="">-- Select Place --</option>
                                <?php
                                mysqli_data_seek($queryplace, 0);
                                while ($dataplace = mysqli_fetch_array($queryplace)) {
                                    if ($dataplace['id'] == $data['timelineid']) {
                                        echo "<option value='" . $dataplace['id'] . "' selected>" . $dataplace['place'] . "</option>";
                                    } else {
                                        echo "<option value='" . $dataplace['id'] . "'>" . $dataplace['place'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>
                            <input type="file" name="image" accept="image/*" required>
                            <img src="../assets/images/death/<?= $data['image'] ?>" style="width: 70px"><?= $data['image'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Cause</td>
                        <td><input type="text" name="cause" value="<?= $data['cause'] ?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
            </form>
        <?php } else { echo "Not Found."; } ?>
    </main>
</body>
</html>