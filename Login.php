<?php $thisPage="loginPage.php"; 
session_start();
phpinfo();
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
<?php
    if (isset($_SESSION["status"])) {
      echo <div id="status"> .  $_SESSION["status"] . </div>;
      unset($_SESSION["status"]);
    }
?>

<div id="logininputs">
	<form method="POST" action="login_handler.php">
		<label for"query">Enter your Email and Password:</label><br>
		Email:<input value="<?php echo isset($_SESSION['presets']['email']) ? $_SESSION['presets']['email'] : "" ?>" type="text" name="email"><br>
		PassWord:<input type="password" name="password"><br>
		Login<input type="submit" name="Login">
	</form>
</div>
</body>
	<div id="footer">
	<p>
	<Strong>&copy; Jackie's Knitting Nook, all items owned by "" photo's are not to be used elsewhere without permission and Compensation.</Strong>
	</p>
	</div>
</html>



