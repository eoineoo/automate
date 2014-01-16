<?php
	
	/**
	* HTML form that sends scheduled task details to assets_create_task.php
	* https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php/5004276#5004276
	* https://stackoverflow.com/questions/1314518/sanitizing-users-data-in-get-by-php
	*/
	$pagetitle = "Create Scheduled Task";
	include("layout/header.php");
	include("inc/functions.php");
?>
<script type="text/javascript" language="javascript" src="scripts/jquery.js"></script>
<script>
//http://api.jquery.com/ready/
$( document ).ready(function() {
  // Handler for .ready() called.

	// variable to hold request
	var request;
	// bind to the submit event of our form
	$("#foo").submit(function(event){
		// abort any pending request
		if (request) {
			request.abort();
		}
		// setup some local variables
		var $form = $(this);
		// let's select and cache all the fields
		var $inputs = $form.find("input, select, button, textarea");
		// serialize the data in the form (Encode a set of form elements as a string for submission)
		var serializedData = $form.serialize();

		// let's disable the inputs for the duration of the ajax request
		$inputs.prop("disabled", true);

		// fire off the request to /automate/z_form_import.php
		request = $.ajax({
			url: "/automate/z_form_import.php",
			type: "post",
			data: serializedData
		});

		// callback handler that will be called on success
		request.done(function (response, textStatus, jqXHR){
			//https://stackoverflow.com/questions/9676084/how-do-i-return-a-proper-success-error-message-for-jquery-ajax-using-php
			//https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php/5004276#5004276
			// log a message to the console
			console.log("Hooray, it worked!"),
			alert("Hooray, it worked!"),
			$('#bar').val(""),
			$('#output').html("<b>Success!</b>");
		});
		
		// callback handler that will be called on failure
		request.fail(function (jqXHR, textStatus, errorThrown){
			// log the error to the console
			//console.error(
			alert(
				"The following error occured: "+
				textStatus, errorThrown
			),
			$('#output').html("<b>Failed!</b>");			
		});

		// callback handler that will be called regardless
		// if the request failed or succeeded
		request.always(function () {
			// reenable the inputs
			$inputs.prop("disabled", false);
		});

		// prevent default posting of form
		event.preventDefault();	
		
	});

});

</script>


<table width="600">
	<form id="foo">
		<tr>
			<td><label for="bar">A bar</label></td>
			<td><input id="bar" name="bar" type="text" value="" /></td>
			<td><input type="submit" value="Send" /></td>
		</tr>
	</form>
</table>

<div id="output">this element will be accessed by jquery and this text replaced</div>

<br>

<?php
	
	include("layout/footer.php");
?>	