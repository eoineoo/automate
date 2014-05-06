<?php

   /** 
	* Main.php
	* Referenced tutorial: http://www.hauntednipple.co.uk/?p=94
	*
	* Main landing page with HTML form that posts username and password to auth.php
	*/

	$pagetitle = 'Login';
	require_once("inc/config.php");  
	require_once("inc/functions.php");
	
?>

<html>
	
	<head>
		<?php echo "<title>Automate - $pagetitle</title>"; ?>
		<link rel="stylesheet" type="text/css" href="http://localhost/automate/inc/style.css">
		<script type="text/javascript" src="http://localhost/automate/resources/js/jquery.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
		
			<div id="banner">
				<img src="http://localhost/automate/images/banner.jpg" />
			</div>
			
			<div id="spacer">&nbsp;</div>
			<div id="spacer">&nbsp;</div>
			
			<div id="content" align="center">
				
				<div id="loginForm">
					
					<form id="loginForm" name="loginForm" method="POST" action="login">
					
						<table class="loginTable" align="center" width="50%" border="0" >
							
							<tr style="background:#09c;">
								<td colspan="2"><strong>Login:</strong></td>
							</tr>
							
							<tr>
								<td width="25%">Username:</td>
								<td width="75%"><label><input type="text" name="username" id="username" size="25"/></label></td>
							</tr>
							
							<tr>
								<td width="25%">Password:</td>
								<td width="75%"><label><input type="password" name="password" id="password" size="25"/></label></td>
							</tr>
							
							<tr>
								<td colspan="2"><label><input type="submit" id="loginButton" value="Login" style="height: 25px; width: 100px;"/></label></td>
							</tr>
							
						</table>
					
					</form>
				
				</div>

<?php

	require_once("inc/footer.php");  

?>