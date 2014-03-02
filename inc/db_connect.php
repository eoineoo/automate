<?php

/**
 * Database connection class
 */
class db_connect	{

	//Constructor
	function __construct()	{
		$this->connect();
	}

	//Destructor
	function __destruct()	{
		$this->close();
	}

	//Connection function
	function connect()	{

		//Use the connection details from dbconfig.php
		require_once __DIR__ . '/db_config.php'; //__DIR__ gets the current path of the script

		$con = mysql_connect(server, user, password) or die(mysql_error());

		$db = mysql_select_db(database) or die (mysql_error());

		return $con;		
	}

	//Close connection
	function close()	{
		mysql_close();
	}	
} 	

?>