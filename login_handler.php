<?php 
session_start();


$email = trim($_POST['email']);
$password = trim($_POST['password']);
$valid = true;
	
	
	/**
	if(empty($email)  || strlen($email) > 256){
		$_SESSION['message'][] = "Invalid Email Address Size";
		$valid = false;
	}
	**/
	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)){
		$_SESSION['message'][] = "Invalid email Address";
		$valid = false;
	}
	if(empty($password)){
		&_SESSION['message'][] = "Missing Password";
		$valid = false;
	}
	if(isset($_SESSION['message'])){
		$_SESSION['presets']['email'] = $email;
		header("Location:login.php");
		exit;
	}

	if(isset($_SESSION['message'][]){
		echo var_dump($_SESSION['message'][]);
	}

/**if ("rhawkins@u.boisestate.edu" == $_POST["email"] &&
  "helloworld" == $_POST["password"]) {
  $_SESSION["access_granted"] = true;
  header("Location:granted.php");
} else {
  $status = "Invalid username or password";
  $_SESSION["status"] = $status;
  $_SESSION["email_preset"] = $_POST["email"];
  $_SESSION["access_granted"] = false;
  $valid = false;
  header("Location:login.php");
}	
**/


//if all valid, redirect the user to the Welcome page.
//if($valid == true){
//	header('Location: welcome.php');
//}	else {
//	//else redirect them to the form
//	header('Location: index.php')
//}
?>

<html>
<head></head>
<body>

<p> var_dump($valid);

</body>
</html>
