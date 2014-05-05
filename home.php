<?php
	
	/** 
	 * Home.php
	 *
	 * Main page once logged-in as non-Admin
	 * Displays links to main areas of web application
	 */

	$pagetitle = "Home";
	require_once("inc/functions.php");
	require_once("inc/header.php");
	error_reporting(0);
	checkLogin();
?>
	
	<p class="mainPage">Welcome <strong><?php echo $_SESSION['username']; ?></strong> to <em>Automate</em>, a web application dedicated to automating manual tasks.</p>
	<p>&nbsp;</p>
	<p>Please select an option from below</p>
	
	<table id="hor-minimalist-a" border=0 width=600>
	
		<tr>
			<td colspan=3>&nbsp;</td>
		</tr>
	
		<tr>
			<td width=33%><a href="assets/"><img src="images/lease_returns.png"/></a></td>
			<td width=33%><a href="config/"><img src="images/configuration.png"/></td>
			<td width=33%><a href="import/"><img src="images/data_import.png"/></a></td>
		</tr>
		
		<tr>
			<td width=33% style="padding:10px;"><a href="assets/">Lease Returns Management</a></td>
			<td width=33%><a href="config/">Application Installations</a></td>
			<td width=33%><a href="import/">Data Import</a></td>
		</tr>
		
	</table>
	
<?php
	include("inc/footer.php");
?>