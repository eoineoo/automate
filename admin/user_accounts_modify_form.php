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
	
	?>
	
<script>
$(function() {
	$('#modifyAccount').click(function() {
		//Confirmation box
		$( "#modify-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Modify": function()	{
					//Get serial number from table, assign to JavaScript variable that can be used in $.post
					var jId = ($('#result_table td:nth(0)').html());
				
					//Use JQuery to post values to user_accounts_source.php, return results to the 'results' div
					$.post('/automate/admin/user_accounts_source.php',{action: "modify", id:jId},function(res){
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