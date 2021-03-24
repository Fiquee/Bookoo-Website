<!DOCTYPE html>
<html>

  <head>
    <?php
  session_start();
  $email = $_SESSION['email'];
  $username = $_SESSION['username'];
  $address = $_SESSION['address'];
  $fullname = $_SESSION['fullname'];
   ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profilepage-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Images/cow-colored.png" sizes="16x16" type="image/png" />
    <title>Bookoo | Profile</title>

  </head>

  <body>
    <div class="title-container-profile">
      <div class="title-text">Your Profile</div>
    </div>
    <div class="container3">
      <a class="backbutton2" href="homepage.php">
        <img class="left-arrow2" src="Images/left-arrow-white.png">
        <img class="left-arrow-colored2" src="Images/left-arrow-colored.png">
      </a>
      <div class="row3">
        <div class="column3 picture-column">
          <div class="img-container">
            <img src="Images/user-profile.png">
            <button class="updateprofile-button"><a href="updateprofilepage.php">Update your profile</a></button>
          </div>
        </div>
        <div class="column3 details-column">
          <ul>
            <li>
              <h3 class="details-title">Username: </h3>
              <p class="details-content"><?php echo ' ' . $username ?></p>
            </li>
            <br><br>
            <li>
              <h3 class="details-title">Fullname: </h3>
              <p class="details-content"><?php echo ' ' . $fullname ?></p>
            </li>
            <br><br>
            <li>
              <h3 class="details-title">Address: </h3>
              <p class="details-content"><?php echo ' ' . $address ?></p>
            </li>
            <br><br>
            <li>
              <h3 class="details-title">E-mail: </h3>
              <p class="details-content"><?php echo ' ' . $email ?></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php include 'mainpage-footer.php' ?>
  </body>

</html>
