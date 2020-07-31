<?php
/* 
   Hello! Just two processes goes here: 
   1. Password reset process
   2. Updates database with new user password
*/
require 'db.php';
session_start();

//Hey! Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    //Hey! Make sure the two passwords match
    if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

        $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
        
        //Yeah! We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = $mysqli->escape_string($_POST['email']);
        $hash = $mysqli->escape_string($_POST['hash']);
        
        $sql = "UPDATE users SET password='$new_password', hash='$hash' WHERE email='$email'";

        if ( $mysqli->query($sql) ) {
            
            echo '<script language="javascript">';
	 echo 'alert("Your password has been reset successfully!!")';
	 echo '</script>';
	 
	 echo "<script>window.top.location='http://www.saachs.org/home.php'</script>";
	 
        }

    }
    else {
        echo '<script language="javascript">';
	 echo 'alert("your passwords do not match, try again!!")';
	 echo '</script>';
	 
	 echo "<script>window.top.location='http://www.saachs.org/reset.php'</script>";
	 
    }

}
?>