<style>

.header {
    display: flex;
    justify-content: space-between;
    height: 4rem;
    background-image: url('assets/images/main-bg.png');
    background-size: cover;
    z-index: 999;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding: 45px;
}

.left-side{
    display: flex;
    align-items: center;
}

.left-side img{
    height: 70px;
    width: 100%;
}

.right-side {
    display: flex;
    align-items: center;
}

.right-side img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.user-info {
    margin-left: 10px;
}

.user-info .username {
    font-weight: bold;
    color: white;
    margin-top: 8px;
    text-align: left;
}

.user-info .role {
    font-size: 0.8em;
    color: gray;
    margin-bottom: 10px;
    text-align: left;
}

.user {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: white;
}

.text-user {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.text-user .username {
    font-weight: 700;
    font-size: 20px;
}

.text-user .role {
    font-size: 14px;
    color: gray;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background: black;
    min-width: 160px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: .5rem;
    padding: 1rem;
    border-top: 10px solid gray;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: 100%;
}

.dropdown-content a.admin {
    background-color: #468662;
}

.dropdown-content a.edit {
    background-color: #afa341;
}

.dropdown-content a.logout {
    background-color: #a43f39;
}

.dropdown-content a:hover {
    background-color: gray;
}

</style>

    <header class="header">
        <div class="left-side">
            <a href="index.php">
                <img src="assets/images/aot-logo.png" alt="Logo">
            </a>
        </div>
        <div class="right-side">
            <div class="dropdown">
                <a class="user" href="#">
                    <img src="assets/images/profile_pic/<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] != '' ? $_SESSION['avatar'] : 'user.png' ?>" alt="User Image">
                    <div class="text-user">
                        <p class="username"><?= isset($_SESSION['name']) && $_SESSION['name'] != '' ? $_SESSION['name'] : 'Give Name' ?></p>
                        <p class="role"><?= isset($_SESSION['fraction_ethnic']) && $_SESSION['fraction_ethnic'] != '' ? $_SESSION['fraction_ethnic'] : 'Give Fraction Ethnic' ?></p>
                    </div>
                </a>
                <div class="dropdown-content">
                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') {
                        echo '<a class="admin" href="admin_timeline.php">Admin Panel</a>';
                    }
                    ?>
                    <a class="edit" href="editprofile.php?id=<?= isset($_SESSION['id']) ? $_SESSION['id'] : '' ?>">Edit Profile</a>
                    <a class="logout" href="logout.php">Logout</a>
                </div>
            </div>
        </div>

    </header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var header = document.querySelector(".header");
        window.addEventListener("scroll", function () {
        var headerHeight = header.offsetHeight;
        var scrollPosition = window.scrollY;
        var opacity = scrollPosition / headerHeight;
        opacity = Math.min(0.2, opacity);
        header.style.backgroundImage = "url('assets/images/main-bg.png')";
        header.style.backgroundSize = "cover";
        header.style.opacity = 1 - opacity;
        });
    });
</script>