<?php

	/**
	* Search_autocomplete.php
	*
	* Used by search_assets.php
	* Search for assets by owner by querying swdata.assets
	* Referenced tutorial: http://www.daveismyname.com/tutorials/php-tutorials/autocomplete-with-php-mysql-and-jquery-ui/
	*/
	$pagetitle = "Search For Asset";
	require_once("/../inc/config.php");  
	require_once("/../inc/functions.php");
	checkLogin();
	
	$connection = mysqli_connect("localhost", "root", "", "swdata");
	
	if (isset($_GET['term'])){
		$return_arr = array();
	}
	
	$sql_owner	= "SELECT owner FROM assets WHERE username LIKE '%".$_GET['term']."%' ";
	$result = mysqli_query($connection, $sql_owner);
	
	while($row = mysqli_fetch_array($result))	{
		$return_arr[] =  $row['owner'];
	}
	
	echo json_encode($return_arr);

?>



























