<?php
	
	/**
	* Sources:
	* 	1) http://stackoverflow.com/questions/5593473/how-to-upload-and-parse-a-csv-file-in-php
	* 	2) http://us2.php.net/manual/en/features.file-upload.post-method.php
	* 	3) http://stackoverflow.com/questions/17153624/using-php-to-upload-file-and-add-the-path-to-mysql-database
	*
	* Uploads a CSV file to the "/csv" directory and writes its details (e.g. filename, number of rows etc.) to the database using a prepared statement
	*/
	
	$pagetitle = "Uploader";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	if ( isset($_POST["submit"]) ) {
		if ( isset($_FILES["file"]) ) {
			
			#File Details
			$user 			= 	"emccrann"; # Will capture currently logged-in user
			$db_name		= 	"CMDB";
			$filename 		= 	$_FILES["file"]["name"];
			$filetype 		= 	$_FILES["file"]["type"];
			$allowed_types	=	array("text/comma-separated-values", "text/csv", "text/plain", "application/csv", "application/excel", "application/vnd.ms-excel", "application/vnd.msexcel", "application/txt", "text/anytext");
			$filesize 		= 	number_format((float)($_FILES["file"]["size"] / 1024), 2, '.', '');
			$time 			= 	time();
			$description 	= 	$_POST['Description'];
			$temp_file 		= 	$_FILES["file"]["tmp_name"];
			$new_filename 	= 	"cmdb_" . uniqid() . $filename;
			$path 			= 	dirname($_SERVER['REQUEST_URI']) . "/csv/" . $new_filename; 
			
			#if there was an error uploading the file
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else {
                #If file already exists - unlikely considering we're using uniqid()
				if (file_exists("csv/" . $filename)) {
					echo $filename . " already exists. ";
				}
				#Check the mimetype to see if it's a valid CSV file - additional security may be required
				else if (!(in_array($filetype, $allowed_types)))	{
					echo "File type <b>$filetype</b> is not allowed. Please upload a CSV file.";
					header("refresh:8; url=main.php");
				}
				else {
					#Move the file to the /csv directory
					move_uploaded_file($temp_file, "csv/" . $new_filename);
					
					#Find out how many rows are in the CSV file
					if (($handle = fopen("csv/".$new_filename, "r")) !== FALSE) {	
						$rows = 0;
						while (($data = fgetcsv ($handle, 1024, ",")) !== FALSE)	{
							$rows++;							
						}
						fclose($handle);
					}
				
					#Connect to Automate DB
					$mysqli = mysqli_connect("localhost", "root", "", "automate");
				
					#SQL Query
					$tablename = "csv_details";
					$sql = "INSERT INTO $tablename (db_name, orig_name, new_name, user, num_entries, description, url) VALUES (?, ?, ?, ?, ?, ?, ?)";
					
					#Create and check prepared statement
					$stmt = $mysqli->prepare($sql);
					if ( false === $stmt )	{
						die_and_display('<p class=die>Preparing the statement failed: ' . htmlspecialchars($mysqli->error) . "</p>");		
					}
					
					#Initialise array
					$csvData = array("","","","","","","","","","","","","","","","","","","","","");
					
					#Bind parameters to the query and check for errors
					$rc = $stmt->bind_param('ssssiss', $db_name, $filename, $new_filename, $user, $rows, $description, $path);
					if ( false === $rc )	{
						die_and_display('Binding parameters failed: ' . htmlspecialchars($stmt->error));
					}
					
					#Run and check the prepared statement
					$rc = $stmt->execute();	
					if ( false === $rc )	{
						die_and_display('<div id="alert"><a class="alert">Executing import failed: ' . htmlspecialchars($stmt->error) . '</a></div>');
					}
					
					#Close connection
					$stmt->close();
					
					#Successful upload
					echo "File uploaded successfully. Redirecting to review and import page.<br />Click <a href=display-csv/$new_filename>here</a> if your browser does not redirect you automatically.";
					header("refresh:3; url=display-csv/$new_filename");
				}
			}
		} 
		else {
			echo "No file selected <br />";
		}
	}
	require_once("/../inc/footer.php");
?>