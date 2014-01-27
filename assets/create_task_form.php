<?php

	/**
	 * HTML form that posts information to create_task.php which creates a Scheduled Task on the server to email outstanding users
	 * This page uses JQuery to post information and get the result back without the page having to reload
	 */

	$pagetitle = "Create Scheduled Task";
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");  
	
	#Determine what invoice file was selected
	if(isset($_GET['invoice']))	{
			$invoice = $_GET['invoice'];		
	}
	else	{
			$invoice = "";
	}
	
?>
<link rel="stylesheet" href="http://localhost/automate/resources/css/jquery-ui.css">
<link rel="stylesheet" href="http://localhost/automate/resources/css/jquery-ui-timepicker-addon.css">
<script src="http://localhost/automate/resources/js/jquery-ui.js"></script>
<script src="http://localhost/automate/resources/js/jquery-ui-timepicker-addon.js"></script>
<script>
	//http://blog.theonlytutorials.com/insert-show-records-jquery-ajax-php/
    $(function(){
        $('#insert').click(function(){
            
			var jInvoice = $('#invoice').val();
			var jJobdesc = $('#jobdesc').val();
			var jSchedule = $('#schedule').val();
			var jTimeToRun = $('#timeToRun').val();
			var jStartDate = $('#startDate').val();
			var jEndDate = $('#endDate').val();
			
			$.post('/automate/assets/create_task.php',{action: "insert", invoice:jInvoice, jobdesc:jJobdesc, schedule:jSchedule, timeToRun:jTimeToRun, startDate:jStartDate, endDate:jEndDate},function(res){
                $('#result').html(res);				
            }); 			
			
        });
    });

	$(function() {
		//http://trentrichardson.com/examples/timepicker/#slider_examples
		$('#timeToRun').timepicker();
		$('#startDate').datepicker({ dateFormat: "dd/mm/yy", minDate: 0 });
		$('#endDate').datepicker({ dateFormat: "dd/mm/yy", minDate: 1 });
	});
	
	//Disable all inputs after selecting the insert button
	function disableFunction() {
		document.getElementById("schedule").disabled = 'true';
		document.getElementById("jobdesc").disabled = 'true';
		document.getElementById("timeToRun").disabled = 'true';
		document.getElementById("startDate").disabled = 'true';
		document.getElementById("endDate").disabled = 'true';
		document.getElementById("insert").disabled = 'true';
	}
</script>
</head>
<body>
	
	<div style="width: 60%;">
		<h2 class="scheduledTaskForm">Create Scheduled Task</h2>
		<div class="alert-box warning"><span>warning: </span>This form creates a Scheduled Task that executes a PHP script that emails specified users (of a certain jobdesc) who have a laptop in the selected lease and have not yet logged a call to be upjobdescd.<br />All fields are required. Use with caution! Reload the page if your task is not created.</div>
	</div>
	
	<div id="scheduledTaskForm">
	
		<table id="hor-minimalist-a" style="border: 1px solid black; width: 58%">
		
			<tr>
				<td>Invoice:</td>
				<td>	
					<input type="text" id="invoice" name="invoice" disabled="disabled" value="<?php echo $invoice ?>"></td>
				</td>
			</tr>
			
			<tr>
				<td>jobdesc:</td>
				<td>	
					<select name="jobdesc" id="jobdesc" style="width:150;">
						<option value = "associate">Associate</option>
						<option value = "ceo">CEO</option>
						<option value = "cio">CIO</option>
						<option value = "Intern">Intern</option>
						<option value = "manager">Manager</option>
						<option value = "manager">Manager</option>
						<option value = "partner">Partner</option>
						
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Schedule:</td>
				<td>	
					<select name="schedule" id="schedule" style="width:150;">
						<option selected="selected" value = "weekly">Weekly</option>
						<option value = "monthly">Monthly</option>						
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Time To Run: </td>
				<td><input type="text" id="timeToRun" name="timeToRun" readonly="readonly"></td>
			</tr>
		
			<tr>
				<td>Start Date: </td>
				<td><input type="text" id="startDate" name="startDate" readonly="readonly"></td>
			</tr>
			
			<tr>
				<td>End Date: </td>
				<td><input type="text" id="endDate" name="endDate" readonly="readonly" required></td>
			</tr>
			
			<tr>
				<td colspan="2"><button id="insert" onclick="setTimeout(disableFunction, 1);">Create Task</button></td>
			</tr>
		
		</table>
	
	</div>

	<!-- Div to display the result of our operation --> 
	<div id="result" style="width: 60%;"></div>

</body>

</html>

<?php	
	require_once("/../inc/footer.php");
?>