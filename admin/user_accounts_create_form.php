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
   $('#createAccount').click(function() {
		$( "#create-confirm" ).dialog	({
			resizable:false,
			height: 'auto',
			width: 400,
			modal: true,
			draggable: false,
			buttons:	{
				"Create new account": function()	{
					//Use JQuery to post values to user_accounts_source.php, return results to the 'results' div
					$.post('/automate/admin/user_accounts_source.php',{action: "create"},function(res){
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