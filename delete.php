<?php
  session_start();
  foreach ($_POST as $key => $value) {
    echo "Field ".htmlentities($key)." is ".htmlentities($value)."<br>";
  }
  echo '<form action="interface.php" method="POST">';
  echo '<p><input type="submit" value="Take me back" /></p>';
  echo '</form>';
  /***
  if (unlink('/home/tutsplus/files/tmp.txt')) {
    // file was successfully deleted
  } else {
    // there was a problem deleting the file
  }
  ***/
?>
