<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <p>
    <label for="num1input">Enter number:</label>
    <input type="number" step="any" name="num1" id="num1input" required />
  </p>
  <p>
    <input type="radio" name="oper" value="add" id="addinput"><label for ="addinput">ADD</label>
    <input type="radio" name="oper" value="sub" id="subinput"><label for ="subinput">SUBTRACT</label>
    <input type="radio" name="oper" value="mul" id="mulinput"><label for ="mulinput">MULTIPLY</label>
    <input type="radio" name="oper" value="div" id="divinput"><label for ="divinput">DIVIDE</label>
  </p>
  <p>
    <label for="num2input">Enter number:</label>
    <input type="number" step="any" name="num2" id="num2input" required />
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
$oper = $_POST["oper"];

if ($oper == "add") {
  printf("<p><strong>Answer: %.2f</strong></p>\n", add($num1, $num2));
} elseif ($oper == "sub") {
  printf("<p><strong>Answer: %.2f</strong></p>\n", subtract($num1, $num2));
} elseif ($oper == "mul") {
  printf("<p><strong>Answer: %.2f</strong></p>\n", multiply($num1, $num2));
} elseif ($oper == "div") {
	if ($num2 == 0) {
		printf("<p><strong>Error: Cannot divide by zero!</strong></p>\n");
	} else {
  		printf("<p><strong>Answer: %.2f</strong></p>\n", divide($num1, $num2));
	}
} else {
  printf("<p><strong>Please perform an operation</strong></p>\n");
}
?>
</body>
</html>
