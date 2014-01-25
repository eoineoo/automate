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
            
			if ($('#assetTag').val() == 'Asset tag')	{
				var jAssetTag = '';
			}
			else	{
				var jAssetTag = $('#assetTag').val();
			}
			
			if ($('#serialNumber').val() == 'Serial number')	{
				var jSerialNum = '';
			}
			else	{
				var jSerialNum = $('#serialNumber').val();
			}
			
			if ($('#owner').val() == 'Owner')	{
				var jOwner = '';
			}
			else	{
				var jOwner = $('#owner').val();
			}
			
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
					<input type="text" id="assetTag" name="assetTag" value="Asset tag" onfocus="if(this.value == 'Asset tag') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Asset tag'; } this.style.color='#708090';"></td>
				</td>
				<td>
					<input type="text" id="serialNumber" name="serialNumber" value="Serial number" onfocus="if(this.value == 'Serial number') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Serial number'; } this.style.color='#708090';"></td>
				</td>			
				<td>
					<input type="text" id="owner" name="owner" value="Owner" onfocus="if(this.value == 'Owner') { this.value = ''; } this.style.color='black';" onblur="if(this.value == '') { this.value = 'Owner'; } this.style.color='#708090';"></td>
				</td>
			</tr>
			
			<tr class="spaceUnder">
				<td colspan="3"><button id="insert">Search</button></td>
			</tr>
			
		</table>
	
	<div class="spacer"></div>
	
	<!--Div to display the result of our operation --> 
	<div id="results" style="padding:0 0 25px 0";></div>
	
	<div class="spacer"></div>
	
<?php 
	
	require_once("/../inc/footer.php");
	
?>