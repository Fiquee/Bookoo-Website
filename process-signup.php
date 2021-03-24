<?php
  $connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('Unable to connect');

  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $_SESSION['email'] = $email;

  $try = "SELECT * FROM user WHERE user_email = '$email';";

  $result = mysqli_query($connection, $try) or die('error1');

  if (mysqli_num_rows($result) > 0) {
      session_unset();
      session_destroy();
      echo '<script type="text/javascript">alert("Your email is already registered")
      window.location = "mainpage.php"</script>';
  } else {
      $query = "INSERT INTO user (user_email, user_username, user_password, user_fullname, user_address, user_secret_question, user_secret_answer) VALUES ('$email','','$password','','','','');";

      $result = mysqli_query($connection, $query) or die('error2');

      $_SESSION['email'] = $email;
      $_SESSION['username'] = '';
      $_SESSION['password'] = $password;
      $_SESSION['address'] = '';
      $_SESSION['fullname'] = '';
      header("location: updateprofilepage.php");
  }
