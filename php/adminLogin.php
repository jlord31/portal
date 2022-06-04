<?php
       
if(isset($_POST['username']) && isset($_POST['password']))
{
     // variables declarations
     $username = $_POST['username'];
     $password = $_POST['password'];
    if (!empty($username) && !empty($password))
    {
        if ($username == "admin" && $password == "pass" ) {
        	header("Location: http://adminPage.html");
        } else {
        	echo "Invalid Admin Details!!";
        }
        
    }
    else
        {
          echo 'Please fill in your username and password';
    }
}
       
?>
