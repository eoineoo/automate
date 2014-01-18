<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	$pagetitle = "File Selection Form";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php"); 
	require_once("/../inc/functions.php");
?>

<!-- File upload form -->
	<table width="600">
		<form id="cmdbForm" action="cmdb_file_upload.php" method="post" enctype="multipart/form-data">
			<tr>
				<td>Select file:</td>
				<td width="80%"><input type="file" name="file" id="file" /></td>
			</tr>

			<tr>
				<td>Description:</td>
				<td width="80%"><textarea rows="3" cols="25" id="comment "name="Description"></textarea></td>
			</tr>
			
			<tr>
				<td>Upload:</td>
				<td><input type="submit" name="submit" /></td>
			</tr>

		</form>
	</table>

<?php	
	require_once("/../inc/footer.php");
?>	