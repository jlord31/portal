<?php
$conn_error = 'Connection failed!';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password ='';
$mysql_db='project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password) || !@mysql_select_db($mysql_db))
    {
        die($conn_error);
    }
?>
