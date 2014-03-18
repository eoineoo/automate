<?php
	
	/**
	* Modify User Accounts - Administrators only
	* Select what modifications you want to make to the account, create a new one or delete the selected one
	*/
	$pagetitle = "Admin - User Accounts";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();
	
	#Determine what serial is selected
	if(isset($_GET['id']))	{
			$id = $_GET['id'];		
	}
	else	{
			$id = "";
	}
	
	#Query
	$select		=  	"SELECT staff_id AS 'ID', username AS 'username', isadmin AS 'Is Admin' ";
	$from		= 	"FROM users ";
	$where		= 	"WHERE staff_id = $id ";
	$order		= 	"ORDER BY staff_id";
	$sql		= 	$select . $from . $where . $order ;
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);

?>
<link rel="stylesheet" href="http://localhost/automate/resources/css/jquery-ui.css">
<script src="http://localhost/automate/resources/js/jquery-ui.js"></script>
<script>
$(function() {
	$('#deleteAccount').click(function() {
		//Confirmation box
		$( "#delete-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Delete User": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jId = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to user_accounts_source.php, return results to the 'results' div
					$.post('/automate/admin/user_accounts_source.php',{action: "delete", id:jId},function(res){
						$('#results').html(res);				
					});
					
					$( this ).dialog( "close" );
				},
				Cancel: function()	{
					$( this ).dialog( "close" );
				}
			}
		});
		var delay = 5000;
		setTimeout(function(){ window.location = 'http://localhost/automate/admin/users';}, delay);    
	});
});
</script>
	<h2>Manage User Accounts</h2>
	<br />
	<table id="result_table" cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" style="padding: 50px 0 0 0;width: 60%;"> 
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Is Admin</th>
			<th colspan="3">Modify</th>
		</tr>
	</thead>
	<tbody>

<?php
	#Loop and print contents of SQL query
	while($row = mysqli_fetch_array($result))	{
	
		if ($row['Is Admin'] == 'Yes')	{
			$isadmin = 'is_admin';
		}
		else	{
			$isadmin = 'not_admin';
		}
	
		echo "<tr class=$isadmin>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['Is Admin'] . "</td>";
		#echo "<td width=\"5%\"><input type=\"image\" src=\"../images/details_open.png\" id=\"createAccount\" ></td>";
		#echo "<td width=\"5%\"><input type=\"image\" src=\"../images/edit.png\" id=\"modifyAccount\" ></td>";
		echo "<td width=\"5%\"><a href=\"user_accounts_create_form.php \"><img src=\"../images/details_open.png \" /></a></td>";
		echo "<td width=\"5%\"><a href=\"user_accounts_modify_form.php?id=" . $row['ID'] . "\"><img src=\"../images/edit.png \" /></a></td>";
		echo "<td width=\"5%\"><input type=\"image\" src=\"../images/details_close.png\" id=\"deleteAccount\" ></td>";
		
		echo "</tr>";
		
		$username = $row['username'];
		
	}
	echo "<tr class=\"spaceUnder\"></tr></tbody>";
	echo "</table>";
	
	mysqli_free_result($result);
	
	?>
	
	<!-- Confirmation dialogs -->
	<div id="create-confirm" title="Confirmation" style="display:none;">
		<p>You are about to create a new user account. Are you sure you want to do this?</p>
	</div>
	<div id="modify-confirm" title="Confirmation" style="display:none;">
		<p>You are about to change account '<b><?php echo $username ?></b>'. Are you sure you want to do this?</p>
	</div>
	<div id="delete-confirm" title="Confirmation" style="display:none;">
		<p>You are about to delete account '<b><?php echo $username ?></b>'. Are you sure you want to do this?</p>
	</div>
	
	<?php

	#Return data here
	echo "<div class=\"spacer\"></div>";
	echo "<div id=\"results\" style=\"display:table;\"></div>";
	echo "<div class=\"spacer\"></div>";	
	require_once("/../inc/footer.php");  
?>