<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/product.css">
    <title>Product</title>
</head>
<body>
<?php
    require_once("../components/Header.php");
    require_once("../functions/product_functions.php");
    require_once("../components/slideshow.php");
    require_once("../services/connect.php");
?>

<section>
    <div class="product_category">
        <div class="category_name">Cake</div>
        <div class="view_all_category">View All</div>
    </div>
    <?php product_by_category(1);  ?>
   </section>
   <section>
    <div class="product_category">
        <div class="category_name">CupeCake</div>
        <div class="view_all_category">View All</div>
    </div>
    <?php product_by_category(2);  ?>
   </section>
   <section>
    <div class="product_category">
        <div>Wedding</div>
        <div class="view_all_category">View All</div>
    </div>
    <?php product_by_category(3);  ?>
   </section>

   <section>
    <div class="product_category">
        <div>Treats</div>
        <div class="view_all_category">View All</div>
    </div>
    <?php product_by_category(4);  ?>
   </section>

   <section>
    <div class="product_category">
        <div>Accessories</div>
        <div class="view_all_category">View All</div>
    </div>
    <?php product_by_category(5);  ?>
   </section>
<?php
    require_once("../components/Footer.php");
?>
</body>
</html>