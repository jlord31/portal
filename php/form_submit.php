<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


 if(isset($_POST['submit']))
    {
    	//$name = isset($_POST['name']) ? $_POST['name'] : '';
		//$skillset = isset($_POST['skillset']) ? $_POST['skillset'] : '';
		//$year = isset($_POST['year']) ? $_POST['year'] : '';

    	$name= $_POST['name'];
        $skillset=$_POST['skillset'];
        $file=$_FILES['file']['name'];
        $sellist=$_POST['sellist'];
        $developmentYears = $_POST['rb'];
        $phone_no = $_POST['phone'];
        $skills = $_POST["skills"];
        $slevel = $_POST["slevel"];
        $yearsPro = $_POST["yearsPro"];
		
		$tmp_name = $_FILES['file']['tmp_name'];

		$submitbutton = $_POST['submit'];

		$position = strpos($name, "."); 

		$fileextension = substr($name, $position + 1);

		$fileextension = strtolower($fileextension);

		$path ='uploads/';

		$itemCount = count($_POST["skills"]);
		$itemValues=0;
		

       if(!empty($name) && !empty($skillset) ){
        	if (move_uploaded_file($tmp_name, $path.$file)) {
        		$sql = "INSERT INTO `applicantinformation`(`name`,`phone_no`, `cv`, `skillset`,`overall_proficiency`, `developmentYears`, `skills`, `skillLevel`, `experience`) VALUES ('$name','$phone_no','$file','$skillset','$sellist','$developmentYears','','','')";
	        	$result = mysql_query($sql);

	        	if (!$result) {
	        		echo "Error occurred while inserting data into applicantinformation: " . $sql . "<br>" ;
	        	}
	        	else{
	        			echo "You have sucessfully Registered for the recruitment ";
	        		}
			}
			else {
    		echo 'Please upload a valid file';
        }
       }
        else {
    		echo 'Please fill out all fields';
        }
}



		/*$sql2 = $query.$queryValue;
		
		    $result = mysqli_query($conn, $sql2);
			if(!empty($result)) $message = "Added Successfully.";
		}*/
	
mysqli_close($conn);

?>