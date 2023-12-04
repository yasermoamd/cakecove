
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

    function DisplayProduct($product_list) {
        foreach ($product_list as $item) {
            echo '
            
            <div class="section_type">
            <div class="product_item" key="' . $item['id'] . '">
                <img src="' . $item['image'] . '" alt="">
                <article> 
                    <h3 class="product_title">' . $item['name'] . '</h3>
                    <span class="description">' . $item['description'] . '</span>
                    <span class="product_price">£ ' . $item['price'] . '</span>
                </article>
                <div class="btns">
                <a class="view_product" href="views/view_product.php?id=' . $item['id'] . '"> 
                    <input value="View" type="button" class="view_btn"  /></a>
                    <button type="submit" class="basket_btn" onclick="<?php addToCart(); ?>">Add To Basket</button>
                </div>
            </div>
        </div>';
        }  
    }
?>
</body>
</html>