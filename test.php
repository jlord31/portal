<?php
       // DB connect file
	require 'php/connect.inc.php';

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
        <form action="php/searchName.php" id="form1" method="post" target="_blank">
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
            <div id="responsecontainer1" align="center">
                <?php echo $sresult; ?>
            </div>

            </div>
        </form>
    </div>


    <div id="p1">
        <small>Search submitted applicant form by phone_number</small>
        <form action="php/phoneSearch.php" id="form2" method="post" target="_blank">
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
                        <button type="submit" name="submit" id="display2" class="btn btn-info form-control" >Search</button>
                    </div>
                </div>
            </div>
            <div id="responsecontainer2" align="center">
                
            </div>
            </div>
        </form>
    </div>


    <div id="p2">
        <small>Search submitted applicant form by skills level</small>
        <form action="php/skillSearch.php" id="form3" method="post" target="_blank">
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
                        <button type="submit" name="submit" id="display1" class="btn btn-info form-control" >Search</button>
                    </div>
                </div>
            </div>
            <div id="responsecontainer3" align="center">
                
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
