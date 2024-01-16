<head>
    <link rel="stylesheet" href="../assets/css/slide_show.css">
</head>
<body>
<section class="slideshow__block">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://th.bing.com/th/id/R.e1034a41ad7a2755b3bd3c847bd7e64b?rik=8pLzKJej9PvRKQ&riu=http%3a%2f%2fs3tkoncepts.com%2fwp-content%2fuploads%2f2019%2f09%2fKFC-Store-Design_Article.jpg&ehk=qdHF4npbr8gNIqrsARkMeKH3m%2fS5fGhJSUtT%2f3zInsw%3d&risl=&pid=ImgRaw&r=0" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="https://www.nrn.com/sites/nrn.com/files/gallery_images/5-Cicis_GameArea.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
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