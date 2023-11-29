<?php
/**
 * ProductFilter - class that handle product filter.
 * @param: $conn - connection to database.
 * @functions: searchProducts, filterProductsByPrice.
 */

class ProductFilter {
    private $conn;
    /**
     * __construct - constructor function that create connection to database.
     * Return: connection to database.
     */
    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * searchProducts - function that return products based on search query.
     * @param: $query.
     * Return: array of products.
     */
    public function searchProducts($query) {
        $query = htmlspecialchars($query);
        $sql = "SELECT * FROM products WHERE (`name` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%')";
        $result = $this->conn->query($sql);

        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }

    /**
     * filterProductsByPrice - function that return products based on price range.
     * @param: $minPrice, $maxPrice.
     * Return: array of products.
     */
    public function filterProductsByPrice($minPrice, $maxPrice) {
        $sql = "SELECT * FROM products WHERE price BETWEEN ? AND ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("dd", $minPrice, $maxPrice);
        $stmt->execute();

        $result = $stmt->get_result();
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }

        return $products;
    }
}
?>
