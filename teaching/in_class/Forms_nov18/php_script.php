#!/usr/local/bin/php
<?php
  if($_SERVER['REQUEST_METHOD'] === 'GET'){
	  echo '<p>You used GET!</p>';
	  var_dump($_GET['message']);
	  var_dump($_GET['nums']);
  }
  elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
	  echo '<p>You used POST!</p>';
	  var_dump($_POST['message']);
	  var_dump($_POST['nums']);
  }
?>
