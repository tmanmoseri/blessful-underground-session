<?php
/*Yeah! The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

//Hey! Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']);
    $hash = $mysqli->escape_string($_GET['hash']);

    //Hey! Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    {
        echo '<script language="javascript">';
	 echo 'alert("You have entered invalid URL for password reset!!")';
	 echo '</script>';
	 
	 echo "<script>window.top.location='http://www.saachs.org/forgot.php'</script>";
	 
    }
}
else {
    echo '<script language="javascript">';
	 echo 'alert("Sorry, verification failed, try again!!")';
	 echo '</script>';
	 
	 echo "<script>window.top.location='http://www.saachs.org/home.php'</script>";
	 }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Reset Your Password</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    
    <div class="form">

          <h1>Choose Your New Password</h1>

          <form action="reset_password.php" method="post">

          <div class="field-wrap">
            
            <input type="password"required name="newpassword" autocomplete="off" placeholder=" New Password"/>
          </div>

          <div class="field-wrap">
            
            <input type="password"required name="confirmpassword" autocomplete="off" placeholder="Confirm New Password"/>
          </div>

          <!--Hey! This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="hidden" name="hash" value="<?= $hash ?>">

          <button class="button button-block"/>Apply</button>

          </form>

    </div>
 <!--Load Cloudflare jquery.min.js online-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Load index.js from the resource folder-->
  <script src="js/index.js"></script>

</body>
</html>
