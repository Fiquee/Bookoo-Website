<?php

$connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('errorconnection');

session_start();
$email = $_SESSION['email'];
$newpassword = $_POST['updatepassword'];

$query = "UPDATE user SET user_password = '$newpassword' WHERE user_email = '$email';";

$result = mysqli_query($connection, $query) or die('errorquery');

echo '<script type="text/javascript">alert("Your password is successfully update!")
window.location = "loginpage.php"</script>';
