<head>
    <link rel="stylesheet" href="../public/css/style.css"> 
  </head>
<nav class="navbar">
        <div class="brand-title">Cake Cake</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shops</a></li> 
            <li><a href="#">Partner</a></li>
            <li><a href="/about.php">About Us</a></li>
            <li><a href="/contactus.php">Contact Us</a></li>
          </ul>
          <div class="register_cart">
            <a href="cart.php">Login</a>
            <a href="register.php">Register</a>
        </div>
        </div>
        
      </nav>
<script>
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]

    toggleButton.addEventListener('click', () => {
      navbarLinks.classList.toggle('active')
    })
</script>