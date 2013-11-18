<?php

	/**
	* Sources:
	* 	1) http://stackoverflow.com/questions/13758299/how-to-pass-multiple-variable-from-php-to-python-script
	* 	2) http://docs.python.org/2/library/sys.html#sys.argv
	* 	3) http://php.net/manual/en/reserved.variables.argv.php
	* Uploads a file to /csv directory
	*/
	$pagetitle = "Executing import..";
	include("layout/header.php");
	
	#Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
	}
	else	{
			$csv = "test.csv";
	}

	#Execute MySQL import script: Importer.py
	$tmp = exec("import_importer.py $csv");
	
	echo $tmp;
	
	header("refresh:5; url=import_form.php");
	
	include("layout/footer.php");
	
?>