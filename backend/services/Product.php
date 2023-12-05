<?php
 session_start();
class Product {
    private $conn;

    public function __construct($conn) {
       
        $this->conn = $conn;
    }

    /**
     * createProduct - function that create new product.
     * @param: $name, $description, $price.
     * Return: true if product is created, false otherwise.
     */
     public function createProduct($name, $description, $price) {
        $sql = "INSERT INTO products (name, description, price) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssd", $name, $description, $price);

        return $stmt->execute();
     }

     /**
      * readProducts - function that return all products.
      * Return: array of products.
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
     * getProductById - function that return product based on id.
     * @param: $id of product.
     * Return: array of products.
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
     * getProductByCategoryId - function that return product based on category id.
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

        /**
         * displayProduct - function that display product.
         * @param: $product_list - array of products.
         * Return: html code of product.
         */
        public function displayProduct($product_list) {
            echo '<div class="section_type">';
            foreach ($product_list as $item) {
                echo '
                 
                <div class="product_item" key="' . $item['id'] . '">
                    <img src="' . $item['image'] . '" alt="">
                    <article> 
                        <h3 class="product_title">' . $item['name'] . '</h3>
                        <span class="description">' . $item['description'] . '</span>
                        <span class="product_price">£ ' . $item['price'] . '</span>
                    </article>
                    <div class="btns">
                        <form method="post">
                            <input type="hidden" name="id" value="' . $item['id'] . '">
                            <input type="hidden" name="name" value="' . $item['name'] . '">
                            <input type="hidden" name="description" value="' . $item['description'] . '">
                            <input type="hidden" name="price" value="' . $item['price'] . '">
                            <input type="hidden" name="image" value="' . $item['image'] . '">
                            <input value="View" type="submit" class="view_btn" />
                            <button type="submit" class="basket_btn" name="addbutton" id="add_to_cart">Add To Basket</button>
                        </form>
                    </div>
                </div>';
            }
            echo ' </div>';
        }

        /**
         * updateProduct - function that update product.
         * @param: $productId, $name, $description, $price.
         * Return: true if product is updated, false otherwise.
         */
        public function updateProduct($productId, $name, $description, $price) {
            $sql = "UPDATE products SET name=?, description=?, price=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssdi", $name, $description, $price, $productId);

            return $stmt->execute();
        }

        /**
         * deleteProduct - function that delete product.
         * @param: $productId.
         * Return: true if product is deleted, false otherwise.
         */
        public function deleteProduct($productId) {
            $sql = "DELETE FROM products WHERE productID=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $productId);

            return $stmt->execute();
        }
}
?>

 
<body>
<script src="../../public/js/cart.js"></script>
</body> 