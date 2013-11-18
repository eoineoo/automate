<?php
	
	/**
	* Basic HTML form that sends file to uploader.php
	*/
	
	include("../inc/header.php");
?>

<!-- File upload form -->
	<table width="600">
		<!--<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">-->
		<form action="uploader.php" method="post" enctype="multipart/form-data">
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
				<td>Submit:</td>
				<td><input type="submit" name="submit" /></td>
			</tr>

		</form>
	</table>

<?php	
	include("../inc/footer.php");
?>	