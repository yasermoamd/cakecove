<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Cake Cove FAQ</title>
</head>
<body>

    <?php
        require '../components/Header.php';
    ?>

    <section class="faq">
        <h1>Frequently Asked Questions</h1>

        <div class="questions">
            <div class="question">
                <h2>1. What are your opening hours?</h2>
                <div class="answer">
                    <p>Our fast food shop is open from Monday to Sunday:</p>
                    <ul>
                        <li>Monday to Friday: 10:00 AM - 10:00 PM</li>
                        <li>Saturday and Sunday: 11:00 AM - 11:00 PM</li>
                    </ul>
                </div>
            </div>

            <div class="question">
                <h2>2. Do you offer delivery services?</h2>
                <div class="answer">
                    <p>Yes, we offer delivery services within a certain radius from our shop.<br>Please check our delivery page for more information.</p>
                </div>
            </div>

            <div class="question">
                <h2>3. What payment methods do you accept?</h2>
                <div class="answer">
                    <p>We accept cash, credit/debit cards, and some mobile payment options.<br>Check with our staff for the most up-to-date information.</p>
                </div>
            </div>

            <div class="question">
                <h2>4. Can I customize my order?</h2>
                <div class="answer">
                    <p>Yes, we offer customization options for many of our menu items.<br>Feel free to ask our staff about your preferences.</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

<?php
    require '../components/Footer.php';
?>