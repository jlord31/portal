var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
const validate = () => {

	let username = document.getElementById("username").value;
	let password = document.getElementById("password").value;

	if ( username == "admin" && password == "pass"){
		alert ("Login successfully");
		window.location = "adminPage.html"; // Redirecting to other page.
		return false;
	}
	else{
		attempt --;// Decrementing by one.
		alert("You have left "+attempt+" attempt;");
	// Disabling fields after 3 attempts.
		if( attempt == 0){
			document.getElementById("username").disabled = true;
			document.getElementById("password").disabled = true;
			document.getElementById("Login").disabled = true;
			return false;
		}
	}
}