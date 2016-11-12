
<html>
<head></head>
<body>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
<link href="Styles/TopLinks.css" type="text/css" rel="stylesheet">
<link rel="icon" type="image/png" href="favicon.ico">
		
<p>
<div id="LogoAndName">
<img id="LogoPhoto" src="LOGO.JPG" alt="Logo"/>
</p>
</div>
<div id="account">
<a href="Login.php">LOGIN</a> |
<a href="CreateAccount.html">Create Account</a>
</div>
<h1>Jackie's Knitting Nook</h1>

<?php if(isset($statusError)){  ?>
	<span id="statusError" class"error"><?= $statusError ?></span>
<?php	} ?>

<?php require 'naviagation.php'; ?>

<div id ="aboutsection">
<div id = "aboutJackieHeader">
<h2 id="aboutheader">ABOUT JACKIE</h2>
</div>
	<img id="Jackie" src="Jackie.jpg" alt="PhotoOfJackie"/>
	<p id="aboutGrandma">
	Growing up with a Mother who loved to knit, taught me everything I know. Since I 
	was a young little girl, I can remember learning how to crochet with my Grandma.
	After retiring, I found that, if I was sitting, I was knitting. As my
	grandchildren grew older, my inventory grew larger. I decided that it was time
	to take my various handmades to the road and setup at Holday Bazaars. The greatest
	joy was experiencing the love that others had when they purchased my items. I was
	more surprised when they said they were for themselves and not for gifts (we all know how
	many unwanted Christmas Gift end up in attic boxes) but rather for themselves. I am new
	to the Internet Online sales and will start out with mostly what I have already made and
	available through the website
	</p]
	</div>
	
	
	<div id="footer">
	<p id="foot">
	<footer>&copy; Jackie's Knitting Nook  |  All items owned by Jackie  |  Photo's are not to be used elsewhere without permission & Compensation</Footer>
	</p>
	</div>
</body>
</html>