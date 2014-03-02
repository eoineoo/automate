<?php

	/**
	* Search for assets by username
	* http://www.daveismyname.com/tutorials/php-tutorials/autocomplete-with-php-mysql-and-jquery-ui/
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	checkLogin();
	
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	if (isset($_GET['term'])){
		$return_arr = array();
	}
	
	/* $select		=  	"SELECT DISTINCT(serial_num) AS 'Serial', last_logon AS 'Last Logon', username AS 'Last User', a.owner AS 'Assigned To', status_level AS 'Status', model as 'Model' ";
	$from		= 	"FROM swdata.assets a ";
	$join		= 	"LEFT OUTER JOIN asset_details a_d ON a_d.id = a.id ";
	$where		= 	"WHERE serial_num LIKE '%".$_GET['term']."%' ";
	$group		= 	"GROUP BY serial_num";
	$sql		= 	$select . $from . $join . $where . $group; */
	
	$sql_owner	= "SELECT owner FROM assets WHERE username LIKE '%".$_GET['term']."%' ";
	#echo $sql_owner;
	$result = mysqli_query($connection, $sql_owner);
	
	while($row = mysqli_fetch_array($result))	{
		$return_arr[] =  $row['owner'];
	}
	
	echo json_encode($return_arr);

?>



























