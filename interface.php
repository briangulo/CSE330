<!DOCTYPE html>
<html>
<head>
	<title>My First Web Page</title>
</head>
<body>
	<?php
	printf("<p>Hello %s!</p>", @$_SESSION['user']);
  echo "<form action=\"login.php\" method=\"POST\">"
  echo "<input type=\"submit\" value=\"Take me back\" />"
  echo "</form>"
	?>
</body>
</html>
