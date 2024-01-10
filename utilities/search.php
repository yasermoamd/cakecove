<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./templates/css/style.css">
    <title>Product</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="query" placeholder="Search..." />
        <input type="submit" value="Search" />
    </form>

<?php
    require_once './service/connect.php';
    $query = $_GET['query']; 
    $min_length = 5;

if(strlen($query) >= $min_length){
    $query = htmlspecialchars($query); 
    

    $sql = "SELECT * FROM cake 
    WHERE (`product_name` LIKE '%".$query."%') OR (`product_description` LIKE '%".$query."%')";
    $raw_results = $conn->query($sql);

    if ($raw_results !== false && $raw_results->num_rows > 0) {
        while ($results = mysqli_fetch_assoc($raw_results)) {
            echo "
            <div class='search-output'>
                <div class='product_item' key='" . $results['product_id'] . "'>
                    <h3>" . $results['product_name'] . "</h3>
                    <img src='" . $results['image'] . "' alt='Product Image'>
                    <p>" . $results['product_description'] . "</p>
                    <p>Price: $" . $results['product_price'] . "</p>
                </div>
            </div>";
        }
    } else {
        echo "No results";
    }
    

}
else{ 
    echo "Minimum length is ".$min_length;
}

?>
</body>
</html>