<?php

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

    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id = '$id'";
        $result  = $this->conn->query($sql);

        $products = [];

        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }

    public function updateProduct($productId, $name, $description, $price) {
        $sql = "UPDATE products SET name=?, description=?, price=? WHERE productID=?";
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
