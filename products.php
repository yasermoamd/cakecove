
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <?php
    session_start();

    // Check if the 'email' key is set in the session
    if (isset($_SESSION['email'])) {
        // Output the email address
        echo $_SESSION['email'];
    } else {
        // If 'email' is not set in the session
        echo "Email not set in session";
    }
    ?>
</body>
</html>