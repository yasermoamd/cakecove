<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/register.css"> 
     <link rel="stylesheet" href="../assets/css/header.css">
     <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Registration</title>
</head>
<body>
    <?php include_once('../components/Header.php'); ?>
    <div class="container">
<?php
            if(isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repeatPassword = $_POST['repeat_password'];

                // $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $errors = array();

                if(empty($fullname) OR empty($email) OR empty($password) OR empty($repeatPassword)) {
                    array_push($errors, 'All  fields are required!');
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, 'Email is not valid!');
                }
                if (strlen($password) <8) {
                    array_push($errors, 'Password must be at least 8 characters long!');
                }
                if (!$password == $repeatPassword) {
                    array_push($errors, 'Passwords does not match!');
                }

                require_once('../services/connect.php');
                $sql = "SELECT * FROM users WHERE email = '$email' ";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);

                if($rowCount > 0) {
                    array_push($errors, 'Email already exists!');
                }
                if (count($errors) >0) {
                    foreach($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }
                else {
                    $sql = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

                    if($prepareStmt) {
                        mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $password);
                        mysqli_stmt_execute($stmt);
                        echo '<div class="alert alert-success">You are registered successfully!</div>';
                    }
                    else {
                        die("Something went wrong");
                    }
                }
            }
        ?>
        <section class="login__block" title="sign up regisration section">
            <form action="" method="post" class="registration form">
                <div class="form" style="height: 300px;">
                 <h1 class="registration form title">Registration</h1>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter your Full Name" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="repeat_password">Repeat Password</label>
                        <input type="password" name="repeat_password" id="repeat_password" placeholder="Repeat your password" required autocomplete="off">
                    </div>

                    <div class="form-btn">
                            <input type="submit" class="btn btn-primary" value="Register" name="login">
                        </div>
                    <div class="reset_link">
                            <p>Already Have an account?</p>
                            <a href="/auth/login.php">Log in</a>
                        </div>    
                 </div>
        </form>

         </section>
    </div>

    <?php include('../components/Footer.php'); ?>
</body>
</html>