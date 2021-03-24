<!DOCTYPE html>
<html>

  <head>

    <title>Bookoo | Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainpage-style.css">
    <link rel = "shortcut icon" href="Images/cow-colored.png" sizes="16x16" type = "image/png" />

  </head>

  <body class="bg-image">
    <a class="backbutton" href="mainpage.php">
      <img class="left-arrow" src="Images/left-arrow-white.png">
      <img class="left-arrow-colored" src="Images/left-arrow-colored.png">
    </a>
    <section class="loginpage-container">
      <div class="row loginpage-content">
        <div class="form-text welcomebacktext column">Welcome back to Bookoo</div>
        <div class="loginpage-form-container login-text login-title column">Find your books now!
          <br>
          <form class="formmargin" action="processlogin.php" method="post">
            <label class="loginform-input-text" for="email">Email</label>
            <br>
            <input class="input-text" type="text" id="email" placeholder="E-mail" name="email" required>
            <br><br>
            <label class="loginform-input-text" for="password">Password</label>
            <br>
            <input class="input-text" type="password" id="password" placeholder="Password" name="password" required>
            <br><br>
            <button type="submit" class="login-button">Log in</button>
            <input type="hidden" name="submit" value="1"/>
            <br>
            <a class="forgotpassword" href="forgotpassword1.php">Forgot password?</a>
          </form>
        </div>
      </div>
    </section>
    <?php include 'mainpage-footer.php' ?>
  </body>

</html>
