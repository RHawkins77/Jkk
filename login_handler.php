<?php 
session_start();

var_dump($_POST);
$email = $_GET['email'];
$password = $_GET['password'];

	
	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)){
		$_SESSION['message'][] = "Invalid email Address";
	}
	if(empty($password)){
		&_SESSION['message'][] = "Missing Password";
	}
	if(isset($_SESSION['message'])){
		$_SESSION['presets']['email'] = $email;
		header("Location:login.php");
		exit;
	}
	
	
	
	
	if ("rhawkins@u.boisestate.edu" == $_POST["email"] &&
  "helloworld" == $_POST["password"]) {
  $_SESSION["access_granted"] = true;
  header("Location:granted.php");

} else {
  $status = "Invalid username or password";
  $_SESSION["status"] = $status;
  $_SESSION["email_preset"] = $_POST["email"];
  $_SESSION["access_granted"] = false;
  header("Location:login.php");
}	
?>