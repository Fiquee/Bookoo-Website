<!DOCTYPE html>
<html>

  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gorditas:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="updateprofilepage-style.css">
    <title>Bookoo | Update your profile</title>
    <link rel="shortcut icon" href="Images/cow-colored.png" sizes="16x16" type="image/png" />

  </head>

  <body>
    <main class="container">
      <div class="row">
        <div class="column-left left-image">
        </div>
        <div class="column-right">
          <div class="title-text">
            <h1>Update</h1>
            <br>
            <h1>your</h1>
            <br>
            <h1>profile !</h1>
            <br>
          </div>
          <div class="form-container">
              <form action="processupdate.php" method="post">
                <ul>
                  <li><label class="updatelabel" for="username">Username:</label></li>
                  <li><input class="updateinput" type="text" id="username" placeholder="Username" name="username" required></input></li>
                  <br>
                  <li><label class="updatelabel" for="fullname">Full name:</label></li>
                  <li><input class="updateinput" type="text" id="fullname" placeholder="Fullname" name="fullname" required></input></li>
                  <br>
                  <li><label class="updatelabel" for="address">Address:</label></li>
                  <li><input class="updateinput" type="text" id="address" placeholder="Address" name="address" required></input></li>
                  <br>
                  <li><label class="updatelabel" for="secretquestion">Secret question:</label></li>
                  <li><input class="updateinput" type="text" id="secretquestion" placeholder="Secret question" name="secretquestion" required></input></li>
                  <br>
                  <li><label class="updatelabel" for="secretanswer">Secret answer:</label></li>
                  <li><input class="updateinput" type="text" id="secretanswer" placeholder="Secret answer" name="secretanswer" required></input></li>
                </ul>
                <button class="updatebutton" type="submit">Done!</button>
                <input type="hidden" name="submit" value="1" />
              </form>
              <a class="skipbutton" href="homepage.php">skip</a>
          </div>
        </div>
      </div>
    </main>
  </body>

</html>
