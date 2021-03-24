<?php

$connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('errorconnection');

session_start();
$email = $_SESSION['email'];
$answer = $_POST['secretanswer'];

$query = "SELECT * from user WHERE user_email = '$email';";

$result = mysqli_query($connection, $query) or die('errorquery');

$row = mysqli_fetch_assoc($result);

if ($answer == $row['user_secret_answer']) {
    header("location: forgotpassword3.php");
} else {
    echo '<script type="text/javascript">alert("Your answer is wrong")
  window.location = "forgotpassword2.php"</script>';
}
