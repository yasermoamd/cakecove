<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/contact_us.css"> 
    <link rel="stylesheet" href="../assets/css/footer.css"> 
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
    


    <div class="google_map">
        <h4>find Us Here</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73946.84039885217!2d-5.972307888148074!3d54.60683303058555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486108815274e439%3A0x6938441b09fd9e40!2sCake%20World!5e0!3m2!1sen!2suk!4v1705415830546!5m2!1sen!2suk" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php
        include('../components/Footer.php');
    ?>
 
</body>
</html>