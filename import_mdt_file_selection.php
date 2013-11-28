<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "MDT File Selection Form";
	include("layout/header.php");
?>

<!-- File upload form -->
	<table width="600">
		<form action="import_mdt_file_upload.php" method="post" enctype="multipart/form-data">
		<!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
			<tr>
				<td>Select file:</td>
				<td width="80%"><input type="file" name="file" id="file" /></td>
			</tr>

			<tr>
				<td>Description:</td>
				<td width="80%"><textarea rows="3" cols="25" name="Description" /></textarea></td>
			</tr>
			
			<tr>
				<td>Upload:</td>
				<td><input type="submit" name="submit" /></td>
			</tr>

		</form>
	</table>

<?php	
	include("layout/footer.php");
?>	