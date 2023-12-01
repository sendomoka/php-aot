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
    $place = $_POST['place'];
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $undiscovered_death = $_POST['undiscovered_death'];
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_name = time() . "-" . $image_name;
    $image_path = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/timeline/" . $image_name;
    if (move_uploaded_file($image_tmp, $image_path)) {
        $image_name = $image_name;
    } else {
        $image_name = $data['image'];
    }
    $query = mysqli_query($conn, "UPDATE timeline SET place = '$place', details = '$details', time = '$time', undiscovered_death = '$undiscovered_death', image = '$image_name' WHERE id = '$id'");
    if ($query) {
        header("Location: admin_timeline.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

$query = mysqli_query($conn, "SELECT * FROM timeline WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Timeline | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_insert.css">
    <style>
        a[href="admin_timeline.php"] {
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
                        <td>Place</td>
                        <td><input type="text" name="place" value="<?= $data['place'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Details</td>
                        <td><input type="text" name="details" value="<?= $data['details'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td><input type="text" name="time" value="<?= $data['time'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Undiscovered Death</td>
                        <td><input type="number" name="undiscovered_death" value="<?= $data['undiscovered_death'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>
                            <input type="file" name="image" accept="image/*" required>
                            <img src="../assets/images/death/<?= $data['image'] ?>" style="width: 70px"><?= $data['image'] ?>
                        </td>
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