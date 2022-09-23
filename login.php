<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  <p>
    <form action="new_user.html" method="POST">
      <input type="submit" value="Yes" />
    </form>
    <form action="login.html" method="POST">
      <input type="submit" value="Take me back" />
    </form>
  </p>

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
  #<p>printf("User %s does not exist. Would you like to create a new user?", htmlentities($user));</p>
  ?>

</body>
</html>
