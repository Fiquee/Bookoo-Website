<?php
  $connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('errorconnection');

  $email = $_POST['email'];
  $query = "SELECT * from user WHERE user_email = '$email';";

  $result = mysqli_query($connection, $query) or die('errorquery');

  if (mysqli_num_rows($result) >0) {
      session_start();
      $row = mysqli_fetch_assoc($result);
      $_SESSION['email'] = $row['user_email'];
      $_SESSION['question'] = $row['user_secret_question'];

      header("location: forgotpassword2.php");
  } else {
      echo '<script type="text/javascript">alert("Your email is not registered")
      window.location = "forgotpassword1.php"</script>';
  }
