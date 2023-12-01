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
    $name = $_POST['name'];
    $place = $_POST['place'];
    $cause = mysqli_real_escape_string($conn, $_POST['cause']);
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $path = "assets/images/death/" . $image;
    $userquery = mysqli_query($conn, "SELECT * FROM user WHERE name = '$name'");
    $userdata = mysqli_fetch_array($userquery);
    $name = $userdata['id'];
    $checkdead = mysqli_query($conn, "SELECT * FROM death WHERE userid = '$name'");
    $isdead = mysqli_fetch_assoc($checkdead);
    if ($isdead) {
        echo "<script>alert('This character is already dead!')</script>";
        echo "<script>window.location.href='admin_death_insert.php'</script>";
        exit();
    }
    if (move_uploaded_file($tmp, $path)) {
        $timelinequery = mysqli_query($conn, "SELECT * FROM timeline WHERE place = '$place'");
        $timelinedata = mysqli_fetch_array($timelinequery);
        $place = $timelinedata['id'];
        $queryinsert = mysqli_query($conn, "INSERT INTO death (userid, timelineid, cause, image) VALUES ('$name', '$place', '$cause', '$image')");
        if ($queryinsert) {
            $makedead = mysqli_query($conn, "UPDATE user SET status = 'Dead' WHERE id = '$name'");
            if ($makedead) {
                echo "<script>alert('Your Dead!')</script>";
            } else {
                echo "Error: " . $makedead . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: " . $queryinsert . "<br>" . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Death | Admin | AoT Rumbling</title>
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
        <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <select name="name" required>
                            <option value="">-- Select Name --</option>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM user");
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data['name'] . "'>" . $data['name'] . "</option>";
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
                            $query = mysqli_query($conn, "SELECT * FROM timeline");
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='" . $data['place'] . "'>" . $data['place'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" accept="image/*" required></td>
                </tr>
                <tr>
                    <td>Cause</td>
                    <td><input type="text" name="cause" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="insert" value="Insert"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>