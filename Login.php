 <?php 
 session_start();
 $thisPage="loginPage.php";
 


 if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"] == true) {
	 
    header("Location:index.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }

?>

<html>
<?php include_once('head.php') ?>
<?php include_once('header.php') ?>
<?php include_once('navigation.php')?>
<body>
<h2>Log Into Account</h2>


<div id="logininputs">
	<form method="POST" action="login_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email" id="email" required><br>
	
		<label for="password">Enter your Password:</label><br>
		<input type="password" name="password" id="password" value="<?php isset($_SESSION['password'])?>"
		required><br>
				<?php if (isset($_SESSION['errors']['password'])) {?>
		<span id="passwordError" class="error"><?= $_SESSION['errors']['password'] ?></span>
		<?php } ?>
		<label for"Login">Login Button:</label>
		<input type="submit" name="Login">
	</form>
</div>
</body>

<?php include_once('footer.php')?>

</html>



