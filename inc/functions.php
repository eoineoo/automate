<?php

	#Custom die() function to ensure that the page display is not broken when die() is called
	function die_and_display($message) {
		print $message;
		include("layout/footer.php");
		die();
	}
	
?>