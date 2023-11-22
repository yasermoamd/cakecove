 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/product.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ktQAw6ch1xgkqSYI2tj3P5kMIp90EDVft2Qz31O//5LOUzQ8jc6UqKMJhzj4VvH6F6QQBDS1M9tK4j0e+ia+ig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cake Cove</title>
  </head>
  <body>
    <?php
      include('./backend/services/category_products.php');
    /*
        include('./views/navbar.php'); 
        require_once('./backend/config/config.php');
        require_once('./backend/utilities/func.php');
        require_once('./backend/services/Category.php');
        require_once('./backend/services/Product.php');

        // database connection instance
        $database = new Database();
        $conn = $database->conn;

        $utilitie = new UtilitiesFunction();
        $category_name = $utilitie->getCategoryFromUrl();
        

        // category instance
        $category = new Category($conn);
        $category_id = $category->getCatIdByName($category_name);

        // product instance
        $product = new Product($conn);
        $product_list = $product->getProductByCategoryId($category_id);
       
        
        foreach ($product_list as $item) {
            echo $item['name'] . ' - ' . $item['description'] . '<br>';
        }
 */
    ?>

    
    <!--- Start Footer --->

    <footer>
      <div class="top-footer">
        <div class="left-footer">
          <p>Menu</p>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">CupCake</a></li>
            <li><a href="#">Wedding</a></li>
            <li><a href="#">Treats</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </div>

        <div class="center-footer">
          <p>Customer Service</p>

          <ul>
            <li><a href="#">Our Stores</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Policy Privacy</a></li>
          </ul>
        </div>

        <div class="right-footer">
          <p>Social Media</p>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
          </ul>
        </div>
      </div>
      <p>Created by Cake Cove. © 2023</p>
    </footer>

    <!---End Footer--->
    <!-- Carousel script link -->
    <!-- <script src="./public/js/carousel.js"></script> -->

    <script>
      function toggleNav() {
        const nav = document.querySelector('header nav ul');
        nav.classList.toggle('active');
      }
  
    </script>
  </body>
</html>



 