<div class="navbar">
    <div>☕ Coffee Shop</div>
    <div>
        <a href="index.php">Trang chủ</a>
        <a href="menu.php">Menu</a>

        <?php if(isset($_SESSION['user'])): ?>
            <span><?= $_SESSION['user'] ?></span>
            <a href="logout.php">Đăng xuất</a>
        <?php else: ?>
            <a href="login.php">Đăng nhập</a>
            <a href="register.php">Đăng ký</a> 
        <?php endif; ?>
    </div>
</div>