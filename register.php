<?php
/*
   TC: We will handle just 3 pseudo procedure here.
   1. Registration process
   2. Inserts user info into the database and
   3. Sends account confirmation email message
 */
include 'db.php';
//TC: Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

//TC: Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$unique = $mysqli->escape_string($_POST['unique']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

//TC: Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

//TC: We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    echo '<script language="javascript">';
    echo 'alert("User with this email already exists!")';
    echo '</script>';
    
   echo "<script>window.top.location='register.html'</script>";

}
else {//TC:  Email doesn't already exist in a database, proceed...
$code = "mjeke45";

if ($unique==$code) {
  //TC: active is 0 by DEFAULT (no need to include it here)
        $sql = "INSERT INTO users (first_name, last_name, email, password, hash) "
                . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

        //TC: Add user to the database
        if ( $mysqli->query($sql) ){

            $_SESSION['active'] = 0; //0 until user activates their account with verify.php
            $_SESSION['logged_in'] = true; // So we know the user has logged in
           /* $_SESSION['message'] =

                     "Great! you're almost done. A confirmation link has been sent to $email,
                      please verify your account by clicking on the link in the message!";

            //TC: Send registration confirmation link (verify.php)
            $to      = $email;
            $subject = 'Account Verification '; //Name of My own website(Edited)
            $message_body = '
            Hello '.$first_name.',

            Thank you for signing up!

            Kindly click this link to activate your account:

            verify.php?email='.$email.'&hash='.$hash;

            mail( $to, $subject, $message_body );
            */
             echo '<script language="javascript">';
    echo 'alert("Your account have been created, please login to view user details!")';
    echo '</script>';
    
   echo "<script>window.top.location='login.html'</script>";
                
              
               }


        else {
             echo '<script language="javascript">';
            echo 'alert("Registration failed!!")';
            echo '</script>';
            
           echo "<script>window.top.location='register.html'</script>";
           }
}
else{
   echo '<script language="javascript">';
            echo 'alert("Wrong code, try again!!")';
            echo '</script>';
            echo "<script>window.top.location='register.html'</script>";
                
}

}
?>