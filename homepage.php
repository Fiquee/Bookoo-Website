<!DOCTYPE html>
<html>
<?php session_start() ?>
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="homepage-style.css">
  <link rel = "shortcut icon" href="Images/cow-colored.png" sizes="16x16" type = "image/png" />
  <title>Bookoo | Homepage</title>

</head>

<body>
  <header>
    <div class="logo-container">
      <h4 class="logo-text">Bookoo</h4>
    </div>
    <nav>
      <ul class="navlist">
        <li><a href="#">Help</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="mainpage.php">Log out</a></li>
      </ul>
    </nav>
    <div class="cart-icon">
      <img src="Images/shopping-cart.png">
    </div>
  </header>

    <section class="category-container">
      <div class="category-list">
        <a class="category-tab active" href="homepage.php">Home</a>
        <a class="category-tab" href="new-arrival-page.php">New Arrival</a>
        <a class="category-tab" href="HOTS-page.php">HOTS</a>
        <a class="category-tab" href="action-page.php">Action</a>
        <a class="category-tab" href="fiction-page.php">Fiction</a>
        <a class="category-tab" href="romantic-page.php">Romantic</a>
        <a class="category-tab" href="thriller-page.php">Thriller</a>
        <a class="category-tab" href="horror-page.php">Horror</a>
        <a class="category-tab" href="education-page.php">Education</a>
      </div>
      <div class="searchbar-container">
        <div class="searchbar-title">Search</div>
        <div class="searchbar-input">
          <input type="text" id="searchinput" placeholder="Search your book" name="searchinput">
        </div>
        <div class="search-button">
          <a href="#"><img src="Images/search.png"></a>
        </div>
      </div>
      </section>


    <!-- slideshow new arrival / hots -->
      <section class="content-container">
        <div class="new-arr-title">New Arrivals !</div>
        <div class="slideshow-container">
          <div class="mySlides slideanim">
            <img src="Images/Slideshow1.png">
            <h4 class="caption-text">Caption text</h4>
          </div>
          <div class="mySlides slideanim">
            <img class="slideshow-image" src="Images/Slideshow2.png" style="width:100%">
            <div class="caption-text">Caption text</div>
          </div>
          <div class="mySlides slideanim">
            <img class="slideshow-image" src="Images/Slideshow3.png" style="width:100%">
            <div class="caption-text">Caption text</div>
          </div>
          <a class="arrow-button" onclick="plusSlides(-1)">&#10094;</a>
          <a class="arrow-button right-button" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br><br>
        <div>
          <ul class="dotlist">
            <li><a class="dot" onclick="currentSlide(1)"></a></li>
            <li><a class="dot" onclick="currentSlide(2)"></a></li>
            <li><a class="dot" onclick="currentSlide(3)"></a></li>
          </ul>
        </div>


      </section>


      <script>
        var slideIndex = 1;
        var tabindex = 1;
        showSlides(slideIndex);
        blacktab(tabindex);


        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");

          if (n > slides.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          // setTimeout(changeslides, p2);  //to automate the slideshow
        }

        function activecategorylist(n){
          blacktab(tabindex = n);
        }

        function blacktab(n){
          var i;
          var tab = document.getElementsByClassName("category-tab");
          console.log(tab.length);
          for (i = 0; i < tab.length; i++) {
            tab[i].className = tab[i].className.replace(" active","");
          }
          tab[tabindex-1].className += " active";
        }
      </script>
</body>

</html>
