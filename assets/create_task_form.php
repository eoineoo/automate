<?php

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
<link rel="stylesheet" href="http://localhost/automate/resources/jquery-ui.css">
<link rel="stylesheet" href="http://localhost/automate/resources/jquery-ui-timepicker-addon.css">
<script src="http://localhost/automate/resources/jquery-ui.js"></script>
<script src="http://localhost/automate/resources/jquery-ui-timepicker-addon.js"></script>
<script>
	//http://blog.theonlytutorials.com/insert-show-records-jquery-ajax-php/
    $(function(){
        $('#insert').click(function(){
            var jSchedule = $('#schedule').val();
			var jDayToRun = $('#dayToRun').val();
			var jTimeToRun = $('#timeToRun').val();
			var jStartDate = $('#startDate').val();
			var jEndDate = $('#endDate').val();
			
            $.post('/automate/assets/create_task.php',{action: "insert", schedule:jSchedule, dayToRun:jDayToRun, timeToRun:jTimeToRun, startDate:jStartDate, endDate:jEndDate},function(res){
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
	
	//Disable the submit button after being clicked once
	/* function disableFunction() {
		document.getElementById("insert").disabled = 'true';
	} */
</script>
</head>
<body>
	
	<div style="width: 60%;">
		<h2 class="scheduledTaskForm">Create Scheduled Task</h2>
		<div class="alert-box warning"><span>warning: </span>This form creates a Scheduled Task that executes a PHP script that emails ALL USERS who have a laptop in the selected lease and have not yet logged a call to upgrade their laptop.</div>
		<p style="color:red; font-weight:bold;">All fields are required. Use with caution.</p>
	</div>
	
	<div id="scheduledTaskForm">
	
		<table id="hor-minimalist-a" style="border: 1px solid black;">
		
			<tr>
				<td>Schedule:</td>
				<td>	
					<select name = "schedule" id = "schedule">
						<option selected="selected" value = "weekly">Weekly</option>
						<option value = "monthly">Monthly</option>
						<option value = "once">Once</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Day To Run:</td>
				<td>
					<select name = "dayToRun" id = "dayToRun">
						<option value = "MON">Monday</option>
						<option value = "TUE">Tuesday</option>
						<option value = "WED">Wednesday</option>
						<option value = "THU">Thursday</option>
						<option value = "FRI">Friday</option>						
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