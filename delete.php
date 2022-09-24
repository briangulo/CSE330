<?php
  session_start();
  require "generate_path.php";
  generate_path();

  foreach ($_POST as $key => $value) {
    $_SESSION['file'] = $key;
    $_SESSION['action'] = $value;
  }

  if (unlink($_SESSION['full_path'])) {
    header("Location: action_success.php");
    exit;
  } else {
    header("Location: action_failure.php");
    exit;
  }

  /***
  echo '<form action="interface.php" method="POST">';
  echo '<p><input type="submit" value="Take me back" /></p>';
  echo '</form>';

  if (unlink('/home/tutsplus/files/tmp.txt')) {
    // file was successfully deleted
  } else {
    // there was a problem deleting the file
  }
  ***/
?>
