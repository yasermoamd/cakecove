<?php
    require_once("../components/Header.php");

    require_once('../components/slideshow.php');

    echo "Product Page!";



    function product_by_category($category_name) {
        $sql = "SELECT *  FROM cake WHERE categories.name = $category_name";
        echo '
            <div class="food-card">
                    <img src="'. $row['product_image'] .'" width="360" height="360" id="img">
                    <h2>' . $row['product_name'] . '</h2>
                    <container>
                        <span>
                            <p id="product_desc">' . $row['product_description'] . '</p>
                            <p>Price: <span>£ ' . $row['product_price'] . '</span></p>
                        </span>
                            
                            <form method="post" action="' . $_SERVER["PHP_SELF"] . '" onsubmit="showPopup();">
                                <input type="hidden" name="product_id" value="' . (isset($row['product_id']) ? $row['product_id'] : '') . '">
                                <input type="hidden" name="action" value="add">
                                <input type="submit" value="Add to Cart">
                            </form>

                    </container>
            </div>';
    }

    require_once("../components/Footer.php");
?>