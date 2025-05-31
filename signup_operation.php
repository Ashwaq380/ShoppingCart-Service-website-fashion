<?php
session_start();
require_once 'DbOperation.php';
	$db = new DbOperation(); 
	$hash = password_hash($_POST['cpass'], PASSWORD_DEFAULT);

	if($db->signup($_POST['cname'],$_POST['cemail'],$hash)){
		header("location: login.php");

	}else{
		"<script> alert('signup error!!'); </script>";
	}

?>