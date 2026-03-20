<?php
session_start();
session_destroy();
header("Location: login.php");

?>
<link rel="stylesheet" href="assets/style.css">

<div class="auth-bg">
    <div class="form-box">
        <h2>☕ Đăng nhập</h2>

        <form method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>

            <button name="login">Đăng nhập</button>
        </form>

        <p style="margin-top:10px">
            Chưa có tài khoản?
            <a href="register.php">Đăng ký</a>
        </p>
    </div>
</div>