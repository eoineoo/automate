<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "Import to CMDB";
	include("layout/header.php");
?>

<h2>Data Upload and Import</h2>
<p class="stats">Select what database you want to import into:</p>

<table id="hor-minimalist-a" border = 1>
	<tr>
		<td width="90"><a href="import_form.php"><img src="images/cmdb.png" /></a></td>
		<td><a href="import_form.php">Configuration Management Database</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td><img src="images/mdt.jpg" /></td>
		<td>Microsoft Deployment Toolkit Database</td>
	</tr>
</table>

<?php	
	include("layout/footer.php");
?>	