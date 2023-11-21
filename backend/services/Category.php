<?php
 
class Category {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

   /**
     * getProductsByCategory - Fetch products by category name.
     * 
     * @param string $categoryName
     * @return array
     */
    public function getProductsByCategory($categoryName) {
        $sql = "SELECT * FROM products WHERE category = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $categoryName);
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