<?php include "db.php"; ?>
<link rel="stylesheet" href="assets/style.css">
<?php include "components/navbar.php"; ?>

<div class="container">
    <h2>Menu cà phê</h2>

    <div class="grid">
        <?php
        $result = $conn->query("SELECT * FROM products");
        while($row = $result->fetch_assoc()):
        ?>
        <div class="card">
            <img src="<?= $row['image'] ?>">
            <div class="card-body">
                <h3><?= $row['name'] ?></h3>
                <p class="price"><?= $row['price'] ?> VNĐ</p>
                <a href="product.php?id=<?= $row['id'] ?>" class="btn">Chi tiết</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>