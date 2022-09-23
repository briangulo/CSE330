<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<?php
$user = $_POST['user'];
$h = fopen("/home/brian/file_sharing/users.txt", "r");

while( !feof($h) ){
	if ( $user == trim(fgets($h)) ) {
    header("Location: interface.html");
  } else {
    continue;
  }
}
fclose($h);
?>
</body>
</html>
