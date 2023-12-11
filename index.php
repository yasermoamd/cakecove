<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cake Cove</title>
</head>
<body>
    <?php 
      include("./components/Header.php");
    ?>
     <main style="height: 100dhv;">
     <?php
     
          include("./utilities/conn.php");
          $sql = "SELECT * FROM products";
          $raw_results = $conn->query($sql);

          if ($raw_results !== false && $raw_results->num_rows > 0) {
            echo "<div class='product__container'>";
            while($results = mysqli_fetch_assoc($raw_results)){ 
                echo '
                <div class="product__list">
                    <div class="product__item" key="' . $results['id'] . '">
                        <img src="' . $results['image'] . '" alt="">
                        <article> 
                            <h3 class="product_title">' . $results['name'] . '</h3>
                            <span class="description">' . $results['description'] . '</span>
                            <span class="product_price">£ ' . $results['price'] . '</span>
                        </article>
                        <div class="product__buttons">
                        <a class="view_product" href="/components/product.php?id=' . $results['id'] .'&title='. $results['name'] .'"> 
                            <input value="View" type="button" class="view_btn"  /></a>
                            <input type="button" class="basket_btn" value="Add To Basket" />
                        </div>
                    </div>
                </div>';
            }
            echo "</div>";
              } else{ 
                  echo "No results";
              } 
   ?>
     </main>
    <?php include("./components/Footer.php");  ?>
</body>
</html>