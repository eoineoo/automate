<?php
	$pagetitle = "Home";
	require_once("inc/functions.php");
	require_once("inc/header.php");
	error_reporting(0);
	checkLogin();
?>
	
	<table id="hor-minimalist-a" border=1 width=600>
		
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