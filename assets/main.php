<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "Asset Management and Lease Returns";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
?>

<h2>Asset Management and Lease Returns</h2>
<br />
<p class="stats">What do you want to do?</p>
<br />
<table id="hor-minimalist-a" width="80%" border = 1>
	<tr>
		<!-- <td width="20%"><a href="view_leases.php"><img src="../images/cmdb.png" /></a></td> -->
		<td width="20%"><a href="lease"><img src="../images/cmdb.png" /></a></td>
		<td width="80%"><a href="lease">View Lease Detail</a></td>		
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="../images/search.png" /></a></td>
		<td><a href="#">Search</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="../images/mdt.jpg" /></a></td>
		<td><a href="#">View All Assets</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
</table>

<?php	
	require_once("/../inc/footer.php");
?>	