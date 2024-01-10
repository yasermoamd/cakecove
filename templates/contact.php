<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css"> 
    <link rel="stylesheet" href="./css/footer.css"> 
    <title>Contact us</title>
</head>
<body>
    <?php
        include('../components/Header.php');
    ?>

    <main>
        <section class="form">
            <h1>Contact Us</h1>
                <form action="" method="post">
                    <label for="fullName">Full Name</label>
                    <input type="text" name="FullName" id="FullName" placeholder="Enter your FullName" required  autocomplete="off" />
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required  autocomplete="off" />
                    <select name="cetegory" id="category">Select
                        <option value="Select One Of The Purpose">Select One Of The Purpose</option>   
                        <option value="general">General</option>
                        <option value="technical">Technical</option>
                        <option value="marketing">Marketing</option>
                    </select>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message" required></textarea>
                    <button type="submit" id="form__button">Send</button>
                </form>
        </section>
    </main>
    

 

    <?php
        include('../components/Footer.php');
    ?>
 
</body>
</html>