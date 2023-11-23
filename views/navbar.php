<?php
require __DIR__ . '/../backend/services/CategoryType.php';

 $categoryType = new CategoryType;
?>
  <head>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-ktQAw6ch1xgkqSYI2tj3P5kMIp90EDVft2Qz31O//5LOUzQ8jc6UqKMJhzj4VvH6F6QQBDS1M9tK4j0e+ia+ig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<header>
      <h1><a href="/">CakeCove</a></h1>
      <button class="hamburger-icon" onclick="toggleNav()">
        <i class="fa-solid fa-bars"></i>
      </button>

      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="<?php echo $categoryType::CAKE; ?>">Cake</a></li>
          <li><a href="<?php echo $categoryType::CUPCAKE; ?>">CupCake</a></li>
          <li><a href="<?php echo $categoryType::WEDDING; ?>">Wedding</a></li>
          <li><a href="<?php echo $categoryType::TREATS; ?>">Treats</a></li>
          <li><a href="<?php echo $categoryType::ACCESSORIES; ?>">Accessories</a></li>
        </ul>
      </nav>
      <div class="header-right-side">
        <span>
          <input type="search" name="" id="" placeholder="Search..." />

          <button>
            <img src="/public/icons/icons8-search-30.png" alt="" />
          </button>
        </span>

        <span>
          <a href="">
            <img
              src="./public/icons/icons8-person-64.png"
              id="person_img"
              alt=""
            />
          </a>

          <a href="cart.php">
            <img src="/public/icons/icons8-bag-50.png" id="bag_img" alt="" />
          </a>
        </span>
      </div>
    </header>

    <script>
      function toggleNav() {
        const nav = document.querySelector('header nav ul');
        nav.classList.toggle('active');
      }
  
    </script>