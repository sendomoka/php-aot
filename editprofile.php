<?php
session_start();
include "config/models.php";

if (!isset($_SESSION['nickname'])) {
    header("Location: login.php");
}

$id = $_GET['id'];
if (isset($_POST['editprofile'])) {
    $nickname = $_POST['nickname'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $avatar = $_FILES['avatar']['name'];
    editProfile_handling($id, $nickname, $name, $password, $avatar);
}
$user = editProfile_getUserById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - AoT Rumbling</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/editprofile.css">
</head>
<body>
    <?php include "components/header.php" ?>
    <main>
        <?php if($user['id'] != "") { ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Change Avatar</td>
                <td>
                    <div class="avatar">
                        <img src="assets/images/profile_pic/<?= $user['avatar'] ?>" width="124px">
                        <input type="file" name="avatar" accept="image/png, image/jpeg" value="<?= $user['avatar'] ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>Nickname</td>
                <td><input type="text" name="nickname" value="<?= $user['nickname'] ?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?= $user['name'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?= $user['password'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="editprofile" value="Edit Profile"></td>
            </tr>
        </table>
        </form>
        <?php } else { echo "<p>Tidak ada data.</p>"; } ?>
    </main>
</body>
</html>