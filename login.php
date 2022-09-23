<!DOCTYPE html>
<html>
<head><title>Bold Printer</title></head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
	<p>
		<label for="username">Username:</label>
		<input type="text" name="user" id="userinput" />
    <input type="submit" value="Login" />
	</p>
</form>

<?php
session_start();
$user = $_POST['user'];
$h = fopen("/home/brian/file_sharing/users.txt", "r");

while( !feof($h) ){
	if ( $user = trim(fgets($h)) ) {
    header("Location: file_interface.php");
    exit;
  } else {
    continue;
  }
}
fclose($h);
?>
</body>
</html>
