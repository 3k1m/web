#!/usr/local/bin/php
<?php
  /**
  This file along with welcome.php illustrate a simple PHP login system
  This is a very minimal example. The password should be hashed and not stored in a simple flat file...
  */

  session_start(); // start a session
  $_SESSION['loggedin'] = false;
  session_name('Demo'); // name the session
  
  /**
  This function determines if a user's supplied password is correct
  @param string $password the password from the form
  @param boolean $error whether the password is wrong
  */
  function validate($password, &$error){
    // read to determine true password
    $fin = fopen('password.txt', 'r');
    $true_pass = fgets($fin);
    fclose($fin);
  
    // trim white space just in case of weirdness
    $true_pass = trim($true_pass);
  
    if($password === $true_pass){ // if they match, great
      $_SESSION['loggedin'] = true;
	  header('Location: welcome.php'); // redirect
    } else { // bad password so mark in error
      $error = true;
    }
  }
  
  $error = false; // there has been no error

  if(isset($_POST['pass'])){ // if post is set, form submitted
    validate($_POST['pass'], $error);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
</head>
<body>
  <main>
    <form method = "post" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
	  <input type="password" name="pass" /> <input type="submit" value="log in" />
	  <?php if($error) { // entered wrong password so tell them ?>
	    <p>Invalid password!</p> <?php
	  } ?>
	</form>
  </main>
</body>
</html>
