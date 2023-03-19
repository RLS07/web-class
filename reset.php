<?php
session_start();
    //checking the form is submitted or not
    $email_link=$_GET['email'];  
  
    if(isset($_POST["submit"])){
        $new_pass=$_POST['input1'];
        $forgot_email=$_POST['input1'];  
        $sql = "UPDATE users SET password=md5('$new_pass') WHERE email='$email_link'";
        include("connection.php");
        $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header("Location:login.php");
                
            }    
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Equal Input Form</title>
	<script>
		function checkInputs() {
			// Get the input values
			var input1 = document.getElementById("input1").value;
			var input2 = document.getElementById("input2").value;

			// Check if the inputs are equal
			if (input1 != input2) {
				alert("Inputs are not equal!");
				return false;
			}

			// Inputs are equal, submit the form
			return true;
		}
	</script>
</head>
<body>
	<form onsubmit="return checkInputs()"  method="post">
		<label for="input1">NEW PASSWORD </label>
		<input type="text" id="input1" name="input1" required>
		<br>
		<label for="input2">CONFIRM PASSWORD</label>
		<input type="text" id="input2" name="input2" required>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>