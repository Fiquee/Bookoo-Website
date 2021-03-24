<?php
  session_start();
  $connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('Unable to connect!');
  $em = mysqli_real_escape_string($connection, $_SESSION['email']);

  if (isset($_POST['submit'])) {
      $un = $_POST['username'];
      $fn = $_POST['fullname'];
      $add = $_POST['address'];
      $sq = $_POST['secretquestion'];
      $sa = $_POST['secretanswer'];

      $query = "UPDATE user SET user_username='$un', user_fullname= '$fn', user_address= '$add',user_secret_question= '$sq', user_secret_answer= '$sa' WHERE user_email = '$em';";

      $result = mysqli_query($connection, $query) or die('error');

      $_SESSION['fullname'] = $fn;
      $_SESSION['address'] = $add;
      $_SESSION['secretquestion'] = $sq;
      $_SESSION['secretanswer'] = $sa;
      $_SESSION['username'] = $un;

      header("location: homepage.php");
  }
