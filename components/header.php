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

</style>

    <header class="header">
        <div class="left-side">
            <a href="index.php">
                <img src="assets/images/aot-logo.png" alt="Logo">
            </a>
        </div>
    
        <div class="right-side">
            <a href="<?= isset($_SESSION['role']) && $_SESSION['role'] === 'Admin' ? 'admin' : 'editprofile.php?id=' . (isset($_SESSION['id']) ? $_SESSION['id'] : ''); ?>">
                <img src="assets/images/profile_pic/<?= isset($_SESSION['avatar']) && $_SESSION['avatar'] != '' ? $_SESSION['avatar'] : 'user.png' ?>" alt="User Image">
            </a>
            <div class="user-info">
                <p class="username"><?= isset($_SESSION['name']) && $_SESSION['name'] != '' ? $_SESSION['name'] : 'Give Name' ?></p>
                <p class="role"><?= isset($_SESSION['fraction_ethnic']) && $_SESSION['fraction_ethnic'] != '' ? $_SESSION['fraction_ethnic'] : 'Give Fraction Ethnic' ?></p>
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