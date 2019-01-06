#!/usr/local/bin/php
<?php
  session_start(); // start a session
?>
<!DOCTYPE html>
<?php
  if(!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) { // either no session or not logged in ?>
    <html>
	<head>
	  <title>Unwelcome</title>
	</head>
	<body>
	  <p>Go back and log in.</p>
	</body>
	</html> <?php	  
  }
  else{ // then login successful ?>
	<html>
	<head>
	  <title>Welcome</title>
	</head>
	<body>
	  <p>Welcome!</p>
	</body>
	</html> <?php
  } ?>
