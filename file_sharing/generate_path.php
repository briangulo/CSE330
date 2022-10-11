<!DOCTYPE html>
<html>
<head><title>Working...</title></head>
<body>
  <?php
  session_start();
  function generate_path(){
    $user = $_SESSION['user'];

    if ($_SESSION['action'] == "Delete" or $_SESSION['action'] == "View") {
      $files = array_values(array_filter(glob($_SESSION['userdir']."/*"), 'is_file'));
      $file = $files[$_SESSION['file_num']-1];
      $filename = pathinfo($file, PATHINFO_FILENAME);
      $basename = pathinfo($file, PATHINFO_BASENAME);
    } else {
      $basename = $_SESSION['file'];
      $filename = pathinfo($basename, PATHINFO_FILENAME);
    }

    if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
      $_SESSION['bad_name'] = 0;
      header("Location: action_failure.php");
    	exit;
    }

    $_SESSION['full_path'] = sprintf($_SESSION['userdir']."/%s", $basename);
  }
  ?>
</body>
</html>
