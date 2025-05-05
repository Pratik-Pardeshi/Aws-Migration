<?php
require_once 'db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple E-Commerce</title>
    <link rel="stylesheet" href="https://your-cloudfront-domain/styles/style.css">
</head>
<body>
    <h1>Welcome to My Shop</h1>
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="https://your-cloudfront-domain/assets/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" />
                <h2><?= $product['name'] ?></h2>
                <p><?= $product['description'] ?></p>
                <strong>$<?= $product['price'] ?></strong>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
