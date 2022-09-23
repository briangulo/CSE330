<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
  <p>
    <label><input type="radio" name="oper" value="+">ADD</label>
    <label><input type="radio" name="oper" value="-">SUBTRACT</label>
    <label><input type="radio" name="oper" value="*">MULTIPLY</label>
    <label><input type="radio" name="oper" value="/">DIVIDE</label>
  </p>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
  <p>
    <input type="submit" value="Calculate!" />
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
if ($oper = "+") {
	echo "F";
} elseif ($oper = "-") {
	echo "D";
} elseif ($oper = "*") {
	echo "C";
} elseif ($oper = "/") {
	echo "B";
} else {
	echo "A";
}
?>
</body>
</html>
