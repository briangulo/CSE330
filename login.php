<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<?php
$user = trim($_POST['user']);
$fname = "/home/brian/file_sharing/users.txt";
$h = fopen($fname, "r");

while( !feof($h) ){
	if ( $user === trim(fgets($h)) ) {
    header("Location: interface.html");
  } else {
    continue;
  }
}
fclose($h);
<p>printf("User %s does not exist. Would you like to create a new user?", htmlentities($user));</p>
#header("Location: new_user_prompt.html");
#exit;
?>
<p>
  <form action="new_user.html" method="POST">
    <input type="submit" value="Yes" />
  </form>
  <form action="login.html" method="POST">
    <input type="submit" value="Take me back" />
  </form>
</p>
</body>
</html>
