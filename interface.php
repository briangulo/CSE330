<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
</head>
<body>
	<?php
	session_start();
	$user = $_SESSION['user'];
	$userdir = '/home/brian/file_sharing/'.$user;

	printf("<p>Welcome <strong>%s!</strong></p>", htmlentities($user));

	$num = 1;
	foreach(glob($userdir.'/*.*') as $file) {
    printf("<p>%d: %s</p>", $num, $file);
	}
/***
	$filename = $_GET['file'];

	// We need to make sure that the filename is in a valid format; if it's not, display an error and leave the script.
	// To perform the check, we will use a regular expression.
	if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
		echo "Invalid filename";
		exit;
	}

	$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

	// Now we need to get the MIME type (e.g., image/jpeg).  PHP provides a neat little interface to do this called finfo.
	$finfo = new finfo(FILEINFO_MIME_TYPE);
	$mime = $finfo->file($full_path);

	// Finally, set the Content-Type header to the MIME type of the file, and display the file.
	header("Content-Type: ".$mime);
	header('content-disposition: inline; filename="'.$filename.'";');
	readfile($full_path);
	***/
  echo "<form action=\"login.php\" method=\"POST\">";
  echo "<input type=\"submit\" value=\"Logout\" />";
  echo "</form>";
	?>
</body>
</html>