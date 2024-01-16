<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/login.css">  
     <link rel="stylesheet" href="../assets/css/header.css">
     <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Login</title>
</head>
<body>
    <?php include_once('../components/Header.php'); ?>
    <div class="container">
    <?php
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            require_once '../services/connect.php';
            
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            
            if ($result) {
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                if ($user) {
                    $storedPassword = $user['password'];
                    
                    if ($password === $storedPassword) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: ../index.php");
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

        <section class="login__block" title="Log in section">
            <form action="login.php" method="post">
                <div class="form" style="height: 300px;">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email:" require>
                    </div>
        
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password:" require>
                    </div>

                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Login" name="login">
                    </div>

                    <div class="reset_link">
                        <p>You don't have an account?</p>
                        <a href="/auth/register.php">Register</a>
                    </div>    
                </div>
            </form>
        </section>
    </div>

    <?php include_once('../components/Footer.php'); ?>
</body>
</html> 