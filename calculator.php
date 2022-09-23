<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <p>
      <label><input type="radio" name="add" value="+"></label>
      <label><input type="radio" name="sub" value="-"></label>
      <label><input type="radio" name="mul" value="*"></label>
      <label><input type="radio" name="div" value="/"></label>
  	<p>
      <input type="submit" value="Print in Bold" />
    </p>
  </form>
<?php
function add($x, $y){
	return $x + $y;
}
function subtract($x, $y){
	return $x - $y;
}
function multiply($x, $y){
	return $x * $y;
}
function divide($x, $y){
	return $x / $y;
}
?>
</body>
</html>
