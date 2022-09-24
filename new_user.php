<!DOCTYPE html>
<html>
<head><title>Creating New User</title></head>
<body>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  	<p>
  		<label for="username">Enter your desired username:</label>
      <input
      type="text"
      name="user"
      id="userinput"
      minlength='1'
      maxlength='10'
      />
      <input type="submit" value="Let's go!" />
  	</p>
  </form>
  <form action="login.php" method="POST">
    <p><input type="submit" value="Take me back" /></p>
  </form>

  <?php
  if ( isset($_POST['user']) ) {
    $user = trim(strtolower($_POST['user']));
    $fname = "/home/brian/file_sharing/users.txt";
    $h = fopen($fname, "r");
    $fp = fopen($fname, "a");

    while( !feof($h) ){
    	if ( $user == trim(fgets($h)) ) {
        printf('User <strong>%s</strong> already exists. Please choose another username.', htmlentities($user));
        exit;
      } else {
        continue;
      }
    } fclose($h);

    for($i=0; $i<count(strlen($user)); $i++){
    	  if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user)) {
          printf('Error: only numbers and letters are allowed in your username.');
          exit;
        }

    } if (fwrite($fp, $user."\n") === FALSE) {
        printf("Error: cannot store username.");
        exit;
    }

    printf("Success: new user <strong>%s</strong> was created!", $user);
    fclose($fp);

    echo '<form action="interface.php" method="POST">';
    echo '<p><input type="submit" value="View user file server" /></p>';
    echo '</form>';
  }
  ?>
</body>
</html>
