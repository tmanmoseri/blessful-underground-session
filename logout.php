<?php
/*Yeah! Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout-CTC</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
<!--Yeah! Display Site Logo at The Top-->
  <div class="form">
          <h1>Thanks for visiting Our Site</h1>
            <p><?= 'You have been logged out!'; ?></p>

          <!--Yeah! We navigate back to Home page of the site-->
          <a href="index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
