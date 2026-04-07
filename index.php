<?php
$pdo = new PDO("sqlite:shop.db");
$products = $pdo->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Shop</title>
</head>
<body>
    <h1>Products</h1>

    <?php while ($row = $products->fetch(PDO::FETCH_ASSOC)): ?>
        <p><?= $row['name'] ?></p>
    <?php endwhile; ?>

    <hr>
    <a href="/admin">Admin Page</a>
</body>
</html>