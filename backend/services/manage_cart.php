<?php

function addToCart($id, $name, $description, $price, $image) {
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
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
     echo cartRender($id, $name, $description, $price, $image);
}

function cartRender($id, $name, $description, $price, $image) {
    echo '
        <div class="section_type">
          <div class="product_item" key="' . $id . '">
            <img src="' . $image . '" alt="">
            <article> 
                <h3 class="product_title">' . $name . '</h3>
                <span class="description">' . $description . '</span>
                <span class="product_price">£ ' . $price . '</span>
            </article>
          </div>
        </div>';
}