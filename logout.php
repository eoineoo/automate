<?php
	
	/**
	 * Logout.php
	 * 
	 * Clears session variables
	 * Redirects user to login.php
	 */
	
	$pagetitle = "Logging out..";
	
	require_once("inc/header.php");  
	require_once("inc/functions.php");

	logout();

	include("inc/footer.php");

?>
	
	