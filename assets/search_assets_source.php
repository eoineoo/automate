<?php

	/**
	* Search for assets by: asset tag, serial, or user
	* http://www.daveismyname.com/tutorials/php-tutorials/autocomplete-with-php-mysql-and-jquery-ui/
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");

	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	#Not sure where the term "term" is set, need different names for each
	if (isset($_GET['term'])){
		$return_arr = array();
	}
	/* if (isset($_GET['term'])){
		$return_arr = array();
	}
	if (isset($_GET['term'])){
		$return_arr = array();
	} */
	
	/* $select		=  	"SELECT DISTINCT(serial_num) AS 'Serial', last_logon AS 'Last Logon', username AS 'Last User', a.owner AS 'Assigned To', status_level AS 'Status', model as 'Model' ";
	$from		= 	"FROM swdata.assets a ";
	$join		= 	"LEFT OUTER JOIN asset_details a_d ON a_d.id = a.id ";
	$where		= 	"WHERE serial_num LIKE '%".$_GET['term']."%' ";
	$group		= 	"GROUP BY serial_num";
	$sql		= 	$select . $from . $join . $where . $group; */
	
	$sql_tag	= "SELECT asset_tag FROM assets WHERE asset_tag LIKE '%".$_GET['term']."&' ";
	$sql_owner	= "SELECT owner FROM assets WHERE owner LIKE '%".$_GET['term']."&' ";
	$sql_serial	= "SELECT serial_num FROM assets WHERE serial_num LIKE '%".$_GET['term']."&' ";
	
	$result = mysqli_query($connection, $sql_tag);
	
	while($row = mysqli_fetch_array($result))	{
		$return_arr[] =  $row['asset_tag'];
	}
	
	echo json_encode($return_arr);

?>



























