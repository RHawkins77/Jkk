<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
}
require_once('Dao.php');
require_once('user.php');
$dao = new Dao();


$email = trim($_POST['email']);
$password = trim($_POST['password']);
$repassword = trim($_POST['passwordAgain']);
$firstName =  trim($_POST['firstname']);
$lastName =  trim($_POST['lastname']);
$errors = array();
$valid = true;




	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches))
	{
		$_SESSION['errors']['email'] = $_SESSION['errors']['email'] + "Invalid Email Address";
		$valid = false;
	}
	if(empty($password))
	{
		$errors['password'] = "Missing Password. Cannot be empty";
				$valid = false;
	}
	if(strlen($email) <= 10 || strlen($email) > 256)
	{
		$errors['email'] = "Invalid Email Address Size";
				$valid = false;
	}else if((filter_var($email, FILTER_VALIDATE_EMAIL === false)))
	{
		$errors['password'] = "not an email";
				$valid = false;
	}
	if(!isset($password) === true || strlen($password) > 100)
	{
		$errors['password'] = "Too small or too big of an email";
				$valid = false;
	}
	if(!($password === $repassword)){
		$errors['password'] = "passwords don't match";
		$valid = false;
	}
	if($dao->emailUsed($email) || $valid === false)
	{
		$_SESSION['enteredEmail'] = htmlspecialchars($email);
		$_SESSION['enteredFirst'] = htmlspecialchars($firstName);
		$_SESSION['enteredLast'] = htmlspecialchars($lastName);
		$errors['email'] = "user email already exists";
		$_SESSION['errors'] = $errors;
		header('LOCATION: CreateAccount.php');
	}else{
		$errors = "Account successfully created, please log in";
		$_SESSION['errors'] = $errors;
		$_SESSION['email'] = htmlspecialchars($email);
		$dao->addUser($email, $password, $firstName, $lastName);
		header('LOCATION: Login.php');
	}







?>