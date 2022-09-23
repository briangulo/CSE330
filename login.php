<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  
  <?php
  $user = trim(strtolower($_POST['user']));
  $fname = "/home/brian/file_sharing/users.txt";
  $h = fopen($fname, "r");
  $exists = FALSE;

  while( !feof($h) ){
  	if ( $user == trim(fgets($h)) ) {
      $exists = TRUE;
    } else {
      continue;
    }
  }
  fclose($h);

  if ($exists) {
    header("Location: interface.html");
    exit;
  } else {
    header("Location: new_user_prompt.html");
    exit;
  }
  ?>

</body>
</html>
