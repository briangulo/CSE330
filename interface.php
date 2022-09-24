<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
</head>
<body>
	<?php
	$user = @$_SESSION['user'];

	printf("<p>Hello %s!</p>", htmlentities($user));
  echo "<form action=\"login.php\" method=\"POST\">";
  echo "<input type=\"submit\" value=\"Take me back\" />";
  echo "</form>";
	?>
</body>
</html>
