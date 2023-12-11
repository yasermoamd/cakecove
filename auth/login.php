<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/login.css">  
     <link rel="stylesheet" href="../css/header.css">
     <link rel="stylesheet" href="../css/footer.css">
    <title>Login</title>
</head>
<body>
    <?php include_once('../components/Header.php'); ?>
    <div class="container">
    <?php
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            require_once '../config/config.php';
            
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                if ($user) {
                    $storedPassword = $user['password'];
                    
                    if ($password === $storedPassword) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: /login.php");
                        die();
                    } else {
                        echo "<div class='alert alert-danger'>Password does not match!</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email not found!</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Error executing the query.</div>";
            }
        }
        ?>

        <section class="form">
            <div class="welcome__image">
                <h1>Welcome Back!</h1>
            </div>
            <form action="" method="post">
                <h1>Login</h1>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required  autocomplete="off" />
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required  autocomplete="off" />
                <button type="submit" name="login" id="form__button">Login</button>
                <a class="page__link" href="register.php">Don't have an account? Register here</a>
        </form>
        </section>
    </div>

    <?php include_once('../components/Footer.php'); ?>
</body>
</html> 
