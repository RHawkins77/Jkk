<?php
require_once('session_helper.php');
session_start();
logoutUser();
header("Location: index.php");
?> 
