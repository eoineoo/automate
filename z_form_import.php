<?php
	
	/**
	* HTML form that sends scheduled task details to assets_create_task.php
	* https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php/5004276#5004276
	* https://stackoverflow.com/questions/1314518/sanitizing-users-data-in-get-by-php
	*/
	$pagetitle = "Z FORM IMPORT";
	include("inc/functions.php");
?>

<?php
	#If the value in the form is sent we insert it to a database
	if (isset($_POST['bar'])) {
	
		// you can access the values posted by jQuery.ajax
		// through the global variable $_POST, like this:
		$bar = $_POST['bar'];
		
		#Connect to Automate DB - automate.ajaxtest.id
		$mysqli = mysqli_connect("localhost", "root", "", "automate");
		
		#SQL Query
		$tablename = "ajaxtest";
		$sql = "INSERT INTO $tablename (id) VALUES (?)";
		
		#Create and check prepared statement
		$stmt = $mysqli->prepare($sql);
		if ( false === $stmt )	{
			echo('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");								
		}
		
		#Initialise array
		$csvData = array("");
		
		#Bind parameters to the query and check for errors
		$rc = $stmt->bind_param('i', $bar);
		if ( false === $rc )	{
			echo('Binding parameters failed: ' . htmlspecialchars($stmt->error));			
		}
		
		#Run and check the prepared statement
		$rc = $stmt->execute();	
		if ( false === $rc )	{
			echo('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($stmt->error) . '</a></div>');			
		}
		
		#Close connection
		$stmt->close();
		
	}
	
	include("layout/footer.php");
?>	