<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <p>
    <label for="num1input">Enter number:</label>
    <input type="number" name="num1" id="num1input" />
  </p>
  <p>
    <label><input type="radio" name="oper" value="add">ADD</label>
    <label><input type="radio" name="oper" value="sub">SUBTRACT</label>
    <label><input type="radio" name="oper" value="mul">MULTIPLY</label>
    <label><input type="radio" name="oper" value="div">DIVIDE</label>
  </p>
  <p>
    <label for="num2input">Enter number:</label>
    <input type="number" name="num2" id="num2input" />
  </p>
  <p>
    <input type="submit" value="Calculate!" />
  </p>
</form>
<?php
function add($x=0, $y=0){
	return $x + $y;
}
function subtract($x=0, $y=0){
	return $x - $y;
}
function multiply($x=0, $y=0){
	return $x * $y;
}
function divide($x=0, $y=1){
	return $x / $y;
}
$num1 = (int) $_POST["num1"];
$num2 = (int) $_POST["num2"];
#printf("<p><strong>%d</strong></p>\n", add($num1, $num2));

if ($oper = "add") {
  res = add($_POST['num1'], $_POST['num2']);
  printf("<p><strong>Answer: %d</strong></p>\n", res);
} elseif ($oper = "sub") {
  res = subtract($_POST['num1'], $_POST['num2']);
  printf("<p><strong>Answer: %d</strong></p>\n", res);
} elseif ($oper = "mul") {
  res = multiply($_POST['num1'], $_POST['num2']);
  printf("<p><strong>Answer: %d</strong></p>\n", res);
} elseif ($oper = "div") {
  res = divide($_POST['num1'], $_POST['num2']);
  printf("<p><strong>Answer: %d</strong></p>\n", res);
} else {
  printf("Error: Please select an operation");
}
?>
</body>
</html>
