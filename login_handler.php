<?php
	session_start();
	
	
	if ("rhawkins@u.boisestate.edu" == $_POST["email"] &&
    "helloworld" == $_POST["password"]) {
  $_SESSION["access_granted"] = true;
  header("Location:granted.php");

} else {
  $status = "Invalid username or password";
  $_SESSION["status"] = $status;
  $_SESSION["email_preset"] = $_POST["email"];
  $_SESSION["access_granted"] = false;

  header("Location:login.php");
}
		
?>