<?php
include "db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: index.php");
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Email không tồn tại!";
    }
}
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