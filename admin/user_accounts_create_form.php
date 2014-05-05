<?php

	/**
	* User_accounts_create_form.php
	*
	* Administrators only
	* Form to enter user details.
	* Data submitted to user_accounts_source.php, success/failure message returned using JQuery.
	*/
	
	$pagetitle = "Admin - Create Account";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();

?>
<link rel="stylesheet" href="http://localhost/automate/resources/css/jquery-ui.css">
<script src="http://localhost/automate/resources/js/jquery-ui.js"></script>
<script>
	/* 	JQuery to update user details without reloading page
		Data submitted to user_accounts_source.php
		Reference: http://blog.theonlytutorials.com/insert-show-records-jquery-ajax-php/ */
    $(function(){
        $('#create').click(function(){
            
			var jUsername = $('#username').val();
			var jFullName = $('#fullname').val();
			var jPassword = $('#password').val();
			var jIsAdmin = $('#isadmin').val();
			
			$.post('/automate/admin/user_accounts_source.php',{action: "create", username:jUsername, fullname:jFullName, password:jPassword, isadmin:jIsAdmin},function(res){
                $('#result').html(res);				
            });
		
			var delay = 4000;
			setTimeout(function(){ window.location = 'http://localhost/automate/admin/users';}, delay); 			
			
        });    
    });
	
	/* Disable all inputs after selecting the insert button */
	function disableFunction() {
		document.getElementById("username").disabled = 'true';
		document.getElementById("fullname").disabled = 'true';
		document.getElementById("password").disabled = 'true';
		document.getElementById("isadmin").disabled = 'true';
		document.getElementById("create").disabled = 'true';
	}
</script>
</head>
<body>
	
	<div id="scheduledTaskForm">
	
		<fieldset class="preconfig" style="display: inline-block;">
			<legend>Create User Account</legend>
			<table width="400" border="0" id="hor-minimalist-a">
				<tr>
					<td>Username:</td>
					<td>	
						<input type="text" id="username" name="username" style="padding:4px;"></td>
					</td>
				</tr>
				
				<tr>
					<td>Full Name:</td>
					<td>	
						<input type="text" id="fullname" name="fullname" style="padding:4px;"></td>
					</td>
				</tr>
					
				<tr>
					<td>Password:</td>
					<td>	
						<input type="password" id="password" name="password" style="padding:4px;"></td>
					</td>
				</tr>
					
				<tr>
					<td>Is Admin:</td>
					<td>
						<select name="isadmin" id="isadmin" style="width:160;padding:4px;">
							<option value="No" selected="selected">No</option>
							<option value="Yes">Yes</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td colspan="2"><button id="create" onclick="setTimeout(disableFunction, 1);">Create User</button></td>
				</tr>

			</table>

		</fieldset>

	
	</div>

	<!-- Div to display the result of our operation --> 
	<div id="result" style="width: 60%;"></div>

</body>

</html>

<?php	
	require_once("/../inc/footer.php");
?>