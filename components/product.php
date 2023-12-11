<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product_detail.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title><?php 
     $title = $_GET['title'];
    echo "Cake Cove | $title"; ?></title>
</head>
<body>
        <?php
            require_once('../utilities/conn.php');
            include('../components/Header.php');

                echo '<h1>Product Details</h1>';
                
                $id = $_GET['id']; 
                $sql = "SELECT * FROM products WHERE id = $id";

                $raw_results = $conn->query($sql);
                if ($raw_results !== false && $raw_results->num_rows > 0) {

                    while($results = mysqli_fetch_assoc($raw_results)){ 
                        echo '
                        <div class="product">
                            <div class="product_item" key="' . $results['id'] . '">
                                <div class="product__image"> <img src="' . $results['image'] . '" title='. $results['name'] .' alt='. $results['name'] .'></div>
                                 <div class="product_details">
                                    <article> 
                                    <h3 class="product_title">' . $results['name'] . '</h3>
                                    <span class="description">' . $results['description'] . '</span>
                                    <span class="product_price">£ ' . $results['price'] . '</span>
                                    </article>
                                    <div class="btns">
                                    <a class="view_product" href="views/view_product.php?id=' . $results['id'] . '"> 
                                        <input value="View" type="button" class="view_btn"  /></a>
                                        <input type="button" class="basket_btn" value="Add To Basket" />
                                    </div>
                                 </div>
                            </div>
                        </div>';
                    }
                } else 
                    {
                        echo "No results";
                    }
    ?>


<?php include('../components/Footer.php'); ?>
</body>
</html>