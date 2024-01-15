<?php
session_start(); 
require_once('./service/connect.php');
require_once('./utilities/addToCart.php');

// if (!isset($_SESSION["user"])) {
//     header("Location: ./auth/login.php");
// }


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === 'add') {
    $_SESSION['form_submitted'] = true;
    $_SESSION['message'] = 
        '<div id="popup" class="popup-message">
        <div class="popup-message-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <p>
                <img src="./templates/img/done.png" height="30" width="30">
                <span>Product was successfully added to your cart!</span>
            </p>
        </div>
    </div>
    <script src="./components/notification.js"></script>';
    
    $product_id = $_POST['product_id'];
    addToCart($product_id, 1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/notification.css">
    <title>Cake Cove</title>
</head>
<body>
    
    <?php require_once './components/Header.php'; ?>

    <div class="message">
        <?php
            if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted']) {
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                unset($_SESSION['form_submitted']);
            }
        ?>
    </div>

    <section class="slide__block">
        <div class="slideshow"></div>
        <div class="text">
            <span>
                <h1>Do you want to test our Cake?</h1>
                <p>Click to the button below and get it now!</p>
                <button><a href="#food-section">Buy now!</a></button>
            </span>
        </div>
    </section>

    <section class="menu">
        <h1 id="menu-text">The most popular products</h1>
        <div class="food-row" id="food-section">
            <?php
                $sql = "SELECT * FROM cake";
                $result = $conn->query($sql);

                if ($result !== false && $result->num_rows > 0) {
                    echo '<div class="food-row">';
                
                    $count = 0; 
                
                    while ($row = $result->fetch_assoc()) {
                        if ($count % 4 == 0 && $count != 0) {
                            echo '</div><div class="food-row">';
                        }
                        echo '
                            <div class="food-card">
                                <img src="'. $row['product_image'] .'" width="360" height="360" id="img">
                                <h2>' . $row['product_name'] . '</h2>
                                <container>
                                    <span>
                                        <p id="product_desc">' . $row['product_description'] . '</p>
                                        <p>Price: <span>£ ' . $row['product_price'] . '</span></p>
                                    </span>
                                     <div class="buttons">
                                        <form method="post" action="./pages/product_details.php/id='. $row['product_id'] .'">
                                            <input type="hidden" name="product_id" value="' . (isset($row['product_id']) ? $row['product_id'] : '') . '">
                                            <input type="hidden" name="action" value="add">
                                            <input type="submit" value="View">
                                        </form>
                                        
                                        <form method="post" action="' . $_SERVER["PHP_SELF"] . '" onsubmit="showPopup();">
                                            <input type="hidden" name="product_id" value="' . (isset($row['product_id']) ? $row['product_id'] : '') . '">
                                            <input type="hidden" name="action" value="add">
                                            <input type="submit" value="Add to Cart">
                                        </form>

                                     </div>

                                </container>
                            </div>';
                        $count++;
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </section>

    <?php
        require './components/Footer.php';
    ?>

    <script src="./components/notification.js"></script>
</body>
</html>