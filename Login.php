<?php $thisPage="loginPage"; ?>
session_start();
<html>
<head>
<link href="Styles/TopLinks.css" type="text/css" rel="stylesheet">
<link rel="LOGO" type="image/png" href="favicon.ico">		
<p>
<div id="LogoAndName">
<img id="LogoPhoto" src="LOGO.JPG" alt="Logo"/>
</p>
<h1>Jackie's Knitting Nook</h1>
</div>
<h2 id="loginHeader">Log Into Account</h2>

	<form method="post" action="login_handler.php">
		<div>Email: <input type="text" name="email"></div>
		<div>PassWord: <input type="text" name="password"></div>
		<div>PassWord: <input type="password" name="Login"></div>
	</form>
		
	<div id="bottomfooter">
	<p id="foot">
	<footer>&copy; Jackie's Knitting Nook, all items owned by "" photo's are not to be used elsewhere without permission and Compensation.</Footer>
	</p>
	</div>
	</head>	
</html>