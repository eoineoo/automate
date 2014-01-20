<?php
	
	/**
	* Admin main page - Administrators only
	*/
	$pagetitle = "Administration";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	#checkLogin();
	
?>

<h2>Automate Administration</h2>
<br />
<p class="stats">What do you want to do?</p>
<br />
<table id="hor-minimalist-a" width="80%" border = 1>
	<tr>
		<td width="20%"><a href="import-history"><img src="../images/cmdb.png" /></a></td>
		<td width="80%"><a href="import-history">Import History</a></td>		
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="../images/search.png" /></a></td>
		<td><a href="#">Scheduled Tasks</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="../images/mdt.jpg" /></a></td>
		<td><a href="#">User Accounts</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
</table>

<?php

	require_once("/../inc/footer.php");  
?>