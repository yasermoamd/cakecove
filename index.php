 
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
class App {

    private $database;
    private $utilitie;
    private $category;
    private $product;
    private $conn;

    public function __construct() {
        // Include necessary files
        include('./views/navbar.php');
        require_once('./backend/config/config.php');
        require_once('./backend/utilities/func.php');
        require_once('./backend/services/Category.php');
        require_once('./backend/services/Product.php'); 

        // Create database connection instance
        $this->database = new Database();
        $this->conn = $this->database->conn;

        // Create utility object
        $this->utilitie = new UtilitiesFunction();

        // Create category and product objects
        $this->category = new Category($this->conn);
        $this->product = new Product($this->conn);
    }

    public function run() {
        $product_list = array();
        // Get category name from URL
        $category_name = $this->utilitie->getCategoryFromUrl();

        // Get category ID from category name
        $category_id = $this->category->getCatIdByName($category_name);

        // Get product list by category ID
        $product_list = $this->product->getProductByCategoryId($category_id);

        // Display product list
        $this->product->displayProduct($product_list);
           
        // Include footer
        include('./views/footer.php');
    }
}
      // Create and run the application
      $app = new App();
      $app->run();
    ?> 
  </body>
</html>



 