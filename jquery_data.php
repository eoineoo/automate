<?php
    
	$pagetitle = "JQuery Test";
	require_once("/inc/config.php");  
	require_once("/inc/functions.php");
	
	#Connect
	$mysqli = mysqli_connect("localhost", "root", "", "automate");
	
	#SQL
	$tablename = "ajaxtest";
	$sql = "INSERT INTO $tablename (name) VALUES (?)";
	#$name  = mysql_real_escape_string($_POST['name']);
	$name  = $_POST['name'];
	
	if($_POST['action'] == 'insert'){
	
		#Create prepared statement
		$ps = $mysqli->prepare($sql);
		
		if ( false === $ps )        {
				die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");                
		}
		
		#Bind parameters
		$rc = $ps->bind_param('s' , $name);
		if ( false === $rc )	{
			die_and_display('Binding parameters failed: ' . htmlspecialchars($ps->error));
		}
		
		#Run
		$rc = $ps->execute();
		if ( false === $rc )	{
			die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($ps->error) . '</a></div>');
		}
		
		$ps->close();
		
		echo "It worked!";
		
	}
?>