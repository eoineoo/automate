<?php
	
	/**
	* Search for assets by: asset tag, serial, or user
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
?>
	
	<h2 style="padding:0 0 10px 0;">Search for Assets</h2>
	
	<table id="hor-minimalist-b" style="border: 1px solid black; width:60%;">
	
		<tr class="spaceUnder">
			<td>Asset Tag: </td>
			<td>
				<input type="text" id="asset_tag" name="asset_tag" value=""></td>
			</td>
		</tr>
		
		<tr class="spaceUnder">
			<td>Owner: </td>
			<td>
				<input type="text" id="owner" name="owner" value=""></td>
			</td>
		</tr>
		
		<tr class="spaceUnder">
			<td>Serial Number: </td>
			<td>
				<input type="text" id="serial" name="serial" value=""></td>
			</td>
		</tr>
		
	</table>
	
	
<?php 
	
	require_once("/../inc/footer.php");
?>