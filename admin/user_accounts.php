<?php
	
	/**
	* Manage User Accounts - Administrators only
	*/
	$pagetitle = "Admin - User Accounts";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();
	
	#Query
	$select		=  	"SELECT staff_id AS 'ID', username AS 'username', isadmin AS 'Is Admin' ";
	$from		= 	"FROM users ";
	$order		= 	"ORDER BY staff_id";
	$sql		= 	$select . $from . $order ;
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);

?>

	<h2>Manage User Accounts</h2>
	<br />
	<table id="result_table" cellpadding="0" cellspacing="0" border="1" class="hor-minimalist-a" style="padding: 50px 0 0 0;width: 60%;"> 
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Is Admin</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody> 

<?php
	#Loop and print contents of SQL query
	while($row = mysqli_fetch_array($result))	{
	
		#Row highlighting
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
		echo "<td width=\"10%\"><a href=\"users/mod/".$row['ID']."\"><img src=\"../images/edit.png\" /></a></td>";
		echo "</tr>";
	}
	echo "<tr class=\"spaceUnder\"></tr></tbody>";
	echo "</table>";
	
	mysqli_free_result($result);

	require_once("/../inc/footer.php");  
?>