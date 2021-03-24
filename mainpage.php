<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mainpage-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel = "shortcut icon" href="Images/cow-colored.png" sizes="16x16" type = "image/png" />
    <title>Bookoo</title>
  </head>

  <body>
    <?php include 'mainpage-navbar.php'?>
    <header id="home" class="main-header">
      <h1 class="brand-name top-brand-name">Bookoo<span><img class="reading-icon" src="Images/reading.png"><span></h1>
    </header>
    <section class="container">
      <div class="row">
        <div class="image column">
          <img class="home-image" src="Images/Armaghs_Robinson_Library.jfif">
        </div>
        <div class="text column">
          <div class="home-image-title">Bookoo
            <div class="home-image-desc">Here is where you find books for yourself or your kids</div>
          </div>
        </div>
      </div>
    </section>

    <!-- page 2 -->

    <div class="breaker"></div>
    <div id="about" class="about-header-title">About</div>
    <section class="container2">
      <div class="clip clip1">
        <div class="about-content">
          <h2 class="about-title">About us</h2>
          <p class="about-desc">This is about us description</p>
        </div>
      </div>
      <div class="clip clip2">
        <div class="about-content">
          <h2 class="about-title">What we do ?</h2>
          <p class="about-desc">This is what we do description</p>
        </div>
      </div>
      <div class="clip clip3">
        <div class="about-content">
          <h2 class="about-title">Contacts</h2>
          <p class="about-desc">This is contacts description</p>
        </div>
      </div>
    </section>

    <!-- page 3 (slideshow) -->

    <div class="breaker2"></div>
    <div id="new" class="arr-header-title">New Arrivals</div>
    <section class="slideshow-container">
      <div class="mySlides slideanim">
        <img class="slideshow-image" src="Images/Slideshow1.png" style="width:100%">
        <div class="caption-text">Caption text</div>
      </div>
      <div class="mySlides slideanim">
        <img class="slideshow-image" src="Images/Slideshow2.png" style="width:100%">
        <div class="caption-text">Caption text</div>
      </div>
      <div class="mySlides slideanim">
        <img class="slideshow-image" src="Images/Slideshow3.png" style="width:100%">
        <div class="caption-text">Caption text</div>
      </div>
      <a class="arr-button" onclick="plusSlides(-1)">&#10094;</a>
      <a class="arr-button right-button" onclick="plusSlides(1)">&#10095;</a>
    </section>
    <div class="dotlist">
      <ul>
        <li><a class="dot" onclick="currentSlide(1)"></a></li>
        <li><a class="dot" onclick="currentSlide(2)"></a></li>
        <li><a class="dot" onclick="currentSlide(3)"></a></li>
      </ul>
    </div>

    <!-- page 4 (sign up) -->

    <div class="breaker2"></div>
    <div id="signup" class="signup-header-title">WELCOME !</div>
    <section class="container">
      <div class="row">
        <div class="form-text column">Join us today with Bookoo</div>
        <div class="column">
          <div class="signup-text signup-title signup-container">SignUp
            <br>
            <br>
            <form action="process-signup.php" method="post" class="signup-form">
              <label class="form-input-text" for="email">E-mail</label>
              <input class="email-input" type="text" id="email" placeholder="E-mail" name="email" required>
              <br><br>
              <label class="form-input-text" for="password">Password</label>
              <input class="input-text" type="text" id="password" placeholder="Password" name="password" required>
              <br>
              <br>
              <button type="submit" class="signup-button">Sign Up!</button>
              <input type="hidden" name="submit" value="1"/>
              <a class="login-link" href="loginpage.php">Log in</a>
            </form>
          </div>
          <img class="cow-icon" src="Images/cow-colored.png">
        </div>
      </div>
    </section>
    <?php include 'mainpage-footer.php' ?>


    <script>
      var slideIndex = 1;
      showSlides(slideIndex);


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
    </script>

  </body>

</html>
