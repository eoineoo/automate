<?php
	
   /**
	* User_accounts_modify_form.php
	*
	* Administrators only
	* Form to update user details.
	* Data submitted to user_accounts_source.php, success/failure message returned using JQuery.
	*/
	
	$pagetitle = "Admin - Modify User Account";
	
	require_once("/../inc/config.php");  
	require_once("/../inc/header.php");  
	require_once("/../inc/functions.php");
	
	checkAdminLogin();
	
	#Determine what serial is selected
	if(isset($_GET['id']))	{
			$id = $_GET['id'];		
	}
	else	{
			$id = "";
	}
	
	#Query
	$select		=  	"SELECT username, fullname, password, isadmin ";
	$from		= 	"FROM users ";
	$where		= 	"WHERE staff_id = $id ";
	$order		= 	"ORDER BY staff_id";
	$sql		= 	$select . $from . $where . $order ;
	
	#Connect
	$connection = mysqli_connect("localhost", "root", "", "automate");
	
	#Check connection
	if (mysqli_connect_errno())	{
		die_and_display('<div id="alert"><a class="alert">Connection failed: ' . htmlspecialchars(mysqli_connect_error()) . "</a></div>");			
	}
	
	$result = mysqli_query($connection, $sql);
	
	while($row = mysqli_fetch_array($result))	{
	
		$username = $row['username'];
		$fullname = $row['fullname'];
		$password = $row['password'];
		$isadmin  = $row['isadmin'];
		
	}
	
	?>
<script>
	/* 	JQuery to update user details without reloading page
		Data submitted to user_accounts_source.php
		Reference: http://blog.theonlytutorials.com/insert-show-records-jquery-ajax-php/ */
    $(function(){
        $('#modify').click(function(){
            
			var jId = $('#id').val();
			var jUsername = $('#username').val();
			var jFullName = $('#fullname').val();
			var jPassword = $('#password').val();
			var jIsAdmin = $('#isadmin').val();
			
			$.post('/automate/admin/user_accounts_source.php',{action: "modify", id:jId, username:jUsername, fullname:jFullName, password:jPassword, isadmin:jIsAdmin},function(res){
                $('#result').html(res);				
            });
		
			var delay = 4000;
			setTimeout(function(){ window.location = 'http://localhost/automate/admin/users';}, delay); 			
			
        });    
    });
	
	/* Disable all inputs after selecting the insert button */
	function disableFunction() {
		document.getElementById("username").disabled = 'true';
		document.getElementById("fullname").disabled = 'true';
		document.getElementById("password").disabled = 'true';
		document.getElementById("isadmin").disabled = 'true';
		document.getElementById("modify").disabled = 'true';
	}
</script>
<div id="scheduledTaskForm">
	<fieldset class="preconfig" style="display: inline-block;">
		<legend>Update User</legend>
		<table width="400" border="0" id="hor-minimalist-a">
			
			<tr>
				<td>ID:</td>
				<td>	
					<input style="padding:4px;" type="text" id="id" name="id" value="<?php echo $id; ?>" disabled="disabled" >
				</td>
			</tr>
			
			<tr>
				<td>Username:</td>
				<td>	
					<input style="padding:4px;" type="text" id="username" name="username" value="<?php echo $username; ?>">
				</td>
			</tr>
			
			<tr>
				<td>Full Name:</td>
				<td>	
					<input style="padding:4px;" type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>">
				</td>
			</tr>
				
			<tr>
				<td>Password:</td>
				<td>	
					<input style="padding:4px;" type="password" id="password" name="password" value="">
				</td>
			</tr>
				
			<tr>
				<td>Is Admin:</td>
				<td>
					<select name="isadmin" id="isadmin" style="width:160;padding:4px;">
						<?php
							if($isadmin == "Yes")	{
								echo "<option value=\"No\">No</option>";
								echo "<option value=\"Yes\" selected=\"selected\">Yes</option>";
							}
							
							else if ($isadmin == "No")	{
								echo "<option value=\"No\" selected=\"selected\">No</option>";
								echo "<option value=\"Yes\">Yes</option>";
							}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td colspan="2"><button id="modify" onclick="setTimeout(disableFunction, 1);">Update Account</button></td>
			</tr>

		</table>

	</fieldset>
	
</div>

<!-- Div to display the result of our operation --> 
<div id="result" style="width: 60%;"></div>
	
</body>

</html>

<?php	
	require_once("/../inc/footer.php");
?>