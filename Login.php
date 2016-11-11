 
<?php $thisPage="loginPage.php";
session_start();


 if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:granted.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }

?>

<html>
	<head></head>
	  <link href="Styles/TopLinks.css" type="text/css" rel="stylesheet">
	  <link rel="LOGO" type="image/png" href="favicon.ico">	
	
<body>
<p>
<div id="LogoAndName">
<img id="LogoPhoto" src="LOGO.JPG" alt="Logo"/>
</p>
<h1>Jackie's Knitting Nook</h1>
</div>


<h2 id="loginHeader">Log Into Account</h2>


<div id="logininputs">
	<form method="POST" action="login_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email"><br>
		<label for="password">Enter your Password:</label><br>
		<input type="password" name="password"><br>
		<label for"Login">Login Button:</label>
		<input type="submit" name="Login">
	</form>
</div>
</body>
	<div id="footer">
	<p>
	<Strong>&copy; Jackie's Knitting Nook, all items owned by "" photo's are not to be used elsewhere without permission and Compensation.</Strong>
	</p>
	</div>
</html>



