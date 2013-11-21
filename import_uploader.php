<?php
	
	/**
	* Sources:
	* 	1) http://stackoverflow.com/questions/5593473/how-to-upload-and-parse-a-csv-file-in-php
	* 	2) http://us2.php.net/manual/en/features.file-upload.post-method.php
	* 	3) http://stackoverflow.com/questions/17153624/using-php-to-upload-file-and-add-the-path-to-mysql-database
	* Uploads a file to the "/csv" directory
	*/
	
	$pagetitle = "Uploader";
	include("layout/header.php");
	
	if ( isset($_POST["submit"]) ) {
		if ( isset($_FILES["file"]) ) {
			
			#File Details
			$user 			= 	"emccrann"; # Will capture currently logged-in user
			$filename 		= 	$_FILES["file"]["name"];
			$filetype 		= 	$_FILES["file"]["type"];
			$allowed_types	=	array("text/comma-separated-values", "text/csv", "text/plain", "application/csv", "application/excel", "application/vnd.ms-excel", "application/vnd.msexcel", "application/txt", "text/anytext");
			$filesize 		= 	number_format((float)($_FILES["file"]["size"] / 1024), 2, '.', '');
			$time 			= 	time();
			$description 	= 	$_POST['Description'];
			$temp_file 		= 	$_FILES["file"]["tmp_name"];
			$new_filename 	= 	uniqid() . $filename;
			$path 			= 	dirname($_SERVER['REQUEST_URI']) . "/csv/" . $new_filename; 
			
			#if there was an error uploading the file
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else {
                #Print file details - Debugging
				#echo "<b>File name</b>: " 		. $filename 	. "<br /><br />";
				#echo "<b>File type</b>: " 		. $filetype 	. "<br /><br />";
				#echo "<b>File size</b>: " 		. $filesize 	. " Kb<br /><br />";
				#echo "<b>Temp file name</b>: " . $temp_file 	. "<br /><br />";
				#echo "<b>Description</b>: " 	. $description 	. "<br /><br />";
				#echo "<b>Timestamp</b>: "		. $time 		. "<br /><br />";
				#echo "<b>Full path</b>: "		. $path 		. "<br /><br />";
								
				#If file already exists
				if (file_exists("csv/" . $filename)) {
					echo $filename . " already exists. ";
				}
				#Check the mimetype to see if it's a valid CSV file - additional security is required
				else if (!(in_array($filetype, $allowed_types)))	{
					echo "File type <b>$filetype</b> is not allowed. Please upload a CSV file.";
					header("refresh:8; url=import_form.php");
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
				
					#Connect to MySQL database
					mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
					mysql_select_db("automate_test") or die(mysql_error());
				
					#Write information about the CSV file (not its contents) to database
					mysql_query("INSERT INTO import_data (orig_name, new_name, user, num_entries, description, url) VALUES ('$filename', '$new_filename', '$user', '$rows', '$description', '$path')");
					
					#Successful upload
					echo "File uploaded successfully. Redirecting to review and import page.<br />Click <a href=import_display.php?csv=$new_filename>here</a> if your browser does not redirect you automatically.";
					header("refresh:3; url=import_display.php?csv=$new_filename");
				}
			}
		} 
		else {
			echo "No file selected <br />";
		}
	}
	include("layout/footer.php");
?>