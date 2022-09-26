<!DOCTYPE html>
<html>
<head><title>Blank</title></head>
<body>
  <?php
  session_start();
  function generate_path(){
    $user = $_SESSION['user'];
    #$file = $_SESSION['file'];

    $files = array_values(array_filter(glob($_SESSION['userdir']."/*"), 'is_file'));
    $file = $files[$_SESSION['file_num']-1];
    $fname = pathinfo($file, PATHINFO_FILENAME);

    if( !preg_match('/^[\w_\.\-]+$/', $fname) ){
    	echo "Invalid filename";
      #printf("file: %s", $_SESSION['key']);
      echo '<form action="interface.php" method="POST">';
      echo '<p><input type="submit" value="Take me back" /></p>';
      echo '</form>';
    	exit;
    }

    $_SESSION['full_path'] = $file;
  }
  ?>
</body>
</html>
