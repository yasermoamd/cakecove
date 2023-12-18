<!-- Inside remove-from-cart.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["id"])) {
        $productId = $_POST["id"];

        // Find the item in the cart and remove it
        $cart = $_SESSION["cart"];
        foreach ($cart as $key => $item) {
            if ($item["id"] == $productId) {
                unset($cart[$key]);
                break;
            }
        }

        // Update the session with the modified cart
        $_SESSION["cart"] = $cart;

        echo "Product removed from cart";
    } else {
        http_response_code(400); // Bad Request
        echo "Invalid request parameters";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method";
}
?>
