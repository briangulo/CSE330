<!DOCTYPE html>
<html>
<head><title>Success</title></head>
<body>
  <?php
  $action = strtoupper($_SESSION['action']);
  printf("<p>Congrats! Your <strong>%s</strong> action succeeded!</p>", htmlentities($action));
  echo '<form action="interface.php" method="POST">';
  echo '<p><input type="submit" value="Yay! Take me back" /></p>';
  echo '</form>';
  ?>
</body>
</html>
