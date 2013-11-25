<?php

#http://social.msdn.microsoft.com/Forums/sqlserver/en-US/b7e9dbaf-9a7c-4bbb-8c66-c65f725ec915/import-csv-to-sql-server-native-with-php?forum=sqldriverforphp

    /**
    * Format the errors and die
    */
    function get_last_error() {
        $retErrors = sqlsrv_errors(SQLSRV_ERR_ALL);
        $errorMessage = 'No errors found';

        if ($retErrors != null) {
            $errorMessage = '';

            foreach ($retErrors as $arrError) {
                $errorMessage .= "SQLState: ".$arrError['SQLSTATE']."<br>\n";
                $errorMessage .= "Error Code: ".$arrError['code']."<br>\n";
                $errorMessage .= "Message: ".$arrError['message']."<br>\n";
            }
        }

        die ($errorMessage);
    }

    /**
    * connect
    */
    function connect() {
        if (!function_exists('sqlsrv_num_rows')) { // Insure sqlsrv_1.1 is loaded.
            die ('sqlsrv_1.1 is not available');
        }

        /*
        * Log all Errors.
        */
        sqlsrv_configure("WarningsReturnAsErrors", TRUE);        // BE SURE TO NOT ERROR ON A WARNING
        sqlsrv_configure("LogSubsystems", SQLSRV_LOG_SYSTEM_ALL);
        sqlsrv_configure("LogSeverity", SQLSRV_LOG_SEVERITY_ALL);

        $conn = sqlsrv_connect('127.0.0.1', array
        (
        'UID' => 'root',
        'PWD' => 'passw0rd',
        'Database' => 'Adventureworks',
        'CharacterSet' => 'UTF-8',
        'MultipleActiveResultSets' => true,
        'ConnectionPooling' => true,
        'ReturnDatesAsStrings' => true,
        ));

        if ($conn === FALSE) {
            get_last_error();
        }

        return $conn;
    }

    /**
    * Simple query
    *
    * @param mixed $conn
    * @param mixed $query
    */
    function query($conn, $query) {
        $result = sqlsrv_query($conn, $query);
        if ($result === FALSE) {
            get_last_error();
        }
        return $result;
    }

    /**
    * Prepare a reusable query (prepare/execute)
    *
    * @param mixed $conn
    * @param mixed $query
    * @param mixed $params
    */
    function prepare ( $conn, $query, $params ) {
        $result = sqlsrv_prepare($conn, $query, $params);
        if ($result === FALSE) {
            get_last_error();
        }
        return $result;
    }

    /**
    * do the deed. once prepared, execute can be called multiple times
    * getting different values from the variable references.
    *
    * @param mixed $stmt
    */
    function execute ( $stmt ) {
        $result = sqlsrv_execute($stmt);
        if ($result === FALSE) {
            get_last_error();
        }
        return $result;
    }

    function fetch_array($query) {
        $result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        if ($result === FALSE) {
            get_last_error();
        }
        return $result;
    }

    $conn = connect();

   /* build a table to use for our example
   */
    $query = "IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'data') AND type in (N'U'))
    DROP TABLE data";
    query($conn, $query);

    $query = "CREATE TABLE data (
    COL1 VARCHAR(20) NULL,
    COL2 VARCHAR(20) NULL)";
    query($conn, $query);

    /**
    * prepare the statement.
    */
    $query = "INSERT data values ( ? , ? )";
    $param1 = null; // this will hold col1 from the CSV
    $param2 = null; // this will hold col2 from the CSV
    $params = array( &$param1, &$param2 );
    $prep = prepare ( $conn, $query, $params );
    $result = execute ( $prep );


    /**
    * csv_file is a file containing rows of two values seperated by a comma
    *
    * row1_col1, row1_col2
    * row1_col1, row1_col2
    *
    */

    $file_name = 'C:\temp\csv_file.csv';

    // Build a CVS file
    $fp = fopen($file_name, 'w');
    fwrite($fp, "row1_col1,row1_col2\n");
    fwrite($fp, "row2_col1,row2_col2\n");
    fclose($fp);

    /**
    * Here is where you read in and parse your CVS file into an array.
    * That may get too large, so you would have to read smaller chunks of rows.
    *
    */
    $csv_array = file($file_name);
    foreach ($csv_array as $row_num => $row) {
        $row = trim ($row);
        $column = explode ( ',' , $row );
        $param1 = $column[0];
        $param2 = $column[1];

        // insert the row
        $result = execute ( $prep );
    }

    echo 'done';

?>