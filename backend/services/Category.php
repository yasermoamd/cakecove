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
     * @return int
     */
    public function getCatIdByName($categoryName) {
        $sql = "SELECT id FROM categories WHERE name = $categoryName";
        return $sql;
    }
}

?>