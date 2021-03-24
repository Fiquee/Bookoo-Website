<!DOCTYPE html>
<html>

<head>
  <?php session_start() ?>
  <?php $email = $_SESSION['email']; ?>
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
    <form action="process-forgotpassword-updatepassword.php" class="forgotpassword-form-email" method="post">
      <ul>
        <li><h3 class="input-text aligncenter">Your email:</h3></li>
        <li><h4 class="email-text aligncenter"><?php echo $email ?></h4></li>
        <li><label class="input-text" for="updatepassword">Insert your new password</label></li>
        <li><input class="input" type="text" id="updatepassword" name="updatepassword"></input></li>
      </ul>
      <button type="submit" class="submit-button">Submit password</button>
      <input type="hidden" name="submit" value="1" />
    </form>
    <button class="backbutton"><a href="loginpage.php">back</a></button>
  </div>

</body>

</html>
