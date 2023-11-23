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
     session_start();

     function addToCart($id, $name, $description, $price, $image) {
       if (!isset($_SESSION['cart'])) {
         $_SESSION['cart'] = [];
        };
        if (isset($_SESSION['cart'][$id])) {
          $_SESSION['cart'][$id]['quantity']++;
        } else {
          $_SESSION['cart'][$id] = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $image,
            'quantity' => 1
          ];
        }
      }

    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id => $item) {
        echo $item['name'] . ' - ' . $item['description'] . '<br>';
      }
    } else {
        echo 'Your cart is empty';
      }
  

   ?>
  </body>
</html>
