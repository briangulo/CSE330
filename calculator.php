<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
  <p>
    <label for="num1">Enter number:</label>
    <input type="number" name="num1" id="num1input" />
  </p>
  <p>
    <label><input type="radio" name="oper" value="add">ADD</label>
    <label><input type="radio" name="oper" value="sub">SUBTRACT</label>
    <label><input type="radio" name="oper" value="mul">MULTIPLY</label>
    <label><input type="radio" name="oper" value="div">DIVIDE</label>
  </p>
  <p>
    <label for="num2">Enter number:</label>
    <input type="number" name="num2" id="num2input" />
  </p>
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
$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];
if
printf("<p><strong>%d</strong></p>\n", add($num1, $num2));
/***
if ($oper = "add") {
  res = add(htmlentities($_POST['num1']), htmlentities($_POST['num2']));
  printf("<p><strong>%d</strong></p>\n", res);
} elseif ($oper = "sub") {
  res = subtract(htmlentities($_POST['num1']), htmlentities($_POST['num2']));
  printf("<p><strong>%d</strong></p>\n", res);
} elseif ($oper = "mul") {
  res = multiply(htmlentities($_POST['num1']), htmlentities($_POST['num2']));
  printf("<p><strong>%d</strong></p>\n", res);
} elseif ($oper = "div") {
  res = divide(htmlentities($_POST['num1']), htmlentities($_POST['num2']));
  printf("<p><strong>%d</strong></p>\n", res);
} else {
  printf("Error");
}
***/
?>
</body>
</html>
