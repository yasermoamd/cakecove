
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Product</h1>

<?php
    require_once '../vendor/autoload.php';
    include_once '../backend/config/config.php';
    require_once '../backend/services/Product.php';
    // database connection instance
    $database = new Database();
    $conn = $database->conn;
    // product instance
    $product = new Product($conn);

    $product_list = $product->getProductById(1);

    foreach ($product_list as $item) {
        echo $item['name'] . ' - ' . $item['description'] . '<br>';
    }
?>
</body>
</html>