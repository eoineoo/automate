<?php
	
	/**
	* Admin main page - Administrators only
	*/
	$pagetitle = "Administration";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();
	
?>
<h2>Automate Administration</h2>
<br />
<table id="hor-minimalist-a" width="80%" border = 1>
	<tr>
		<td width="90"><a href="config"><img src="../images/config.png" /></a></td>
		<td><a href="config">Config History</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="20%"><a href="imports"><img src="../images/data_import_s.png" /></a></td>
		<td width="80%"><a href="imports">Import History</a></td>		
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="tasks"><img src="../images/tasks.jpg" /></a></td>
		<td><a href="tasks">Scheduled Tasks</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="users"><img src="../images/accounts.png" /></a></td>
		<td><a href="users">User Accounts</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
</table>

<?php

	require_once("/../inc/footer.php");  
?>