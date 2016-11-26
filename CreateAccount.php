<?php $thisPage = "createAccount";?>

<html>
<?php include_once('head.php') ?>
<?php include_once('header.php') ?>
<body>
<?php include_once('userOptions.php')?>
<?php include_once('navigation.php')?>

<h2>CREATE ACCOUNT</h2>

<div id="account_creator_handler.php">
	<form method="POST" action="account_creator_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email" id="email" value="Wanted Email" required><br>
		<label for="password">Enter your Password:</label><br>
		<input type="text" name="password" id="password"required><br>
		<label for="passwordAgain">Re-Enter your Password:</label><br>
		<input type="text" name="passwordAgain" id="passwordAgain" required><br>
		<label for="First Name">Enter your First Name:</label><br>
		<input type="name" name="firstname" id="firstname" value="First name" required><br>
		<label for="Last Name">Enter your Last Name:</label><br>
		<input type="name" name="lastname" id="lastname" value="Last name" required><br>
		<label for"SubmitInfo">Submit:</label>
		<input type="submit" name="SubmitInfo">
	</form>
</div>
	
	

	
<?php include_once('footer.php')?>

</html>
