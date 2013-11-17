<?php

	$directory = 'csv';
	
	//Display files in /csv directory
	echo "Available Files: ";
	//Remove "." and ".."
	$files = array_diff(scandir($directory), array('..', '.')); 
	foreach ($files as &$value)	{
		echo  "<a href=display.php?csv=$value>$value</a> | ";
	}

?>

<hr>

<?php

	//Determine what CSV file was selected
	if(isset($_GET['csv']))	{
			$csv = $_GET['csv'];		
		}
		else	{
			$csv = "test.csv";
		}
		
	//Read selected CSV file, open it and print out each line	
	if (($handle = fopen("csv/".$csv, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$row = 1;
			$num = count($data);
			echo "<p> $num fields in line $row: <br /></p>\n";
			$row++;
			for ($c=0; $c < $num; $c++) {
				echo $data[$c] . ", \n";
			}
		}
		fclose($handle);
	}
?>