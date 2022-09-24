<!DOCTYPE html>
<html>
<head><title>Failure</title></head>
<body>
  <?php
  session_start();
  $action = strtoupper($_SESSION['action']);

  printf("file: %s",$_SESSION['full_path']);
  printf("<p>Uh oh! Your <strong>%s</strong> action failed!</p>", htmlentities($action));
  echo '<form action="interface.php" method="POST">';
  echo '<p><input type="submit" value="Take me back" /></p>';
  echo '</form>';
  ?>
</body>
</html>
