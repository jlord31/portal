<?php
require 'connect.inc.php';

	$output = NULL;

	if (isset($_POST['submit'])) {

		$number= $_POST['number'];

		if (!empty($number)) {
			//echo "string";
			$sql = "SELECT * FROM `applicantinformation` where phone_no ='$number' ";
			$result  = mysql_query($sql);

			echo '<table border=1px>';
			echo '<th>name</th><th>phone_no</th><th>cv</th><th>skillset</th><th>overall_proficiency</th><th>developmentYears</th>';
			if (mysql_num_rows($result) > 0) {
				while ($data = mysql_fetch_assoc($result)) {
					echo '<tr>';
					echo '<td>'.$data['name'].'</td><td>'.$data['phone_no'].'</td><td>'.$data['cv'].'</td><td>'.$data['skillset'].'</td><td>'.$data['overall_proficiency'].'</td><td>'.$data['developmentYears'].'</td>';
					echo '</tr>';
				}
			}
			echo '</table>';
			/**/
		} else {
			echo "Field cannot be left blank";
		}
		
	}

?>