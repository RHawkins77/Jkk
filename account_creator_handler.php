<?php

require_once('Dao.php');
require_once('user.php');
$dao = new Dao();
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$repassword = trim($_POST['passwordAgain']);
$firstName =  trim($_POST['firstname']);
$lastName =  trim($_POST['lastname']);
$errors = array();


	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)){
		$errors['Email'] = "Invalid Email Address";
	}
	if(empty($password)){
		$errors['password'][] = "Missing Password. Cannot be empty";
	}
	if(strlen($email) <= 10 || strlen($email) > 256){
		$errors['email'] = "Invalid Email Address Size";
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL === false)){
		$notAEmail = "not an email";
	}
	if(!isset($password) === true || strlen($password) > 100){
		$errors['password'] = "Too small or too big of an email";
	}
	if($password === $repassword){
		
		
		
		
	}else{
			$errors['passwords do not match'];
			
	}
	







?>