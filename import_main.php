<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "Upload and Import";
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
		<td width="90"><a href="#"><img src="images/mdt.jpg" /></a></td>
		<td><a href="#">Microsoft Deployment Toolkit Database</a></td>
	</tr>
</table>

<?php	
	include("layout/footer.php");
?>	