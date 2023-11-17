<style>

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    width: 100%;
    height: 60px;
}

.center-logo img {
    height: 90px;
    width: 15%; 
}

.center-logo {
    flex-grow: 1;
    text-align: center;
}

.right-side {
    display: flex;
    align-items: center;
}
.right-side span {
    margin-right: 10px;
}
.right-side img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
p{
    color: white;
}

</style>

<header class="header">
    <div class="center-logo">
        <a href="index.php">
            <img src="assets/aot-logo.png" alt="Logo">
        </a>
    </div>
    <div class="right-side">
        <p>Welcome, ...</p>
        <img src="assets/user-photo.png" alt="User Photo">
    </div>
</header>