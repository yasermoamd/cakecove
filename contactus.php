<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/contact.css"> 
    <title>Contact us</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>

 <div class="contact">
    <form class="contact-form" id="contactForm">
        <h1>Contact Us</h1>
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Your Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" autocomplete="off" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" autocomplete="off" placeholder="Enter your message"></textarea>
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Contact" name="Contact">
        </div>
    </form>
    </div>


    <div class="map_frame">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2311.1510963611113!2d-5.937970523916972!3d54.60133077267981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48610859e474ed1b%3A0xa5a6c74bf074c85e!2sMillfield%2C%20Belfast!5e0!3m2!1sen!2suk!4v1700690826882!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php
        include('./components/footer.php');
    ?>

</body>
</html>