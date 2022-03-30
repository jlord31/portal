<?php
/*
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

// Create connection
$conn = mysqli_connect("localhost", "root", "", "project");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "This Connection works perfectly! ";
*/

// DB Connection 
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
