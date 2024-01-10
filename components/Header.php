<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheet"> 
    <link rel="stylesheet" href="../templates/css/style.css">
    <link rel="stylesheet" href="../templates/css/header.css">
</head>
<body>  

       <nav class="navbar">
        <a href="../index.php" id="header-text" class="brand-title">Cake Cake</a>
            <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            </a>
            <div class="navbar-links">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/products.php">Products</a></li> 
                        
                        <li><a href="/templates/about.php">About US</a></li>
                        <li><a href="/templates/contact.php">Contact US</a></li> 
                        <div class="register_cart">
                        <form method="post" action="../utilities/cart.php">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <input type="hidden" name="action" value="render">
                            <button><img src="../templates/img/shopping-cart.png" alt="" style="width:45px; height:45px;"></button>
                        </form> 
                            <?php if (isset($_SESSION['loggedin']) != false && $_SESSION['loggedin']): ?>
                            <a href="/auth/logout.php" class="material-icons logout">logout</a>
                            <?php else: ?>
                            <a href="/auth/login.php" class="material-icons">person</a>
                            <?php endif; ?>
                        </div>
                    </ul>
            </div>
      </nav>

         
</body>
</html>
