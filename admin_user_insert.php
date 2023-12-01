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
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $fraction = $_POST['fraction'];
    $ethnic = $_POST['ethnic'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $path = "assets/images/profile_pic/" . $image;
    if (move_uploaded_file($tmp, $path)) {
        switch ($fraction) {
            case 'Yeagerist':
                $ethnic = 'Eldian';
                break;
            case 'Alliance':
                break;
            case 'Warrior':
                $ethnic = 'Marley';
                break;
            case 'Anti Marleyan':
                $ethnic = 'Marley';
                break;
            case 'Military':
                break;
            case 'Civil':
                break;
            default:
                break;
        }
        $query = mysqli_query($conn, "INSERT INTO user (nickname, password, name, fraction_ethnic, avatar, status, role) VALUES ('$nickname', '$password', '$name', '$fraction - $ethnic', '$image', 'Alive', 'User')");
        if ($query) {
            header("Location: admin_user.php");
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
    <title>Insert User | Admin | AoT Rumbling</title>
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
        <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nickname</td>
                    <td><input type="text" name="nickname" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Fraction - Ethnic</td>
                    <td>
                        <select name="fraction" id="fractionSelect" required>
                            <option value="Yeagerist">Yeagerist</option>
                            <option value="Alliance">Alliance</option>
                            <option value="Warrior">Warrior</option>
                            <option value="Anti Marleyan">Anti Marleyan</option>
                            <option value="Military">Military</option>
                            <option value="Civil">Civil</option>
                        </select>
                        <select name="ethnic" id="ethnicSelect" style="display: none; margin-top: 10px">
                            <option value="Eldian">Eldian</option>
                            <option value="Marley">Marley</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Avatar</td>
                    <td><input type="file" name="image" accept="image/*" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="insert" value="Insert"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
<script>
    document.getElementById('fractionSelect').addEventListener('change', function() {
        var fractionValue = this.value;
        var ethnicSelect = document.getElementById('ethnicSelect');
        ethnicSelect.selectedIndex = 0;
        ethnicSelect.style.display = 'none';
        if (fractionValue === 'Alliance' || fractionValue === 'Military' || fractionValue === 'Civil') {
            ethnicSelect.style.display = 'block';
        }
    });
</script>
</html>