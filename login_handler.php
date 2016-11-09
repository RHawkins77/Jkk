<?php
	session_start();
	require_once 'Dao.php';
	$dao= new Dao();
	
	$email = $_POST['email'];
	$password= $_POST['password'];
	
	if(0=== preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)) {
		$_SESSION['message'][] = "Invalid Email Address";
	}
	if(empty($password)){
		$_SESSION['message'][] = 'Missing Password';
	}
	if(isset($_SESSION['message'])){
		$_SESSION['presets']['email'] = $email;
		header("Location:login.php");
		exit;
	}
		
	
	
	
	?>