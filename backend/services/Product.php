<?php
 session_start();
class Product {
    private $conn;

    public function __construct($conn) {
       
        $this->conn = $conn;
    }

    public function createProduct($name, $description, $price) {
        $sql = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssd", $name, $description, $price);

        return $stmt->execute();
    }

    /**
     * readProduct - function that fetch all product from database.
     * Return: function return list of products.
     */
    public function readProducts() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);

        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }

    /**
     * getProductById - get product by ID
     * @param: $id 
     * Return: a product.
     */

    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id = '$id'";
        $result  = $this->conn->query($sql);

        $products = [];

        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }

    /**
     * getProductByCategoryId - fucntion that return product based on category.
     * @param: $id of category.
     * Return: array of products.
     */
     public function getProductByCategoryId($id) {
        try {
            $sql = "SELECT * FROM products WHERE categoryID = '$id'";
            $result  = $this->conn->query($sql);

            $products = [];

            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }

            if (count($products) > 0) {
                return $products;
            } else {
                return "No products found in this category.";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
        }



    public function displayProduct($product_list) {
        foreach ($product_list as $item) {
            echo '
            <div class="section_type">
            <div class="product_item" key="' . $item['id'] . '">
                <img src="' . $item['image'] . '" alt="">
                <article> 
                    <h3 class="product_title">' . $item['name'] . '</h3>
                    <span class="description">' . $item['description'] . '</span>
                    <span class="product_price">£ ' . $item['price'] . '</span>
                </article>
                <div class="btns">
                <a class="view_product" href="views/view_product.php?id=' . $item['id'] . '"> 
                    <input value="View" type="button" class="view_btn"  /></a>
                    <button type="submit" class="basket_btn" onclick="addToCart()>">Add To Basket</button>
                </div>
            </div>
        </div>';
        }
        }
        

    public function updateProduct($productId, $name, $description, $price) {
        $sql = "UPDATE products SET name=?, description=?, price=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $description, $price, $productId);

        return $stmt->execute();
    }

    public function deleteProduct($productId) {
        $sql = "DELETE FROM products WHERE productID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $productId);

        return $stmt->execute();
    }
}
?>
