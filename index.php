 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="image/png" sizes="16x16" rel="icon" href="https://img.icons8.com/color/48/shop.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ktQAw6ch1xgkqSYI2tj3P5kMIp90EDVft2Qz31O//5LOUzQ8jc6UqKMJhzj4VvH6F6QQBDS1M9tK4j0e+ia+ig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cake Cove</title>
  </head>
  <body>
  <?php
  /**
   * App - class that handle application.
   * @param: $database, $utilitie, $category, $product, $conn.
   * @functions: __construct, run.
   */
class App {

    private $database; 

    /**
     * __construct - constructor function that create connection to database, 
     * Return: connection to database.
     * Create database connection instance
     */
    public function __construct() {
        // Include necessary files
        include('./components/navbar.php');  
    } 
    public function run() { 
        // Include footer

        // Include necessary files
        include('./components/slideshow.php');
          
          echo '</div>';
        include('./components/footer.php');
    }
 
}
    /**
     * Create and run the application
     */
    $app = new App();
    $app->run();
  ?> 
  </body>
</html>



 