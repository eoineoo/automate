<?php

/**
 * Database connection class
 */
require_once("inc/functions.php");
 
class db_connect_swdata	{

	#Constructor
	function __construct()	{
		$this->connect();
	}

	#Destructor
	function __destruct()	{
		$this->close();
	}

	#Connection function
	function connect()	{

		#Use the connection details from dbconfig.php
		require_once __DIR__ . '/db_config_swdata.php'; #__DIR__ gets the current path of the script

		$con = mysql_connect(server, user, password) or die_and_display(mysql_error());

		$db = mysql_select_db(database) or die_and_display (mysql_error());

		return $con;		
	}

	#Close connection
	function close()	{
		mysql_close();
	}	
} 	

?>