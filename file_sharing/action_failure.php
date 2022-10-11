<!DOCTYPE html>
<html>
<head><title>Failure</title></head>
<body>
  <?php
  session_start();
  $action = strtoupper($_SESSION['action']);

  #printf("path: %s  file: %s", htmlentities($_SESSION['full_path']), htmlentities($_SESSION['file']));
  printf("<p>Uh oh! Your <strong>%s</strong> action failed!</p>", htmlentities($action));
  if ($_SESSION['bad_name']) {
    printf("<p>Invalid filename: filename cannot contain special characters.</p>");
  }
  echo '<form action="interface.php" method="POST">';
  echo '<p><input type="submit" value="Take me back" /></p>';
  echo '</form>';
  ?>
</body>
</html>
