<?php
session_start(); 
require_once('../utilities/addToCart.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/product_details.css"> 
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css"> 
    <title> Cake Cove </title>
</head>
<body>
        <?php
            include('../components/Header.php');
            require_once('../utilities/addToCart.php');

                echo '<h1>Product Details</h1>';
                
                $productId = $_POST['product_id'];
                $sql = "SELECT * FROM cake WHERE product_id = $productId";

                $raw_results = $conn->query($sql);
                if ($raw_results !== false && $raw_results->num_rows > 0) {

                    while($row = mysqli_fetch_assoc($raw_results)){ 
                        echo '
                        <div class="food-card">
                                <img src="'. $row['product_image'] .'" width="360" height="360" id="img">
                                <h2>' . $row['product_name'] . '</h2>
                                <container>
                                    <span>
                                        <p id="product_desc">' . $row['product_description'] . '</p>
                                        <p>Price: <span>£ ' . $row['product_price'] . '</span></p>
                                    </span>
                                        
                                        <form method="post" action="../utilities/cart.php" onsubmit="showPopup();">
                                            <input type="hidden" name="product_id" value="' . (isset($row['product_id']) ? $row['product_id'] : '') . '">
                                            <input type="hidden" name="action" value="add">
                                            <input type="submit" value="Add to Cart">
                                        </form>

                                </container>
                            </div>';
                    }
                } else 
                    {
                        echo "No results";
                    }
    ?>


<?php include('../components/Footer.php'); ?>
<script src="./notification.js"></script>

</body>
</html>