<!DOCTYPE html>
<html>

<head>
  <?php session_start() ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="forgotpassword-style.css">
  <link rel = "shortcut icon" href="Images/cow-colored.png" sizes="16x16" type = "image/png" />
  <title>Bookoo | Forgot Password</title>

</head>

<body>
  <div class="forgot-title-container">
    <div class="forgot-title">Forgot password?</div>
  </div>
  <div class="container">
    <form action="process-forgotpassword-email.php" class="forgotpassword-form-email" method="post">
      <ul>
        <li><label class="input-text" for="email">Please insert your email</label></li>
        <li><input class="input" type="text" id="email" name="email"></input></li>
      </ul>
      <button type="submit" class="submit-button">Submit email</button>
      <input type="hidden" name="submit" value="1" />
    </form>
    <button class="backbutton"><a href="loginpage.php">back</a></button>
  </div>

</body>

</html>
