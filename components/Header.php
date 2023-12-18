<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
     rel="stylesheet"> 
</head>
<?php session_start(); ?>
<nav class="navbar">
        <div class="brand-title">Cake Cake</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/products.php">Products</a></li> 
          
          <li><a href="/about.php">About US</a></li>
          <li><a href="/contact.php">Contact US</a></li> 
          <div class="register_cart">
              <a href="/cart.php" class="material-icons">shopping_cart</a>
              <?php if (isset($_SESSION['loggedin']) != false && $_SESSION['loggedin']): ?>
              <a href="/auth/logout.php" class="material-icons logout">logout</a>
              <?php else: ?>
              <a href="/auth/login.php" class="material-icons">person</a>
              <?php endif; ?>
          </div>
        </ul>
        </div>
        
      </nav>
<script>
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]

    toggleButton.addEventListener('click', () => {
      navbarLinks.classList.toggle('active')
    })
</script> 