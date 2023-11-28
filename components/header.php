<style>

.header {
    display: flex;
    justify-content: space-between;
    height: 4rem;
    background-image: url('assets/main-bg.png');
    background-size: cover;
    opacity: 0.8;
    z-index: 999;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding: 0 3rem;
}

.left-side{
    display: flex;
    align-items: center;
}

.left-side img{
    height: 100px;
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
    margin-top: 10px;
    margin-bottom: 15px;
}

.user-info .role {
    font-size: 0.8em;
    color: gray;
    margin-bottom: 10px;
}

</style>

    <header class="header">
        <div class="left-side">
            <a href="index.php">
                <img src="assets/aot-logo.png" alt="Logo">
            </a>
         </div>
    
        <div class="right-side">
            <a href="dashboard.php">
                <img src="assets/Vector.png" alt="User Image">
            </a>
            <div class="user-info">
                <p class="username">Jehian Athaya</p>
                <p class="role">Eldian</p>
            </div>
        </div>
    </header>