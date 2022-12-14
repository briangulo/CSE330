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
  	<form action="new_user.php" method="POST">
  		<input type="submit" value="Yes" />
  	</form>
  </p>

  <?php

  if ( isset($_POST["user"]) ) {
    session_start();
    $user = trim(strtolower($_POST['user']));
    $fname = "/srv/uploads/users.txt";
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
      $_SESSION["user"] = $user;
      chmod('/srv/uploads/'.$user, 0747);
      header("Location: interface.php");
      exit;

    } else {
      printf("<p><strong>User <strong>%s</strong> does not exist. Please create a new user.</strong></p>",
      htmlentities($user));
      exit;
    }
  }

  ?>

</body>
</html>
