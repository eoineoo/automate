<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "Asset Management and Lease Returns";
	include("layout/header.php");
?>

<h2>Asset Management and Lease Returns</h2>
<br />
<p class="stats">What do you want to do?</p>
<br />
<table id="hor-minimalist-a" width="80%" border = 1>
	<tr>
		<td width="20%"><a href="assets_view_leases.php"><img src="images/cmdb.png" /></a></td>
		<td width="80%"><a href="assets_view_leases.php">View Lease Detail</a></td>		
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="images/search.png" /></a></td>
		<td><a href="#">Search</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td width="90"><a href="#"><img src="images/mdt.jpg" /></a></td>
		<td><a href="#">View All Assets</a></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
</table>

<?php	
	include("layout/footer.php");
?>	