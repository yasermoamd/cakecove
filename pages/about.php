<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" href="../assets/css/about_us.css" />
    <title>About - Cake Cove</title>
  </head>
  <body>
    <!-- navbar for the webpage -->
    <?php include("../components/Header.php"); ?>
    <!-- Navbar End Here -->


    <div class="about_video">
        <video width="800" height="400" controls>
          <source src="../assets/videos/production_id.mp4" type="video/mp4">
          <source src="../assets/videos/production_id.ogg" type="video/ogg">
          Your browser does not support HTML video.
        </video>
    </div>

    <section class="about_content">
         <div class="about_img">
            <img src="../assets/img/cake_store.jpg" alt="">
          </div>
          <div class="about_content_desc"> 
             <h4>Something About Us</h4>
             <p id="about-text">
                Welcome to Cake Cove, where indulgence meets convenience in every savory bite! At CakeCove, we take pride in crafting a fast-food experience that transcends the ordinary. Established with a passion for flavor and a commitment to quality, our fast-food haven has become a go-to destination for those seeking a quick and delicious escape from the mundane.
             </p> 
            </div>
    </section>   

    <!--  Start Main content -->
    <main>
       <section></section>
       <section class="services">
        <div class="col">
          <img src="../assets/icons/truck.svg" alt="" />
          <span>10291</span>
          <p>Delivery been serviced</p>
        </div>
        <div class="col">
          <img src="../assets/icons/cupcake.svg" alt="" />
          <span>93.3372</span>
          <p>CupCake serviced</p>
        </div>
        <div class="col">
          <img src="../assets/icons/candle.svg" alt="" />
          <span>2.901932</span>
          <p>Birthday serviced</p>
        </div>
      </section>
       <section class="about__faq">
          <div class="faq-header">Frequently Asked Questions</div>
          <div class="faq-content">
            <div class="faq-question">
              <input id="q1" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q1" class="panel-title">What products do you offer?</label>
              <div class="panel-content">We offer a wide range of freshly baked goods, including bread, cakes, pastries, cookies, and more. 
                Explore our menu to discover our delicious offerings.</div>
            </div>
            
            <div class="faq-question">
              <input id="q2" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q2" class="panel-title">How do I place an order?</label>
              <div class="panel-content">
                To place an order, simply browse our website, select the items you want, and add them to your cart. 
                Follow the checkout process to provide your delivery details and complete your purchase.</div>
            </div>

            <div class="faq-question">
              <input id="q2" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q2" class="panel-title">Can I customize my order?</label>
              <div class="panel-content">
                Yes, we offer customization options for certain products. <br/>
                Please check the product description or contact our customer support to inquire about customization possibilities.</div>
            </div>

            <div class="faq-question">
              <input id="q2" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q2" class="panel-title">What payment methods do you accept?</label>
              <div class="panel-content">
                We accept major credit cards, debit cards, and other secure payment methods. <br />
                Your payment information is encrypted for a secure transaction.</div>
            </div>

            <div class="faq-question">
              <input id="q2" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q2" class="panel-title">Do you offer delivery?</label>
              <div class="panel-content">Absolutely! We prioritize the security of your information. Our website uses encryption technology to ensure a safe and secure online shopping experience.</div>
            </div>
            
            <div class="faq-question">
              <input id="q3" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q3" class="panel-title">How can I contact customer support?</label>
              <div class="panel-content" >You can reach our customer support team through the <a href="contact.php">Contact Us</a> page on our website or via email at [support@cakecove.com]. We aim to respond to inquiries within an hour between our working time.</div>
            </div>
          </div>
       </section>
     
    </main>

    <!-- End of Main content-->
    <?php include("../components/Footer.php"); ?>
    <!---End Footer--->
  </body>
</html>