<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
  <p>
    <label for="num1">Enter number:</label>
    <input type="number" name="num1" id="num1" />
  </p>
  <p>
    <label><input type="radio" name="oper" value="add">ADD</label>
    <label><input type="radio" name="oper" value="sub">SUBTRACT</label>
    <label><input type="radio" name="oper" value="mul">MULTIPLY</label>
    <label><input type="radio" name="oper" value="div">DIVIDE</label>
  </p>
  <p>
    <label for="num2">Enter number:</label>
    <input type="number" name="num2" id="num2" />
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
if ($oper = "add") {
  printf("<p><strong>%d</strong></p>\n",
  		htmlentities($_POST['name'])
  	);
} elseif ($oper = "sub") {
  printf("<p><strong>%d</strong></p>\n",
  		htmlentities($_POST['name'])
  	);
} elseif ($oper = "mul") {
  printf("<p><strong>%d</strong></p>\n",
  		htmlentities($_POST['name'])
  	);
} elseif ($oper = "div") {
  printf("<p><strong>%d</strong></p>\n",
  		htmlentities($_POST['name'])
  	);
} else {
  printf("Error"
  	);
}
?>
</body>
</html>
