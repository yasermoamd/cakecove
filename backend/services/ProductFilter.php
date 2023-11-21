<?php
class ProductFilter {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

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
