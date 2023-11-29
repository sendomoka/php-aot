<?php
$host = "localhost";
$user = "ecom4781_peaure";
$pass = "peaurebergnewseldian854";
$db = "ecom4781_attackontitan_rumbling";

if ($_SERVER['HTTP_HOST'] == 'localhost' || strpos($_SERVER['HTTP_HOST'], 'php-aot.test') !== false) {
    $user = "root";
    $pass = "";
    $db = "attackontitan_rumbling";
}

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function login ($nickname, $password) {
    global $conn;
    if (empty($nickname) || empty($password)) {
        echo '<script>alert("All fields must be filled!");</script>';
        return;
    }
    $sql = "SELECT * FROM user WHERE nickname = '$nickname' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($query);
    if ($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['fraction_ethnic'] = $user['fraction_ethnic'];
        $_SESSION['status'] = $user['status'];
        $_SESSION['role'] = $user['role'];
        if ($user['status'] == 'Alive') {
            echo '<script>alert("Selamat datang!");</script>';
            header("Location: index.php");
            exit();
        } else {
            echo '<script>alert("Anda sudah mati!");</script>';
        }
    } else {
        echo '<script>alert("Nickname atau password salah!");</script>';
    }
}

function register($nickname, $password, $confirmpassword, $name, $fraction_ethnic) {
    global $conn;
    if (empty($nickname) || empty($password) || empty($name) || empty($confirmpassword) || empty($fraction_ethnic)) {
        echo '<script>alert("All fields must be filled!");</script>';
        return;
    }
    if ($password !== $confirmpassword) {
        echo '<script>alert("Password and Confirm Password do not match!");</script>';
        return;
    }
    $checkNicknameSql = "SELECT * FROM user WHERE nickname = '$nickname'";
    $checkNicknameQuery = mysqli_query($conn, $checkNicknameSql);
    $existingUser = mysqli_fetch_assoc($checkNicknameQuery);
    if ($existingUser) {
        echo '<script>alert("Nickname already exists!");</script>';
        return;
    }
    $sql = "INSERT INTO user (nickname, password, name, avatar, fraction_ethnic, status, role) VALUES ('$nickname', '$password', '$name', 'user.png', '$fraction_ethnic', 'Alive', 'Client')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Registration successful! Welcome to the world of Attack on Titan."); window.location.href = "login.php"</script>';
        exit();
    } else {
        echo '<script>alert("Registration failed. Please try again.");</script>';
    }
}

function editProfile_getUserById($id) {
    global $conn;
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($query);
}

function editProfile($id, $nickname, $name, $password, $avatar) {
    global $conn;
    $avatar = mysqli_real_escape_string($conn, $avatar);
    $sql = "UPDATE user SET nickname = '$nickname', name = '$name', password = '$password', avatar = '$avatar' WHERE id = '$id'";
    return mysqli_query($conn, $sql);
}

function editProfile_handling($id, $nickname, $name, $password, $avatar) {
    global $conn;
    $avatar = mysqli_real_escape_string($conn, $avatar);
    if ($_FILES['avatar']['error'] == 0) {
        $avatar = $_FILES['avatar']['name'];
        $tmp = $_FILES['avatar']['tmp_name'];
        $path = "assets/images/profile_pic/" . $avatar;
        move_uploaded_file($tmp, $path);
    }
    $result = editProfile($id, $nickname, $name, $password, $avatar);
    if ($result) {
        $_SESSION['nickname'] = $nickname;
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        $_SESSION['avatar'] = $avatar;
        echo '<script>alert("Berhasil mengedit profile!");</script>';
    } else {
        echo '<script>alert("Gagal mengedit profile!");</script>';
    }
}
?>