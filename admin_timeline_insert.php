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

if (isset($_POST['insert'])) {
    $place = $_POST['place'];
    $details = $_POST['details'];
    $time = $_POST['time'];
    $undiscovered_death = $_POST['undiscovered_death'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $path = "assets/images/timeline/" . $image;

    if (move_uploaded_file($tmp, $path)) {
        $query = mysqli_query($conn, "INSERT INTO timeline (place, details, time, undiscovered_death, image) VALUES ('$place', '$details', '$time', '$undiscovered_death', '$image')");
        if ($query) {
            header("Location: admin_timeline.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Timeline | Admin | AoT Rumbling</title>
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
        <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Place</td>
                    <td><input type="text" name="place" required></td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td><input type="text" name="details" required></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="text" name="time" required></td>
                </tr>
                <tr>
                    <td>Undiscovered Death</td>
                    <td><input type="number" name="undiscovered_death" required></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" accept="image/*" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="insert" value="Insert"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>