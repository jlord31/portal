<?php
	require 'connect.inc.php';

	if (isset($_POST['submit'])) {

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
			if (move_uploaded_file($tmp_name, $path.$file)){

				$sql = "INSERT INTO `applicantinformation`(`name`,`phone_no`, `cv`, `skillset`,`overall_proficiency`, `developmentYears`) VALUES ('$name','$phone_no','$file','$skillset','$sellist','$developmentYears')";
	        	$result = mysql_query($sql);

	        	if (!$result) {
	        		echo "Error occurred while inserting data into applicantinformation: " . $sql . "<br>" ;
	        	}
	        	

	        		$sql2 = "INSERT INTO `skills_table`(`phone_no`, `Skills`, `Skill_level`, `pro_experience`) VALUES ";
	        		for ($i=0; $i < $itemCount; $i++) { 
	        			$sql2  .= "('$phone_no','" . $_POST["skills"][$i] . "', '" . $_POST["slevel"][$i]. "','" . $_POST["yearsPro"][$i] . "'),";
	        		}
	        		$sql2  = rtrim($sql2, ",");

	        		$res = mysql_query($sql2);

	        		if (!$res) {
	        			echo "Erroroccurred while inserting data into skills_table: " . $sql2 . "<br>";
	        		} else {

	        			echo "<script>alert ('You have sucessfully Registered for the recruitment')</script>";
	        			
	        		}

			}else{
			echo "Please upload a valid file";
			}

		}
		else{
			echo "Please try to fill in all fields";
		}

	}


?>

<a href="../index.html">Go back to main site</a>