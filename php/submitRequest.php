<?php
    require 'connect.inc.php';

    if(isset($_POST['name']) && isset($_POST['skillset']))
    {
    	$name = $_POST['name'];
    	$skillset =$_POST['email'];



        if(!empty($name) && !empty($email)){
        	$query = " INSERT INTO `project` (
                `name`,`skillset`) VALUES ('$name',
                '$email')";

        	if ($query_run = mysql_query($query)){
                echo "You have sucessfully Registered for the recruitment ";
            }
        }
        else {
    		echo 'Please fill out all fields';
        }
    }
?>