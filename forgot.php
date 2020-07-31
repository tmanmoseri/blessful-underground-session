 <?php
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    {
         echo '<script language="javascript">';
            echo 'alert("User with that email does not exist, please retype your email correctly!!")';
            echo '</script>';
            
           echo "<script>window.top.location='http://www.saachs.org/forgot.php'</script>";
           
      
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

       
        
        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://saachs.org/reset.php?email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);
        
         // Session message to display on success.php
     echo '<script language="javascript">';
	 echo 'alert("Please check your email for a confirmation link to complete your password reset!!")';
	 echo '</script>';
        

       echo "<script>window.top.location='http://www.saachs.org/home.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
 <!--Display Site Logo at The Top-->
 
  <div class="form">
      <button  class="forgot" name="close" /><a  href="index.php" >close<br></a></button>
     <br> <h1>Please enter email address to reset Your Password</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
     
      <input type="email"required autocomplete="off" name="email" placeholder="Email Address"/>
    </div>
    <button class="button button-block"/>Reset</button>
    </form>
  </div>

<!--Load Cloudflare jquery.min.js online-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <!--Load index.js from the resource folder-->
  <script src="js/index.js"></script>
</body>

</html>
