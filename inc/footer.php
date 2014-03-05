		
		</div>
		<div id="spacer">&nbsp;</div>
		<div id="spacer">&nbsp;</div>
		</div>

		
		
		<div id="clearfooter">
		</div>
	
		<div id="footer" align="center">
			<p class="footer">Copyright (c) Automate - 2014</p>
			
			
			<?php
				//Display the username of the currently logged in user
				#session_start();
				
				if (isset($_SESSION['username']))	{
					echo "<p class=\"loginDetails\">Currently logged in as: ".$_SESSION['username'];
				}
				else	{
					echo "<p class=\"loginDetails\">Not currently logged in.";
				}
			?>
			
		</div>     
	
	</body>
</html>