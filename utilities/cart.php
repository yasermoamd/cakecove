<head>
    <link rel="stylesheet" href="../templates/css/style.css">
    <link rel="stylesheet" href="../templates/css/form.css">
    <link rel="stylesheet" href="../templates/css/cart.css">
</head>

<?php

require_once '../service/connect.php';
require_once '../utilities/deliveryFunc.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["product_id"])) {
        $productId = $_POST["product_id"];
        $action = isset($_POST["action"]) ? $_POST["action"] : '';

        if ($action === 'add') {
            addToCart($productId, 1);
        } elseif ($action === 'delete') {
            deleteProduct($productId);
        } elseif ($action === 'render') {
            headerCart();
        } elseif ($action === 'delivery') {
            deliveryProduct();
        } else {
            echo "Invalid action.";
        }
        exit();
    } else {
        echo "Product ID not provided.";
    }
} else {
    echo "Invalid request method.";
}

function renderCart() {
    global $conn;

    $sessionId = session_id();
    $result = mysqli_query($conn, "
        SELECT cart.product_id, cake.product_name, cake.product_price, cart.quantity
        FROM cart
        INNER JOIN cake ON cart.product_id = cake.product_id
        WHERE cart.session_id = '$sessionId'
    ");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $cartItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (empty($cartItems)) {
        require '../components/Header.php';
        echo "
            <span id='empty-cart'>
                <div>
                    <p>Your cart is empty.</p>
                    <button><a href='../index.php'>Comeback to the main page</a></button>
                </div>
            </span>";
    } else {
        $totalPrice = 0;

        require '../components/Header.php';

        echo "<span id='table-text'><h1>Your orders:</h1></span>";
        echo "<table id='product-table'>";
        echo "<thead><tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th></tr></thead>";
        echo "<tbody>";

        foreach ($cartItems as $item) { 
            echo "<tr>";
            echo "<td>{$item['product_id']}</td>";
            echo "<td>{$item['product_name']}</td>";
            echo "<td>£{$item['product_price']}</td>";
            echo "<td>";
            echo "<span id='quantity-{$item['product_id']}'>{$item['quantity']}</span>";
            echo "</td>";
            $itemTotal = $item['product_price'] * $item['quantity'];
            echo "<td id='total-{$item['product_id']}'>£$itemTotal</td>";
            echo "<td>";

            // Delete Button
            echo "<div>
                <form method='POST' action='./cart.php'>
                    <input type='hidden' name='product_id' value='{$item['product_id']}'>
                    <input type='hidden' name='action' value='delete'>
                    <button type='submit' class='remove-from-cart'>Remove</button>
                </form> 
            </div>";

            echo "</td>";
            echo "</tr>";

            $totalPrice += $itemTotal;
        }

        echo "<tr>";
        echo "<td colspan='4'><strong>Total:</strong></td>";
        echo "<td colspan='2' id='cart-total'><strong>£$totalPrice</strong></td>";
        echo "</tr>";

        // Checkout Button
        echo "<tr>";
        echo "<td id='checkout' colspan='6'>";
        echo "<button type='button' onclick='showDeliveryForm();'>Checkout</button>";
        echo "</td>";
        echo "</tr>";

        echo "
            <div id='delivery-form' class='popup-form'>
                <div class='popup-form-content'>
                    <span class='close' onclick='closeDeliveryForm()'>&times;</span>
                    <h2>Delivery Information</h2>
                    <form method='post' action='./cart.php'>
                        <label for='name'>Name:</label>
                        <input type='text' id='name' name='name' required>
                    
                        <label for='address'>Address:</label>
                        <textarea id='address' name='address' rows='4' required></textarea>
                    
                        <label for='email'>Email:</label>
                        <input type='email' id='email' name='email' required>

                        <input type='hidden' name='product_id' value='{$item['product_id']}'>
                        <input type='hidden' name='action' value='delivery'>
                        <button type='submit'>Confirm Delivery</button>
                    </form>
                </div>
            </div>";

        echo "</tbody>";
        echo "</table>";

        echo "<script src='../components/form.js'></script>";
    }
}

function deleteProduct($productId) {
    global $conn;

    $productId = mysqli_real_escape_string($conn, $productId); 
    $deleteQuery = "DELETE FROM cart WHERE product_id = '$productId' AND session_id = '" . session_id() . "'";
    if (mysqli_query($conn, $deleteQuery)) {
        renderCart();
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

function headerCart() {
    global $conn;

    $sessionId = session_id();
    $result = mysqli_query($conn, "SELECT cart.product_id, cake.product_name, cake.product_price, cart.quantity FROM cart INNER JOIN cake ON cart.product_id = cake.product_id WHERE cart.session_id = '$sessionId'");

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $cartItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (empty($cartItems)) {
        require '../components/Header.php';
        echo "
            <span id='empty-cart'>
                <div>
                    <p>Your cart is empty.</p>
                    <button><a href='../index.php'>Comeback to the main page</a></button>
                </div>
            </span>";
    } else {
        $_SESSION['cartItems'] = $cartItems;
        renderCart();
    }
}