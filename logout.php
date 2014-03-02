<?php
	
	/**
	 * logout.php - Clears session variable, redirects user to login.php
	 */
	$pagetitle = "Logging out..";

	//Include our functions, db_connect and header files
	require_once("inc/header.php");  
	require_once("inc/functions.php");

	logout();

	include("inc/footer.php");

?>
	
	