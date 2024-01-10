<?php
require_once('./service/connect.php');

function addToCart($productId, $quantity) {
    global $conn;

    $checkProduct = mysqli_query($conn, "SELECT * FROM cake WHERE product_id = $productId");

    if (mysqli_num_rows($checkProduct) > 0) {
        $existingCartItem = mysqli_query($conn, "SELECT * FROM cart WHERE product_id = $productId AND session_id = '" . session_id() . "'");

        if (mysqli_num_rows($existingCartItem) > 0) {
            $existingCartItemData = mysqli_fetch_assoc($existingCartItem);
            $newQuantity = $existingCartItemData["quantity"] + $quantity;

            mysqli_query($conn, "UPDATE cart SET quantity = $newQuantity WHERE product_id = $productId AND session_id = '" . session_id() . "'");
        } else {
            mysqli_query($conn, "INSERT INTO cart (product_id, quantity, session_id) VALUES ($productId, $quantity, '" . session_id() . "')");
        }

        header("Location: ".$_SERVER['PHP_SELF']);


        exit();
    } else {
        echo json_encode(["error" => "Invalid product ID"]); 
    }
}