<?php
	
	/**
	* Search for assets by: asset tag, serial, or user
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
?>
<link rel="stylesheet" href="http://localhost/automate/resources/jquery-ui.css">
<script src="http://localhost/automate/resources/jquery-ui.js"></script>

<script>
	
	$(function(){
        $('#insert').click(function(){
            
			var jAssetTag = $('#assetTag').val();
			var jSerialNum = $('#serialNumber').val();
			var jOwner = $('#owner').val();
			
			$.post('/automate/assets/search_source.php',{action: "insert", assetTag:jAssetTag, serialNumber:jSerialNum, owner:jOwner},function(res){
                $('#results').html(res);				
            }); 			
			
        });		
    });
	
	$(function(){
	//autocomplete owner tag field
		$("#owner").autocomplete({
			source: "search_autocomplete.php",
			minLength: 1
		});
	});
		
</script>
	
	<h2 style="padding:0 0 10px 0;">Search for Assets</h2>
	<p>Enter text into one of the following fields.</p>
	
	<!--<form action="" method="post">-->
	
		<table class="search_form">
		
			<tr class="spaceUnder">
				<td>
					<img src="../images/asset_tag.png"/>
				</td>
				<td>
					<img src="../images/serial_number.png"/>
				</td>
				<td>
					<img src="../images/owner.png"/>
				</td>
			</tr>
			
			<tr class="spaceUnder">
				<td>
					<input type="text" id="assetTag" name="asset_tag" value="Asset tag" onfocus="if(this.value == 'Asset tag') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Asset tag'; } this.style.color='#708090';"></td>
				</td>
				<td>
					<input type="text" id="serialNumber" name="serial_number" value="Serial number" onfocus="if(this.value == 'Serial number') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Serial number'; } this.style.color='#708090';"></td>
				</td>			
				<td>
					<input type="text" id="owner" name="owner" value="Owner" onfocus="if(this.value == 'Owner') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Owner'; } this.style.color='#708090';"></td>
				</td>
			</tr>
			
			<tr class="spaceUnder">
				<td colspan="3"><button id="insert">Search</button></td>
			</tr>
			
		</table>
	
	
	<!--Div to display the result of our operation --> 
	<div id="results"></div>
	
	
<?php 
	
	require_once("/../inc/footer.php");
	
?>