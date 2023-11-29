<?php
 /**
  * Category - class that handle category.
  * @param: $conn - connection to database.
  * @functions: getCatIdByName.
  */
class Category {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * getCatIdByName - function that return category id based on category name.
     * @param: $categoryName.
     * Return: category id.
     */
    public function getCatIdByName($categoryName) {
        $sql = "SELECT id FROM categories WHERE name = '$categoryName'";
        $result  = $this->conn->query($sql);
        $result_id = $result->fetch_array()[0] ?? '';
        return $result_id;
    }
}

?>