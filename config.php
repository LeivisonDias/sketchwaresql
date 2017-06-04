<?php
    $url_host = 'url_host'; // Put here a URL to this script folder with the final "/". "http://yourhost.com/"
    $sql_link = false;
    $sql_host_name = 'localhost'; // Your host mysql
	$sql_user = 'username'; // Username mysql
	$sql_password = 'password'; // Password mysql
	$database_name = 'database_name'; // Mysql database name
	$table_name = 'table_name'; // Your mysql table name to this projec
	
    function connectsql()
    {
        global $sql_link;
		global $sql_host_name;
		global $sql_user;
		global $sql_password;
		global $database_name;
        if( $sql_link )
            return $sql_link;
        $sql_link = mysqli_connect($sql_host_name, $sql_user, $sql_password, $database_name) or die('Could not connect to server.' );
        return $sql_link;
    }
    
    function closesql()
    {
        global $sql_link;
        if( $sql_link != false )
            mysqli_close($sql_link);
        $sql_link = false;
    }
?>