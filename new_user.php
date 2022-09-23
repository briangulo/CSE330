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
      <p>printf('User %s already exists. Please choose another username.', htmlentities($user));</p>
      <form action="new_user.html" method="POST">
        <p><input type="submit" value="OK" /></p>
      </form>
    } else {
      continue;
    }
  } fclose($h);
  for($i=0; $i<count(strlen($user)); $i++){
  	  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user)) {
        <p>printf('Error: only numbers and letters are allowed in your username.');</p>
        <form action="new_user.html" method="POST">
          <p><input type="submit" value="Try again" /></p>
        </form>
      }
  } if (fwrite($fp, $user) === FALSE) {
      <p>printf("Error: cannot store username!");</p>
      #<form action="new_user.html" method="POST">
      #  <p><input type="submit" value="Try again" /></p>
      #</form>
  }

  <p>printf("Success: new user %s was created!", $user);</p>
  fclose($fp);
  #<form action="interface.html" method="POST">
  #  <p><input type="submit" value="Go!" /></p>
  #</form>

  #} else {
  #  <p>printf("Error: the user database is not writable!");</p>
    #<form action="new_user.html" method="POST">
    #  <p><input type="submit" value="Try again" /></p>
    #</form>
  #}
  ?>
</body>
</html>
