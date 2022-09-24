<?php
session_start();
function generate_path(){
  $user = $_SESSION['user'];

  // Get the filename and make sure it is valid
  $file = $_SESSION['file'];
  if( !preg_match('/^[\w_\.\-]+$/', $file) ){
  	echo "Invalid filename";
  	exit;
  }

  /***
  // Get the username and make sure it is valid
  $user = $_SESSION['user'];
  if( !preg_match('/^[\w_\-]+$/', $user) ){
  	echo "Invalid username";
  	exit;
  }
  ***/
  $full_path = sprintf("/srv/uploads/%s/%s", $user, $file);
  return $full_path;
}
?>
