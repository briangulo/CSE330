<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
</head>
<body>
	<?php
	session_start();
	$user = $_SESSION['user'];
	$userdir = '/srv/uploads/'.$user;

	printf("<p>Welcome <strong>%s</strong>!</p>", htmlentities($user));

	$scan = scandir($userdir);
	$num = 1;
	foreach($scan as $file) {
		if (!is_dir($file)) {
			#$fname = pathinfo($file, PATHINFO_FILENAME);
			#$ext = pathinfo($file, PATHINFO_EXTENSION);
			printf("<p>%d: %s</p>", $num, htmlentities($file));
			echo "<form action=\"download.php\" method=\"POST\">";
		  echo "<input type=\"submit\" name=$file value=\"View\" />";
		  echo "</form>";
			echo "<form action=\"delete.php\" method=\"POST\">";
			echo "<input type=\"submit\" name=$file value=\"Delete\" />";
			echo "</form>";
			$num++;
		}
	}

	echo '<form enctype="multipart/form-data" action="upload.php" method="POST">';
	echo '<p>';
	echo '<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />';
	echo '<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />';
	echo '</p>';
	echo '<p>';
	echo '<input type="submit" name="uploader" value="Upload" />';
	echo '</p>';
	echo '</form>';

	#printf("full path: %s", $_SESSION['full_path']);

  echo "<form action=\"logout.php\" method=\"POST\">";
  echo "<input type=\"submit\" value=\"Logout\" />";
  echo "</form>";
	#printf("file: %s", htmlentities($_SESSION['key']));
	?>
</body>
</html>
