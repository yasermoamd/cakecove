<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <title>About us</title>
</head>
<body>
    <?php
        require '../components/Header.php';
    ?>

    <span id="about-header"><h1>About Us</h1></span>
    <section class="aboutUs">
        <span>
            <img src="./img/about.jfif" alt="">
            <span>
                <h4>Something About Us</h4>
                <span id="about-text">
                    Welcome to FFFood, where indulgence meets convenience in every savory bite! At FFFood, we take pride in crafting a fast-food experience that transcends the ordinary. Established with a passion for flavor and a commitment to quality, our fast-food haven has become a go-to destination for those seeking a quick and delicious escape from the mundane.
                </span>
            </span>
        </span>
    </section>     

    <section class="about-text__block">
        <span id="text__block">
            <h1>Our story begins with a simple belief:</h1>
            <span>Fast food can be both speedy and superb. Here at FFFood, we've mastered the art of serving up mouthwatering meals without compromising on taste or freshness. From sizzling burgers to crispy fries and everything in between, our menu is a symphony of flavors designed to satisfy your cravings and leave you coming back for more.</span>
        </span>

        <span id="text__block">
            <h1>What sets us apart? </h1>
            <span>It's not just about the food; it's about the experience. Our dedicated team is driven by a shared enthusiasm for providing exceptional service, ensuring that every visit to FFFood is not just a meal but a moment of culinary delight. Whether you're on the go, grabbing a quick lunch, or treating yourself to an indulgent dinner, we've got you covered with a diverse menu that caters to every palate.</span>
        </span>

        <span id="text__block">
            <h1>The taste of our food</h1>
            <span>At FFFood, we embrace the fast-paced nature of modern life without compromising on quality. Join us on a culinary journey where speed meets satisfaction, and every bite tells a delicious story. We invite you to be a part of our food-loving community, where fast food is not just a meal – it's an experience.</span>
        </span>
    </section>

    <section class="about_stats">
        <span>
            <img src="./img/burger.png" alt="">
            <h1>We already sold </h1>
            <h4>a 3915 butgers!</h4>
        </span>

        <span>
            <img src="./img/delivery-.png" alt="">
            <h1>More than 499</h1>
            <h4>delivered orders</h4>
        </span>

        <span>
            <img src="./img/rating.png" alt="">
            <h1>Our rating</h1>
            <h4>is - 4.99</h4>
        </span>
    </section>

    <?php
        require '../components/Footer.php';
    ?>
    
</body>
</html>