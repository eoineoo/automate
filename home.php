<?php
	$pagetitle = "Home";
	require_once("inc/functions.php");
	require_once("inc/header.php");
	error_reporting(0);
	checkLogin();
?>
	
	<p class="mainPage">Welcome <strong><?php echo $_SESSION['username']; ?></strong> to <em>Automate</em>, a web application dedicated to automating manual tasks.</p>
	<p>&nbsp;</p>
	<p>Please select an option from below</p>
	
	<table id="hor-minimalist-a" border=0 width=600>
	
		<tr>
			<td colspan=3>&nbsp;</td>
		</tr>
	
		<tr>
			<td width=33%><a href="assets/"><img src="images/lease_returns.png"/></a></td>
			<td width=33%><a href="config/"><img src="images/configuration.png"/></td>
			<td width=33%><a href="import/"><img src="images/data_import.png"/></a></td>
		</tr>
		
		<tr>
			<td width=33% style="padding:10px;"><a href="assets/">Lease Returns Management</a></td>
			<td width=33%><a href="config/">Application Installations</a></td>
			<td width=33%><a href="import/">Data Import</a></td>
		</tr>
		
	</table>
	
	<p >
		Etiam urna elit, commodo vitae ultrices ut, vestibulum non neque. Ut sodales lacus elit, in fermentum metus pretium in. Morbi varius lacus ipsum, ac hendrerit sapien pellentesque id. Integer euismod convallis dui, et vulputate leo suscipit sed. Morbi vel convallis dolor, ac lacinia odio. Curabitur viverra cursus eros sed pharetra. Pellentesque rhoncus massa lacinia fermentum scelerisque. Nunc feugiat massa eros.
	</p>
			
	<p>
		Donec sit amet blandit ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus semper est enim, in rhoncus ante sodales sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur tristique volutpat eros, in volutpat sem euismod quis. 
	</p>
	
	<p>
		Proin ac rhoncus ipsum, id rutrum risus. In tempus gravida vulputate. In sit amet varius mi. Sed mauris tortor, euismod eget lobortis a, semper at neque. Etiam eget pulvinar ipsum, consequat tristique felis. Praesent sed est sit amet nisl pellentesque molestie ut sit amet risus. Vivamus eget vulputate lectus.
	</p>
	
<?php
	include("inc/footer.php");
?>