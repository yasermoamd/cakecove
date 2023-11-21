<?php
require __DIR__ . '/../backend/services/CategoryType.php';

 $cateoryType = new CategoryType;
?>
<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<header>
      <h1>CakeCove</h1>
      <button class="hamburger-icon" onclick="toggleNav()">
        <i class="fa-solid fa-bars"></i>
      </button>

      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="category_products.php?category=<?php echo $cateoryType::CAKE; ?>">Cake</a></li>
          <li><a href="category_products.php?category=<?php echo $cateoryType::CUPCAKE; ?>">CupCake</a></li>
          <li><a href="category_products.php?category=<?php echo $cateoryType::WEDDING; ?>">Wedding</a></li>
          <li><a href="category_products.php?category=<?php echo $cateoryType::TREATS; ?>">Treats</a></li>
          <li><a href="category_products.php?category=<?php echo $cateoryType::ACCESSORIES; ?>">Accessories</a></li>
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

          <a href="cart.html">
            <img src="/public/icons/icons8-bag-50.png" id="bag_img" alt="" />
          </a>
        </span>
      </div>
    </header>