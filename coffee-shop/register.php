<?php include "db.php"; ?>

<link rel="stylesheet" href="assets/style.css">

<?php
$error = "";
$success = "";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    // Validate
    if ($password != $confirm) {
        $error = "Mật khẩu không khớp!";
    } else {
        // Kiểm tra email tồn tại
        $check = $conn->query("SELECT * FROM users WHERE email='$email'");
        if ($check->num_rows > 0) {
            $error = "Email đã tồn tại!";
        } else {
            // Hash password (an toàn hơn md5)
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $conn->query("INSERT INTO users(username,email,password) VALUES('$username','$email','$hash')");
            $success = "Đăng ký thành công! Đăng nhập ngay.";
        }
    }
}
?>

<div class="form-box">
    <h2>Đăng ký</h2>

    <?php if($error): ?>
        <p style="color:red"><?= $error ?></p>
    <?php endif; ?>

    <?php if($success): ?>
        <p style="color:green"><?= $success ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Tên người dùng" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <input type="password" name="confirm" placeholder="Nhập lại mật khẩu" required>

        <button name="register">Đăng ký</button>
    </form>

    <p style="text-align:center">
        Đã có tài khoản? <a href="login.php">Đăng nhập</a>
    </p>
</div>