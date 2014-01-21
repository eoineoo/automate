<?php

	$pagetitle = "JQuery Test";
	require_once("/inc/config.php");  
	require_once("/inc/header.php");  
	require_once("/inc/functions.php");	
	
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://localhost/automate/resources/jquery-ui.js"></script>
<script src="http://localhost/automate/resources/jquery-ui-timepicker-addon.js"></script>
<script>
	//http://blog.theonlytutorials.com/insert-show-records-jquery-ajax-php/
    $(function(){
        //insert record
        $('#insert').click(function(){
            var jSchedule = $('#schedule').val();
			var jDayToRun = $('#dayToRun').val();
			var jTimeToRun = $('#timeToRun').val();
			var jStartDate = $('#startDate').val();
			var jEndDate = $('#endDate').val();
			
            //syntax - $.post('filename', {data}, function(response){});
            $.post('jquery_data.php',{action: "insert", schedule:jSchedule, dayToRun:jDayToRun, timeToRun:jTimeToRun, startDate:jStartDate, endDate:jEndDate},function(res){
                $('#result').html(res);
            });        
        });
    });
</script>
<script>
	$(function() {
		//http://trentrichardson.com/examples/timepicker/#slider_examples
		$('#timeToRun').timepicker();
		$('#startDate').datepicker();
		$('#endDate').datepicker();
	});
</script>
</head>
<body>
	
	<div id="scheduledTaskForm">
	
		<h2 class="scheduledTaskForm">Create Scheduled Task</h2>
		
		<table id="hor-minimalist-a" border=1>
		
			<tr>
				<td>Schedule:
					<select name = "schedule" id = "schedule">
						<option value = "daily">Daily</option>
						<option selected="selected" value = "weekly">Weekly</option>
						<option value = "monthly">Monthly</option>
						<option value = "once">Once</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Day To Run:
					<select name = "dayToRun" id = "dayToRun">
						<option value = "MON">Monday</option>
						<option value = "TUE">Tuesday</option>
						<option value = "WED">Wednesday</option>
						<option value = "THU">Thursday</option>
						<option value = "FRI">Friday</option>
						<option value = "*">Everyday</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Time To Run At: <input type="text" id="timeToRun" name="timeToRun"></td>
			</tr>
		
			<tr>
				<td>Start Date: <input type="text" id="startDate" name="startDate"></td>
			</tr>
			
			<tr>
				<td>End Date: <input type="text" id="endDate" name="endDate"></td>
			</tr>
			
			<tr>
				 <td><button id="insert">Create Task</button></td>
			</tr>
	
		</table>
	
	</div>
 
<!--<p>Show Last 10 Records</p>
<button id="show">Show</button>-->
<p>Result:</p>
<div id="result"></div>
</body>
</html>

<?php	
	require_once("/inc/footer.php");
?>