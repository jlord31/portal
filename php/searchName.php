<?php
	require 'connect.inc.php';

	$output = NULL;

//	if (isset($_GET['submit'])) {

		$name= $_POST['name'];

		if (!empty($name)) {
			//echo "string";
			$sql = "SELECT * FROM `applicantinformation` where name = '$name' ";
			$result  = mysql_query($sql);
			$sresult = "";
			$sresult .= '<table border=1px>';
			$sresult .= '<th>name</th><th>phone_no</th><th>cv</th><th>skillset</th><th>overall_proficiency</th><th>developmentYears</th>';
			if (mysql_num_rows($result) > 0) {
				while ($data = mysql_fetch_assoc($result)) {
					$sresult .= '<tr>';
					$sresult .= '<td>'.$data['name'].'</td><td>'.$data['phone_no'].'</td><td>'.$data['cv'].'</td><td>'.$data['skillset'].'</td><td>'.$data['overall_proficiency'].'</td><td>'.$data['developmentYears'].'</td>';
					$sresult .= '</tr>';
				}
			}
			$sresult .= '</table>';
			echo $sresult;
			/**/
		} else {
			echo "Field cannot be left blank";
		}
		
//	}
?>