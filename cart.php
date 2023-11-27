<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/product.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/about.css" />
    <title>Shopping cart - Cake Cove</title>
  </head>
  <body>
  <?php
    require_once('./backend/services/manage_cart.php');

    if (isset($_POST['addbutton'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];
    
        addToCart($id, $name, $description, $price, $image);
    
      }
   ?>
  </body>
</html>
