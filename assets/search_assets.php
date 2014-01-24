<?php
	
	/**
	* Search for assets by: asset tag, serial, or user
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
?>

<script>
	$(function() {
    
		//autocomplete asset tag field
		$(".tag").autocomplete({
			source: "search_assets_source.php",
			minLength: 1
		});
		//autocomplete owner tag field
		$(".owner").autocomplete({
			source: "search_assets_source.php",
			minLength: 1
		});
		//autocomplete serial number field
		$(".serial").autocomplete({
			source: "search_assets_source.php",
			minLength: 1
		});
 
	});
</script>

<link rel="stylesheet" href="http://localhost/automate/resources/jquery-ui.css">
<script src="http://localhost/automate/resources/jquery-ui.js"></script>
	
	<h2 style="padding:0 0 10px 0;">Search for Assets</h2>
	
	<form action="" method="post">
	
		<table class="search_form">
		
			<tr class="spaceUnder">
				<td>
					<img src="../images/asset_tag.png"/>
				</td>
				<td>
					<img src="../images/owner.png"/>
				</td>
				<td>
					<img src="../images/serial_number.png"/>
				</td>
			</tr>
			
			<tr class="spaceUnder">
				<td>
					<input type="text" class="tag" id="asset_tag" name="asset_tag" value="Asset tag" onfocus="if(this.value == 'Asset tag') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Asset tag'; } this.style.color='#708090';"></td>
				</td>
				<td>
					<input type="text" class="owner" id="owner" name="owner" value="Owner" onfocus="if(this.value == 'Owner') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Owner'; } this.style.color='#708090';"></td>
				</td>	
				<td>
					<input type="text" class="serial" id="serial_number" name="serial_number" value="Serial number" onfocus="if(this.value == 'Serial number') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Serial number'; } this.style.color='#708090';"></td>
				</td>			
			</tr>
			
		</table>
	
	</form>
	
	
<?php 
	
	require_once("/../inc/footer.php");
?>