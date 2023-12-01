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
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $fraction_ethnic = $_POST['fraction_ethnic'];
    list($fraction, $ethnic) = explode(' - ', $fraction_ethnic);
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_name = time() . "-" . $image_name;
    $image_path = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/profile_pic/" . $image_name;
    if (move_uploaded_file($image_tmp, $image_path)) {
        $image_name = $image_name;
    } else {
        $image_name = $data['image'];
    }
    $query = mysqli_query($conn, "UPDATE user SET nickname = '$nickname', password = '$password', name = '$name', fraction_ethnic = '$fraction_ethnic', avatar = '$image_name' WHERE id = '$id'");
    if ($query) {
        header("Location: admin_user.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
$query = mysqli_query($conn, "SELECT * FROM user WHERE id = '$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User | Admin | AoT Rumbling</title>
    <link rel="stylesheet" href="css/admin_main.css">
    <link rel="stylesheet" href="css/admin_insert.css">
    <style>
        a[href="admin_user.php"] {
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
                        <td>Nickname</td>
                        <td><input type="text" name="nickname" value="<?= $data['nickname'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" value="<?= $data['password'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?= $data['name'] ?>" required></td>
                    </tr>
                    <tr>
                        <td>Fraction - Ethnic</td>
                        <td>
                            <select name="fraction_ethnic" id="fractionEthnicSelect" onchange="updateEthnicSelect()">
                                <option value="Yeagerist" <?= ($data['fraction_ethnic'] === 'Yeagerist') ? 'selected' : '' ?>>Yeagerist</option>
                                <option value="Alliance" <?= ($data['fraction_ethnic'] === 'Alliance') ? 'selected' : '' ?>>Alliance</option>
                                <option value="Warrior" <?= ($data['fraction_ethnic'] === 'Warrior') ? 'selected' : '' ?>>Warrior</option>
                                <option value="Anti Marleyan" <?= ($data['fraction_ethnic'] === 'Anti Marleyan') ? 'selected' : '' ?>>Anti Marleyan</option>
                                <option value="Military" <?= ($data['fraction_ethnic'] === 'Military') ? 'selected' : '' ?>>Military</option>
                                <option value="Civil" <?= ($data['fraction_ethnic'] === 'Civil') ? 'selected' : '' ?>>Civil</option>
                            </select>
                            <select name="ethnic" id="ethnicSelect" style="display: none; margin-top: 10px">
                                <?php
                                $ethnic = (isset($data['ethnic'])) ? $data['ethnic'] : '';
                                ?>
                                <option value="Eldian" <?= ($ethnic === 'Eldian') ? 'selected' : '' ?>>Eldian</option>
                                <option value="Marley" <?= ($ethnic === 'Marley') ? 'selected' : '' ?>>Marley</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Avatar</td>
                        <td>
                            <input type="file" name="image" accept="image/*" required>
                            <img src="../assets/images/profile_pic/<?= $data['avatar'] ?>" style="width: 70px"><?= $data['avatar'] ?>
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
<script>
    function updateEthnicSelect() {
        var fractionEthnicSelect = document.getElementById('fractionEthnicSelect');
        var ethnicSelect = document.getElementById('ethnicSelect');
        ethnicSelect.style.display = 'none';
        switch (fractionEthnicSelect.value) {
            case 'Alliance':
            case 'Military':
            case 'Civil':
                ethnicSelect.style.display = 'block';
                break;
            default:
                break;
        }
    }
    updateEthnicSelect();
</script>
</html>