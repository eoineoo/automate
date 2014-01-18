<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "Upload and Import";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php"); 
	require_once("/../inc/functions.php");
	  
?>

<h2>Data Upload and Import</h2>
<br />
<p class="stats">Select what database you want to import into:</p>
<br />
<table id="hor-minimalist-a" border = 1>
	<tr>
		<td width="90"><a href="cmdb_file_selection.php"><img src="../images/cmdb.png" /></a></td>
		<td><a href="cmdb_file_selection.php">Configuration Management Database</a></td>		
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="mdt_file_selection.php"><img src="../images/mdt.jpg" /></a></td>
		<td><a href="mdt_file_selection.php">Microsoft Deployment Toolkit Database</a></td>
	</tr>
</table>

<?php	
	require_once("/../inc/footer.php");
?>	