<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    $productId = $_POST["id"];
    $productName = $_POST["name"];
    $productPrice = $_POST["price"];

    // Check if the product is already in the cart
    $existingItem = array_search($productId, array_column($_SESSION["cart"], 'id'));

    if ($existingItem !== false) {
        $_SESSION["cart"][$existingItem]["quantity"]++;
    } else {
        $_SESSION["cart"][] = [
            "id" => $productId,
            "name" => $productName,
            "price" => $productPrice,
            "quantity" => 1,
        ];
    }

    echo "Product added to cart";
} else {
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method";
}
?>
