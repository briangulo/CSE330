<?php
session_start();
require "generate_path.php";

foreach ($_POST as $key => $value) {
	$_SESSION['action'] = $value;
}

$_SESSION['file'] = basename($_FILES['uploadedfile']['name']);
generate_path();

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $_SESSION['full_path']) ){
	chmod($_SESSION['full_path'], 0757);
	header("Location: action_success.php");
	exit;
} else{
	header("Location: action_failure.php");
	exit;
}
?>
