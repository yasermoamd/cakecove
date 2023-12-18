<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
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
                <div class="product__item" id="product_' . $results['id'] . '">
                    <img src="' . $results['image'] . '" alt="">
                    <article>
                        <h3 class="product_title">' . $results['name'] . '</h3>
                        <span class="description">' . $results['description'] . '</span>
                        <span class="product_price">£ ' . $results['price'] . '</span>
                    </article>
                    <div class="product__buttons">
                    <form id="form_' . $results['id'] . '" action="/components/add-to-cart.php" method="post">
                        <input type="hidden" name="id" value="' . $results['id'] . '">
                        <input type="hidden" name="image" value="'. $results['image'] .'">
                        <input type="hidden" name="name" value="' . $results['name'] . '">
                        <input type="hidden" name="price" value="' . $results['price'] . '">
                    </form>
                    <a class="view_product" href="#" onclick="addToCart(' . $results['id'] . '); return false;">
                        <input value="View" type="button" class="view_btn" />
                    </a>
                    <input type="button" class="basket_btn" value="Add To Basket" onclick="submitForm(' . $results['id'] . ');" />
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

<!-- Your existing HTML for product.php -->

<script>
    function submitForm(productId) {
        // Trigger the form submission
        document.getElementById('form_' + productId).submit();
    }

    function addToCart(productId, event) {
        // Additional logic if needed before submitting the form
        // ...
        event.preventDefault();
        // Create a new FormData object
        var formData = new FormData();
        formData.append('id', productId);

        // Now submit the form asynchronously
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "cart.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response, if needed
                console.log(xhr.responseText);
            }
        };

        xhr.send(formData);
    }
</script>

</body>
</html>