<?php
  session_start();
  require "generate_path.php";

  foreach ($_POST as $key => $value) {
    $_SESSION['file_num'] = $key;
    $_SESSION['action'] = $value;
  }

  generate_path();
  chmod($_SESSION['full_path'], 0757);

  if ( $fh = fopen($_SESSION['full_path'], "r") ) {
    while ($line = fgets($fh)) {
      echo $line."\n";
    }
    #echo fread($h, filesize($_SESSION['full_path']));
    fclose($h);
    echo '<form action="interface.php" method="POST">';
    echo '<p><input type="submit" value="Take me back" /></p>';
    echo '</form>';
    exit;
  } else {
    header("Location: action_failure.php");
    exit;
  }

?>
