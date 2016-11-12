<?php 
session_start();
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$valid = true;

	if(strlen($email) <=10 || strlen($email) > 256){
		$emailError = "Invalid Email Address Size";
		valid = false;
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$notAEmail = "not an email";
		valid = false;
	}
	if(strlen($password) <=0 || strlen($password)>100);{
		$passwordSizeError = "Too small or too big of an email";
		valid = false;
	}

	
	/**
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
	**/
	


if ("rhawkins@u.boisestate.edu" == trim($_POST["email"]) && "helloworld" == trim($_POST["password"])) {
 // $_SESSION["access_granted"] = true;
  header("Location:granted.php");
} else {
  $statusError = "Invalid username or password";
//  $_SESSION["status"] = $status;
//  $_SESSION["email_preset"] = $_POST["email"];
// $_SESSION["access_granted"] = false;
  $valid = false;
  header("Location:login.php");
}


/**
if all valid, redirect the user to the Welcome page.
if($valid == true){
	header('Location: welcome.php');
}	else {
	//else redirect them to the form
	redirect('Location: index.php')
}
**/
	
?>


<p> FULL Email: <?= htmlspecialchars($email) ?></p>
<?php if(isset($emailError)){  ?>
	<span id="emailError" class"error"><?= $emailError ?></span>
<?php	} ?>
<?php if(isset($notAEmail)){  ?>
	<span id="notAEmail" class"error"><?= $notAEmail ?></span>
<?php	} ?>
<?php if(isset($passwordSizeError)){  ?>
	<span id="pwSizeError" class"error"><?= $passwordSizeError ?></span>
<?php	} ?>
<p> FULL password: <?= htmlspecialchars($password) ?></p>


