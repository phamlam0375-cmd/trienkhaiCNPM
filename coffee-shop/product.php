<?php include "db.php"; ?>
<link rel="stylesheet" href="assets/style.css">
<?php include "components/navbar.php"; ?>

<?php
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();
?>

<div class="container">
    <div class="card">
        <img src="<?= $row['image'] ?>">
        <div class="card-body">
            <h2><?= $row['name'] ?></h2>
            <p class="price"><?= $row['price'] ?> VNĐ</p>
            <p><?= $row['description'] ?></p>
            <a href="menu.php" class="btn">← Quay lại</a>
        </div>
    </div>
</div>