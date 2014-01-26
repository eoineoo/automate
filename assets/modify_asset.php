<?php

	/**
	 * Modify asset
	 * Quickly and easily assign assets back into Spares, mark as retired, stolen etc.
	 */
	$pagetitle = "Create Scheduled Task";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");  
	
	#Determine what serial is selected
	if(isset($_GET['serial']))	{
			$serial = $_GET['serial'];		
	}
	else	{
			$serial = "";
	}
	
	#Query
	$select		=  	"SELECT DISTINCT(serial_num) AS 'Serial', asset_tag  AS 'Asset Tag', last_logon AS 'Last Logon', username AS 'Last User', owner AS 'Assigned To', model AS 'Model', status_level AS 'Status' ";
	$from		= 	"FROM assets a ";
	$join		= 	"LEFT OUTER JOIN asset_details a_d ON a_d.id = a.id ";
	$w_serial	= 	"WHERE serial_num LIKE '$serial'";
	$group		= 	"GROUP BY serial_num";
	$sql		= 	$select . $from . $join . $w_serial . $group;
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);
	
?>
<link rel="stylesheet" href="http://localhost/automate/resources/jquery-ui.css">
<script src="http://localhost/automate/resources/jquery-ui.js"></script>
<script>
$(function() {
   $('#moveToSpares').click(function() {
		//Confirmation box
		$( "#spares-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Move to Spares": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jSerial = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to modify_source.php, return results to the 'results' div
					$.post('/automate/assets/modify_source.php',{action: "spares", serial:jSerial},function(res){
						$('#results').html(res);				
					});
					
					$( this ).dialog( "close" );
				},
				Cancel: function()	{
					$( this ).dialog( "close" );
				}
			}
		});
	});
	$('#markAsRetired').click(function() {
		//Confirmation box
		$( "#retire-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Retire": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jSerial = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to modify_source.php, return results to the 'results' div
					$.post('/automate/assets/modify_source.php',{action: "retired", serial:jSerial},function(res){
						$('#results').html(res);				
					});
					
					$( this ).dialog( "close" );
				},
				Cancel: function()	{
					$( this ).dialog( "close" );
				}
			}
		});
	});
	$('#markAsLost').click(function() {
		//Confirmation box
		$( "#lost-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Mark As Lost": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jSerial = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to modify_source.php, return results to the 'results' div
					$.post('/automate/assets/modify_source.php',{action: "lost", serial:jSerial},function(res){
						$('#results').html(res);				
					});
					
					$( this ).dialog( "close" );
				},
				Cancel: function()	{
					$( this ).dialog( "close" );
				}
			}
		});
	});
	$('#markAsStolen').click(function() {
		//Confirmation box
		$( "#stolen-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Mark as stolen": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jSerial = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to modify_source.php, return results to the 'results' div
					$.post('/automate/assets/modify_source.php',{action: "stolen", serial:jSerial},function(res){
						$('#results').html(res);				
					});
					
					$( this ).dialog( "close" );
				},
				Cancel: function()	{
					$( this ).dialog( "close" );
				}
			}
		});
	});
});
</script>

<!-- Confirmation dialogs -->
<div id="spares-confirm" title="Confirmation" style="display:none;">
	<p>You are about to unassign <?php echo $serial ?> and mark it as returned to IT. Are you sure you want to do this?</p>
</div>
<div id="retire-confirm" title="Confirmation" style="display:none;">
	<p>You are about to mark <?php echo $serial ?> as retired. Are you sure you want to do this?</p>
</div>
<div id="lost-confirm" title="Confirmation" style="display:none;">
	<p>You are about to mark <?php echo $serial ?> as lost. Are you sure you want to do this?</p>
</div>
<div id="stolen-confirm" title="Confirmation" style="display:none;">
	<p>You are about to mark <?php echo $serial ?> as stolen. Are you sure you want to do this?</p>
</div>

<!-- Control Panel -->
<table cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" style="padding: 50px 0 0 0;"> 
	<tr>
		<td width="25%"><button id="moveToSpares" class="modify_asset_btn">Move to Spares</button></td>
		<td width="25%"><button id="markAsRetired" class="modify_asset_btn">Retired</button></td>
		<td width="25%"><button id="markAsLost" class="modify_asset_btn">Lost</button></td>
		<td width="25%"><button id="markAsStolen" class="modify_asset_btn">Stolen</button></td>
	</tr>
</table>

<div class="spacer"></div>
	
<table id="result_table" cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" style="padding: 50px 0 0 0;"> 
	<thead>
		 <tr>
		<th>Serial</th>
			<th>Asset Tag</th>
			<th>Last Logon</th>
			<th>Last User</th>
			<th>Assigned To</th>
			<th>Model</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody> 

<?php
	#Loop and print contents of SQL query
	while($row = mysqli_fetch_array($result))	{
	
		echo "<tr>";
		echo "<td>" . $row['Serial'] . "</td>";
		echo "<td>" . $row['Asset Tag'] . "</td>";
		echo "<td>" . $row['Last Logon'] . "</td>";
		echo "<td>" . $row['Last User'] . "</td>";
		echo "<td>" . $row['Assigned To'] . "</td>";
		echo "<td>" . $row['Model'] . "</td>";
		echo "<td>" . $row['Status'] . "</td>";
		echo "</tr>";
	}
	echo "<tr class=\"spaceUnder\"></tr></tbody>";
	echo "</table>";
	
	mysqli_free_result($result);

	#Return data here
	echo "<div class=\"spacer\"></div>";
	echo "<div id=\"results\" style=\"display:table;\"></div>";
	echo "<div class=\"spacer\"></div>";
			
	require_once("/../inc/footer.php");
?>