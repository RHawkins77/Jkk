 <?php  $thisPage="loginPage.php"; ?>
<?php 
session_start();

 
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


		<?php if (isset($_SESSION['errors']['password'])) {?>
		<span id="passwordError" class="error"><?= $_SESSION['errors']['password'] ?></span>
		<?php }  ?>
		
		<?php if (isset($_SESSION['errors']['noAccess'])) {?>
		<span id="passwordError" class="error"><?= $_SESSION['errors']['noAccess'] ?></span>
		<?php }  ?>

<div id="logininputs">
	<form method="POST" action="login_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email" id="email" value="<?php if(isset($_SESSION['failedemail'])) {?> <?= $_SESSION['failedemail'] ?> <?php } ?> " required><br>
	
		<label for="password">Enter your Password:</label><br>
		<input type="text" name="password" id="password" required><br>
		
		<span id="login"><label for"Login">Login Button:</label></span>
		<input type="submit" name="Login">
	</form>
</div>
</body>

<?php include_once('footer.php')?>

</html>



