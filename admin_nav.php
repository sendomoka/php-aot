<style>
    header .user {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    header .user img {
        width: 40px;
    }
    header .user div p:first-child {
        font-weight: bold;
    }
    header .user div p:last-child {
        font-size: 12px;
        color: gray;
    }

    nav a img[alt="logo"] {
        width: 220px;
    }
    nav div {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: -250px;
    }
    nav div a, nav a[href="logout.php"] {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    nav div a[href="admin_timeline.php"] {
        padding: 10px 74px;
    }
    nav div a[href="admin_death.php"] {
        padding: 10px 91px;
    }
    nav div a[href="admin_user.php"] {
        padding: 10px 98px;
    }
    nav div a:hover {
        background: gray;
    }
    nav div a img, nav a[href="logout.php"] img {
        width: 30px;
    }
    nav div a img[alt="deathicon"] {
        margin-left: -14px;
    }
    nav div a img[alt="usericon"] {
        margin-left: -20px;
    }
    nav a[href="logout.php"] {
        margin-bottom: 20px;
        margin-left: -14px;
        padding: 10px 87px;
        background: rgba(255, 0, 0, 0.3);
    }
    nav a[href="logout.php"]:hover {
        background: rgba(255, 0, 0, 0.5);
    }
</style>
<header>
    <?php
    $currentpage = basename($_SERVER['PHP_SELF'], '.php');
    $pagetitle = '';
    switch ($currentpage) {
        case 'admin_timeline':
            $pagetitle = 'Timeline';
            break;
        case 'admin_timeline_insert':
            $pagetitle = 'Insert Timeline';
            break;
        case 'admin_timeline_detail':
            $pagetitle = 'Detail Timeline';
            break;
        case 'admin_timeline_update':
            $pagetitle = 'Update Timeline';
            break;
        case 'admin_death':
            $pagetitle = 'Death';
            break;
        case 'admin_death_insert':
            $pagetitle = 'Insert Death';
            break;
        case 'admin_death_detail':
            $pagetitle = 'Detail Death';
            break;
        case 'admin_death_update':
            $pagetitle = 'Update Death';
            break;
        case 'admin_user':
            $pagetitle = 'User';
            break;
        case 'admin_user_insert':
            $pagetitle = 'Insert User';
            break;
        case 'admin_user_update':
            $pagetitle = 'Update User';
            break;
    }
    ?>
    <h2><?= $pagetitle ?></h2>
    <div class="user">
        <img src="assets/images/profile_pic/<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] != '' ? $_SESSION['avatar'] : 'user.png' ?>" alt="User Avatar">
        <div>
            <p><?= isset($_SESSION['name']) && $_SESSION['name'] != '' ? $_SESSION['name'] : 'Give Name' ?></p>
            <p><?= isset($_SESSION['fraction_ethnic']) && $_SESSION['fraction_ethnic'] != '' ? $_SESSION['fraction_ethnic'] : 'Give Fraction Ethnic' ?></p>
        </div>
    </div>
</header>
<nav>
    <a href="/">
        <img src="assets/images/aot-logo.png" alt="logo">
    </a>
    <div>
        <a href="admin_timeline.php">
            <img src="assets/images/tlicon.png" alt="tlicon">
            Timeline
        </a>
        <a href="admin_death.php">
            <img src="assets/images/deathicon.png" alt="deathicon">
            Death
        </a>
        <a href="admin_user.php">
            <img src="assets/images/usericon.png" alt="usericon">
            User
        </a>
    </div>
    <a href="logout.php">
        <img src="assets/images/logouticon.png" alt="logouticon">
        Logout
    </a>
</nav>