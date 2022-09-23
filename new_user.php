<!DOCTYPE html>
<html>
<head><title>Creating New User</title></head>
<body>
  <?php
  $user = trim(strtolower($_POST['user']));
  $fname = "/home/brian/file_sharing/users.txt";
  $h = fopen($fname, "r");
  $fp = fopen($fname, "a");

  while( !feof($h) ){
  	if ( $user == trim(fgets($h)) ) {
      printf('User %s already exists. Please choose another username.', htmlentities($user));
      echo '<form action="new_user.html" method="POST">';
      echo '<p><input type="submit" value="OK" /></p>';
      echo '</form>';
      exit;
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
        exit;
      }

  } if (fwrite($fp, $user) === FALSE) {
      printf("Error: cannot store username!");
      echo '<form action="new_user.html" method="POST">';
      echo '<p><input type="submit" value="OK" /></p>';
      echo '</form>';
      exit;
  }

  printf("Success: new user %s was created!", $user);
  fclose($fp);

  echo '<form action="interface.html" method="POST">';
  echo '<p><input type="submit" value="Let\'s go!" /></p>';
  echo '</form>';

  ?>
</body>
</html>
