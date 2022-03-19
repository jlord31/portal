<?php

require 'connect.inc.php';

	$output = NULL;

	if (isset($_POST['submit'])) {

		$skill= $_POST['skill'];

		if (!empty($skill)) {
			//echo "string";
			$sql = "SELECT * FROM `skills_table` where Skill_level ='$skill' ";
			$result  = mysql_query($sql);

			echo '<table border=1px>';
			echo '<th>phone_no</th><th>Skills</th><th>Skill_level</th><th>years of professional experience</th>';
			if (mysql_num_rows($result) > 0) {
				while ($data = mysql_fetch_assoc($result)) {
					echo '<tr>';
					echo '<td>'.$data['phone_no'].'</td><td>'.$data['Skills'].'</td><td>'.$data['Skill_level'].'</td><td>'.$data['pro_experience'].'</td>';
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