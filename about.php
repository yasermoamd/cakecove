<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/product.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/about.css" />
    <title>About - Cake Cove</title>
  </head>
  <body>
    <!-- navbar for the webpage -->
    <?php include("./components/navbar.php"); ?>
    <!-- Navbar End Here -->

    <!--  Start Main content -->
    <main>
      <section class="main_section">
        <div class="our_story">
          <img
            src="https://www.lolascupcakes.co.uk/image/about_header.png?Version=132935544180000000"
            alt="Our story"
          />
        </div>
        <div class="story_description">
          <h3>Our Story</h3>
          <p>
            Our story For fresh, handcrafted and simply delicious cupcakes,
            cakes and brownies, Lola’s Cupcakes is just the answer. You may have
            seen us in when passing through Waterloo, Liverpool Street or
            Victoria station or perhaps you caught a glimpse of us whilst
            shopping in Selfridges, Westfield or Brent Cross. Wherever you enjoy
            a Lola's, you can be assured that our entire range of products are
            made fresh by hand each day, using only the best ingredients.
            Starting things the old fashioned way, Lola’s Cupcakes was born back
            in 2006, when two friends, Victoria Jossel and Romy Lewis, turned
            baking into a business. With orders pouring in, the pair opened
            concessions in Selfridges, Topshop and a flagship store in Mayfair.
            Today we have over 30 locations including stores and collection
            lockers and deliver lots of products nationwide.
          </p>
        </div>
      </section>

      <section class="service_section">
        <div>
          <img src="./public/icons/truck.svg" alt="" />
          <span>10291</span>
          <p>Delivery been serviced</p>
        </div>
        <div>
          <img src="./public/icons/cupcake.svg" alt="" />
          <span>93.3372</span>
          <p>CupCake serviced</p>
        </div>
        <div>
          <img src="./public/icons/candle.svg" alt="" />
          <span>2.901932</span>
          <p>Birthday serviced</p>
        </div>
      </section>
    </main>

    <!-- End of Main content-->
    <?php include("./components/footer.php"); ?>
    <!---End Footer--->
  </body>
</html>
