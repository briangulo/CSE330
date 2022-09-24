<?php
if ( session_destroy() ) {
  header("Location: login.php");
	exit;
} else {
  header("Location: logout_failure.html");
  exit;
}
?>
