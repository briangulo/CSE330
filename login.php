<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<?php
$user = trim(strtolower($_POST['user']));
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

header("Location: new_user_prompt.html");
exit;
?>

</body>
</html>
