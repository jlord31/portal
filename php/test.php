<?php
	require 'connect.inc.php';

		$sresult = NULL;


	//$output = NULL;

	if (isset($_POST['submit'])) {

		$name= $_POST['name'];

		if (!empty($name)) {
			//echo "string";
			$sql = "SELECT * FROM `applicantinformation` where name = '$name' ";
			$result  = mysql_query($sql);
			$sresult .= '<table class="table table-bordered table-striped" >';
			$sresult .= '<th>name</th><th>phone_no</th><th>cv</th><th>skillset</th><th>overall_proficiency</th><th>developmentYears</th>';
			if (mysql_num_rows($result) > 0) {
				while ($data = mysql_fetch_assoc($result)) {
					$file = $data['cv'];

					$sresult .= '<tr>';
					$sresult .= '<td>'.$data['name'].'</td><td>'.$data['phone_no'].'</td><td>'.'<a href="download.php?file_name='.$file.' " >'.$data['cv'].'</a>'.'</td><td>'.$data['skillset'].'</td><td>'.$data['overall_proficiency'].'</td><td>'.$data['developmentYears'].'</td>';
					$sresult .= '</tr>';
				}
			}
			$sresult .= '</table>';
			/*else{
			echo "No names matching your search found";
			}*/	
			//echo $sresult;
			/**/
		} else {
			echo "<script>alert ('Field cannot be left blank')</script>";
		}
		
	}
?>


<?php
	require 'connect.inc.php';

	$presult = NULL;

	//RETURN RESULT FOR SEARCH BY PHONE NUMBER

	if (isset($_POST['phone_submit'])) {

		$number= $_POST['number'];

		if (!empty($number)) {
			//echo "string";
			$sql = "SELECT * FROM `applicantinformation` where phone_no = '$number' ";
			$presult2  = mysql_query($sql);

			$presult .= '<table class="table table-bordered table-striped" >';
			$presult .= '<th>name</th><th>phone_no</th><th>cv</th><th>skillset</th><th>overall_proficiency</th><th>developmentYears</th>';
			if (mysql_num_rows($presult2) > 0) {

				while ($data = mysql_fetch_assoc($presult2)) {
					$file = $data['cv'];

					$presult .= '<tr>';
					$presult .= '<td>'.$data['name'].'</td><td>'.$data['phone_no'].'</td><td>'.  '<a href="download.php?file_name='.$file.' " >'.$data['cv'].'</a>'.'</td><td>'.$data['skillset'].'</td><td>'.$data['overall_proficiency'].'</td><td>'.$data['developmentYears'].'</td>';
					$presult .= '</tr>';
				}
			}
			$presult .= '</table>';
			/*else{
			echo "No names matching your search found";
			}*/	
			//echo $sresult;
			/**/
		} else {
			echo "<script>alert ('Field cannot be left blank')</script>";
		}
		
	}
?>



<?php
	require 'connect.inc.php';

	$skill_result = NULL;

	//RETURN RESULT FOR SEARCH BY skill level

	if (isset($_POST['skill_submit'])) {

		$skill= $_POST['skill'];

		if (!empty($skill)) {
			//echo "string";
			$sql = "SELECT * FROM `skills_table` where Skill_level ='$skill' ";
			$result  = mysql_query($sql);

			$skill_result .= '<table class="table table-bordered table-striped" >';
			$skill_result .= '<th>phone_no</th><th>Skills</th><th>Skill_level</th><th>years of professional experience</th>';
			if (mysql_num_rows($result) > 0) {

				while ($data = mysql_fetch_assoc($result)) {
					$skill_result .= '<tr>';
					$skill_result .= '<td>'.$data['phone_no'].'</td><td>'.$data['Skills'].'</td><td>'.$data['Skill_level'].'</td><td>'.$data['pro_experience'].'</td>';
					$skill_result .= '</tr>';
				}
			}
			$skill_result .= '</table>';
			/*else{
			echo "No names matching your search found";
			}*/	
			//echo $sresult;
			/**/
		} else {
			echo "<script>alert ('Field cannot be left blank')</script>";
		}
		
	}
?>








<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome-ie7.min.css">
    <script src="js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com"></script>
    <style type="text/css">
        .hpage {
                margin-top: 50px;
                text-align: center;
            }
    </style>
            
</head>
<body data-spy="scroll" data-offset="20">
<div class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="#ph">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li ><a href="#p0">Search candidate by name</a></li>
            <li><a href="#p1">Search by phone-number</a></li>
            <li><a href="#p2">Search by skill level</a></li>
        </ul>
    </nav>
	<h1 class="head hpage">Welcome to Admin page</h1>
    
    <div id="p0">
        <small>Search submitted applicant form by name</small>
        <form action="test.php" id="form1" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Enter Appicant Name: </label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="name"> </label>
                        <button type="submit" name="submit" id="display1" class="btn btn-info form-control">Search</button>
                    </div>
                </div>
            </div>
            <div id="responsecontainer1" class="table-responsive">
                <?php echo $sresult; ?>
            </div>

            </div>
        </form>
    </div>


    <div id="p1">
        <small>Search submitted applicant form by phone_number</small>
        <form action="test.php" id="form2" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Enter Appicant Phone number: </label>
                        <input type="text" class="form-control" name="number" id="name">
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="name"> </label>
                        <button type="submit" name="phone_submit" id="display2" class="btn btn-info form-control" >Search</button>
                    </div>
                </div>
            </div>
            <div id="responsecontainer2" class="table-responsive">
                <?php echo $presult; ?>
            </div>
            </div>
        </form>
    </div>


    <div id="p2">
        <small>Search submitted applicant form by skills level</small>
        <form action="test.php" id="form3" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Enter skill level: </label>
                        <input type="text" class="form-control" name="skill" id="name">
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                         <label for="name"> </label>
                        <button type="submit" name="skill_submit" id="display1" class="btn btn-info form-control" >Search</button>
                    </div>
                </div>
            </div>
            <div id="responsecontainer3" align="center">
                <?php echo $skill_result; ?>
            </div>

            </div>
        </form>
    </div>



</div>

    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </li>
            </ul>
            <!-- Social buttons -->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright  text-center py-3">© 2020 Copyright:
            <a href=""> JoeTech </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>
</html>