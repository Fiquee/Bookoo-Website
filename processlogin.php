<?php

//mysqli_connect(host , username db , password , nama db)
$connection = mysqli_connect('localhost', 'root', '', 'bookoo_website') or die('Unable to connect!');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $try = "SELECT * FROM user WHERE user_email='$email' AND user_password='$pass';"; //query statement

    $result=mysqli_query($connection, $try) or die('huhu'); //run query in db

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['username'] = $row['user_username'];
            if ($row['user_fullname'] != '') {
                $_SESSION['fullname'] = $row['user_fullname'];
            } else {
                $_SESSION['fullname'] = '';
            }
            if ($row['user_address'] != '') {
                $_SESSION['address'] = $row['user_address'];
            } else {
                $_SESSION['address'] = '';
            }
        }
        header("location: homepage.php");
    } else {
        echo '<script type="text/javascript">alert("Incorrect e-mail or password")
      window.location = "loginpage.php"</script>';
    }
}
