<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  	<p>
  		<label for="username">Username:</label>
  		<input type="text"
  		name="user"
  		id="userinput"
  		minlength='1'
  		maxlength='10'
  		required />
      <input type="submit" value="Login" />
  	</p>
  </form>
  <p>
  	Would you like to create a new user?
  	<form action="new_user.html" method="POST">
  		<input type="submit" value="Yes" />
  	</form>

  <?php
  if ( isset($_POST['user']) ) {
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
      printf("<p><strong>User %s does not exist. Please create a new user.</strong></p>",
      htmlentities($user));
      exit;
    }
  }

  ?>

</body>
</html>
