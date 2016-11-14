<?php 
session_start();
$email = $_POST['email'];
$password = trim($_POST['password']);
$valid = false;




	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)){
		$emailError = "Invalid Email Address";
		$_SESSION['message'][] = "Invalid email Address";
		$valid = false;
	}
	if(empty($password)){
		$_SESSION['message'][] = "Missing Password";
		$passwordSizeError = "Invalid password size";
		$valid = false;
	}
	

	if(strlen($email) <= 10 || strlen($email) > 256){
		$emailError = "Invalid Email Address Size";
		$valid = false;
	
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL === false)){
		$notAEmail = "not an email";
		$valid = false;
	}
	if(!isset($password) === true || strlen($password) > 100){
		$passwordSizeError = "Too small or too big of an email";
		$valid = false;
	}
	if("rhawkins@u.boisestate.edu" == trim($_POST["email"]) && "helloworld" == trim($_POST["password"])) {
	$_SESSION["access_granted"] = true;
	$_SESSION["user_email"] = htmlspecialchars($email);
	$_SESSION["access_granted"] = true;
	header("Location:welcome_page.php");
	} else {
	$statusError = "Invalid username or password";
	$_SESSION["status"] = $status;
	$_SESSION["email_preset"] = htmlspecialchars($_POST["email"]);
	$_SESSION["access_granted"] = false;
	$valid = false;
	$_SESSION['valid'] = $valid;
	header("Location:login.php");
}

	if(isset($_SESSION['message'])){
		$_SESSION['presets']['email'] = $email;
		header("Location:login.php");
		exit;
	}

	?>
	
	
	

	
<?php	
	

	
	

/**
//This is just html to print out error codes and the user email and password when i started this and was verifying
we were passing the correct info in the right way. Not really relevant but kept in case i needed to use for debugging
---ryan

	<html>
<head></head>
<body>

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

</body>
</html>
	

**/


	
?>

