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
            
            require_once '../utilities/conn.php';

            /**
             * $sql - var store query
             * $result - store result of query
             * 
             */
            
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            
            /**
             * if return result
             */
            if ($result) {
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                /**
                 * if user exsist  compare password
                 */
                if ($user) {
                    $storedPassword = $user['password'];
                    
                    if ($password === $storedPassword) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        $_SESSION["loggedin"] = true;
                        $isAdmin = "SELECT is_admin FROM users WHERE email = '$email' ";
                        $isAdmin_result = mysqli_query($conn, $isAdmin); // Corrected the variable name here
                        if ($isAdmin_result) {
                            // Check if the user is an admin
                            $_SESSION["isAdmin"] = true;
                            $row = $isAdmin_result->fetch_assoc(); // Corrected the variable name here
                            /**
                             * if user is admin redirect to dashboard
                             */
                            if ($row['is_admin'] == '1') {
                                header("Location: ../dashboard/index.php");
                            } else {
                                /**
                                 * normal user redirect to product page.
                                 */
                                header("Location: ../index.php");
                            }
                        }
                        die();
                    } else {
                        echo "<div class='alert-danger'>Password does not match!</div>";
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

            <div class="welcome__image">
                <h1>Welcome Back!</h1>
            </div>

            <form action="login.php" method="post">
                <div class="form" style="height: 300px;">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email:" require>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password:" require>
                    </div>

                    <p><a href="register.php">You don't have an account?</a></p>

                    <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Login" name="login">
                    </div>
                </div>
            </form>

         </section>
    </div>

    <?php include_once('../components/Footer.php'); ?>
</body>
</html> 
