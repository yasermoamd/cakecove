<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <title>Gallery</title>
</head>
<body>
    <?php
        require '../components/Header.php';
    ?>

    <section class="slideshow__block">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="https://th.bing.com/th/id/R.e1034a41ad7a2755b3bd3c847bd7e64b?rik=8pLzKJej9PvRKQ&riu=http%3a%2f%2fs3tkoncepts.com%2fwp-content%2fuploads%2f2019%2f09%2fKFC-Store-Design_Article.jpg&ehk=qdHF4npbr8gNIqrsARkMeKH3m%2fS5fGhJSUtT%2f3zInsw%3d&risl=&pid=ImgRaw&r=0" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="https://www.nrn.com/sites/nrn.com/files/gallery_images/5-Cicis_GameArea.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="https://i.pinimg.com/originals/18/d2/63/18d26385dfe523768ae600acfd69ce6e.jpg" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
    </section>

    <section class="gallery">
        <h1>Our Gallery</h1>
        
        <div class="first-gallery">
            <img src="img/section1.jpg" alt="Background">
            <span id="gallery-text">
                <h3>Section #1</h3>
                <span>Indulge your cravings at our vibrant fast-food haven! This section captures the essence of a bustling eatery, where savory aromas waft through the air, and the lively atmosphere invites you to savor every moment. From sizzling burgers to crispy fries, this image encapsulates the heart of our fast-food shop, where flavorsome delights and quick service converge for a delightful dining experience.</span>
            </span>
        </div>

        <div class="second-gallery">
            <img src="img/background2.jfif" alt="Background">
            <span id="gallery-text">
                <h3>Section #2  </h3>
                <span>Step into a world of fast-food bliss with this enticing section! Immerse yourself in the dynamic scene of our shop, where the artistry of food preparation meets the anticipation of eager customers. From the sizzling grills to the assembly line of culinary perfection, this image captures the pulse of our fast-paced, flavor-packed haven.</span>
            </span>
        </div>

        <div class="third-gallery">
            <img src="img/background3.jfif" alt="Background">
            <span id="gallery-text">
                <h3>Section #3</h3>
                <span>Embark on a visual feast as you explore this snapshot of our fast-food paradise. Here, the vibrant colors and tantalizing aromas harmonize to create an irresistible ambiance. Witness the precision of our kitchen in action and feel the energy of a place where every bite tells a delicious story. Join us in this snapshot of culinary delight!</span>
            </span>
        </div>
        
    </section>

    <?php
        require '../components/Footer.php';
    ?>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>

</body>
</html>