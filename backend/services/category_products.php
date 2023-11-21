<?php
    include_once '../backend/config/config.php';
    require_once '../backend/services/Category.php';
    require_once './Category.php';

// database connection established
$database = new Database();
$conn = $database->conn;

// Create an instance of the Category class
$category = new Category($conn);

// Check if a category is selected
if (isset($_GET['category'])) {
    $selectedCategory = $_GET['category'];

    // Get products for the selected category
    $products = $category->getProductsByCategory($selectedCategory);

    // Display the selected category
    echo "<h1>Products for Category: $selectedCategory</h1>";

    // Display the retrieved products
    foreach ($products as $product) {
        echo $product['name'] . ' - ' . $product['description'] . '<br>';
    }
} else {
    // Display a message if no category is selected
    echo "<h1>No category selected</h1>";
}
?>
