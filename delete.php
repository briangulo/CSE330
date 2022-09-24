<?php
  session_start();
  foreach ($_POST as $key) {
    echo "$key";
  }
  /***
  if (unlink('/home/tutsplus/files/tmp.txt')) {
    // file was successfully deleted
  } else {
    // there was a problem deleting the file
  }
  ***/
?>
