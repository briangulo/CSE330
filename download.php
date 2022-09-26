<?php
  session_start();
  require "generate_path.php";

  foreach ($_POST as $key => $value) {
    $_SESSION['file_num'] = $key;
    $_SESSION['action'] = $value;
  }

  generate_path();
  chmod($_SESSION['full_path'], 0757);

  if (file_get_contents($_SESSION['full_path']) == TRUE) {
    $contents = file_get_contents($_SESSION['full_path']);
    echo urlencode($contents);
    echo '<form action="interface.php" method="POST">';
    echo '<p><input type="submit" value="Take me back" /></p>';
    echo '</form>';
    exit;
  } else {
    header("Location: action_failure.php");
    exit;
  }

?>
