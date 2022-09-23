<!DOCTYPE html>
<html>
<head><title>Creating New User</title></head>
<body>
  <?php
  $user = trim(strtolower($_POST['user']));
  $fname = "/home/brian/file_sharing/users.txt";
  $h = fopen($fname, "r");
  $fp = fopen($fname, "a");

  #if (is_writable($fname)) {
  #if (!$fp = fopen($fname, "a")) {
  #  <p>printf("Error: cannot open user database!");</p>
  #<form action="new_user.html" method="POST">
  #  <p><input type="submit" value="Try again" /></p>
  #</form>
  #}

  while( !feof($h) ){
  	if ( $user == trim(fgets($h)) ) {
      printf('User %s already exists. Please choose another username.', htmlentities($user));
      echo '<form action="new_user.html" method="POST">';
      echo '<p><input type="submit" value="OK" /></p>';
      echo '</form>';
    } else {
      continue;
    }
  } fclose($h);
  for($i=0; $i<count(strlen($user)); $i++){
  	  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user)) {
        printf('Error: only numbers and letters are allowed in your username.');
        echo '<form action="new_user.html" method="POST">';
        echo '<p><input type="submit" value="OK" /></p>';
        echo '</form>';
      }
  } if (fwrite($fp, $user) === FALSE) {
      printf("Error: cannot store username!");
      echo '<form action="new_user.html" method="POST">';
      echo '<p><input type="submit" value="OK" /></p>';
      echo '</form>';
  }

  printf("Success: new user %s was created!", $user);
  fclose($fp);

  echo '<form action="interface.html" method="POST">';
  echo '<p><input type="submit" value="Let\'s go!" /></p>';
  echo '</form>';

  #} else {
  #  <p>printf("Error: the user database is not writable!");</p>
    #<form action="new_user.html" method="POST">
    #  <p><input type="submit" value="Try again" /></p>
    #</form>
  #}
  ?>
</body>
</html>
