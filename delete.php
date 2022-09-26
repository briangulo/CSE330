<?php
  session_start();
  require "generate_path.php";

  foreach ($_POST as $key => $value) {
    $_SESSION['file_num'] = $key;
    $_SESSION['action'] = $value;
  }
  generate_path();
  chmod($_SESSION['full_path'], 0757);

  if (unlink($_SESSION['full_path'])) {
    header("Location: action_success.php");
    exit;
  } else {
    header("Location: action_failure.php");
    exit;
  }
?>
