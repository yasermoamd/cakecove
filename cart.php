<?php
session_start();
$cart = isset($_SESSION["cart"]) ? $_SESSION["cart"] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        /* Add your styles for cart display here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Your Shopping Cart</h1>

    <?php if (empty($cart)) : ?>
        <p>Your shopping cart is empty.</p>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>action</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $item) : ?>
                    <tr>
                        <?php if (isset($item['name'])) : ?>
                            <td><?php echo $item['name']; ?></td>
                        <?php else : ?>
                            <td>Name not available</td>
                        <?php endif; ?>
                        <?php if (isset($item['price'])) : ?>
                            <td>£<?php echo $item['price']; ?></td>
                        <?php else : ?>
                            <td>Price not available</td>
                        <?php endif; ?>
                        <td><?php echo $item['quantity']; ?></td>
                        <?php if (isset($item['price'])) : ?>
                            <td>£<?php echo $item['price'] * $item['quantity']; ?></td>
                        <?php else : ?>
                            <td>Total not available</td>
                        <?php endif; ?>
                        <td><button onclick="<?php session_destroy(); ?>">remove</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p>Total: £<?php echo array_sum(array_map(function($item) {
            return isset($item['price']) ? $item['price'] * $item['quantity'] : 0;
        }, $cart)); ?></p>
    <?php endif; ?>
</body>
</html>
