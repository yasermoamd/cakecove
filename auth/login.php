<!-- <?php 
// session_start();
// if (isset($_SESSION["user"])) {
//     header("Location: ../index.php");
// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
   <?php include("../components/navbar.php"); ?>
    <div class="container">
    <?php
       session_start();
       $temp = "";

       if (isset($_POST['username']) && isset($_POST['password'])  && $_POST['username'] != "" && $_POST['password'] != "") {
            if($_POST['username'] == "admin" && $_POST['password'] == "admin")
                {
                    $_SESSION['loggedin'] = 1;
                    $_SESSION['username'] = "admin";
                    header("Location: products.php");
                } else 
                {
                    $temp = "<p style='color: red;'> Username or password not recognised</p>";
                }
       }
        else 
        {
            $temp = "<p style='color: red;'>Please enter a username or password</p>";
        }
?> 

        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="form" style="height: 300px;">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email:" require>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password:" require>
                </div>
                <p class=""><a href="register.php">You don't have an account?</a></p>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Login" name="login">
                </div>
            </div>
        </form>
    </div>

       <?php include("../components/footer.php"); ?>
</body>
</html>