<?php
session_start();
require "generate_path.php";

$_SESSION['file'] = basename($_FILES['uploadedfile']['name']);

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	header("Location: upload_success.html");
	exit;
} else{
	header("Location: upload_failure.html");
	exit;
}

?>