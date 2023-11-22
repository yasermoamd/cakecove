<?php
    include('../config/config.php');
    require_once('../utilities/func.php');
    require_once('./Category.php');
    require_once('./Product.php');

    // database connection established
    $database = new Database();
    $conn = $database->conn;

    // // utilites function
    // $utilize = new UtilitiesFunction();

    // $category_name = $utilize->getCategoryFromUrl();
    // // Create an instance of the Category class
    // $category = new Category($conn);

    // $category_id = $category->getCatIdByName();
 
?>
