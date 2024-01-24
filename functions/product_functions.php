 <?php
    require_once("../services/connect.php");
    function product_by_category($id) {
        global $conn;

        $sql = "SELECT * FROM cake WHERE categoryID = $id";
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
                                <!-- <p id="product_desc">' . $row['product_description'] . '</p> -->
                                <p>Price: <span>£ ' . $row['product_price'] . '</span></p>
                            </span>

                            <div class="buttons">
                            <form method="post" action="#">
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
    }

?>