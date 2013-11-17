<?php
	include("../inc/header.php");
	
?>
	
<?php

	/**
	* Sources:
	* 	1) http:#stackoverflow.com/questions/5593473/how-to-upload-and-parse-a-csv-file-in-php
	* 	2) http:#us2.php.net/manual/en/features.file-upload.post-method.php
	* Uploads a file to /csv directory
	*/
	
	if ( isset($_POST["submit"]) ) {
		if ( isset($_FILES["file"])) {
			
			#Variables
			$filename = $_FILES["file"]["name"];
			$filetype = $_FILES["file"]["type"];
			$filesize = $_FILES["file"]["size"];
			$temp_file = $_FILES["file"]["tmp_name"];
			#$new_filename = date('l jS \of F Y h i s A'); #Format: Sunday 17th of November 2013 08 43 41 PM
			$new_filename = date('U') . ".csv";
			
			#if there was an error uploading the file
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else {
                #Print file details
				echo "Upload: " . $filename . "<br />";
				echo "Type: " . $filetype . "<br />";
				echo "Size: " . ($filesize / 1024) . " Kb<br />";
				echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
				#if file already exists
				if (file_exists("upload/" . $filename)) {
					echo $filename . " already exists. ";
				}
				else {
					move_uploaded_file($temp_file, "csv/" . $new_filename);
					echo "Stored in: " . "csv/" . $new_filename . "<br />";
					echo "Click <a href=\"display.php?csv=$new_filename\">here</a> to view its contents";
				}
			}
		} 
		else {
			echo "No file selected <br />";
		}
	}	

?>
	
	<!-- File upload form -->
	<table width="600">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
		<!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
			<tr>
				<td>Select file</td>
				<td width="80%"><input type="file" name="file" id="file" /></td>
			</tr>

			<tr>
				<td>Submit</td>
				<td><input type="submit" name="submit" /></td>
			</tr>

		</form>
	</table>
	
<?php
	include("../inc/footer.php");
?>