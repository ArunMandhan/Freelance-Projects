<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include('connection.php');  
	$email = $_POST['email'];  
	$password = $_POST['pass'];  
	
        //to prevent from mysqli injection  
	$email = stripcslashes($email);  
	$password = stripcslashes($password);  
	$email = mysqli_real_escape_string($con, $email);  
	$password = mysqli_real_escape_string($con, $password);  
	
	$sql = "select * from login where email = '$email' and password = '$password'";  
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);  
	
	if($count == 1){  
		
		$_SESSION['user'] = $email;
		header("location: index.php");
	}  
	else{
             //echo "<h1> Login failed. Invalid email or password.</h1>";
             //header("location: login.php");  
		$err="<font color='yellow'>Invalid login details</font>";
            // header("location: login.html");
            // </script>';  
	}       
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<header>
		<div class="main">

			<form class="login-box" method="post" name="f1" onsubmit = "return validation()" action = "" >
				<h1>Login</h1>
				<input type="email" placeholder="Email" name="email" id="email" class="box-1">
				<input type="password" placeholder="Password" name="pass" id="pass" class="box-1" >
				<input type="submit" value="Login" name="btn" class="box-2">

				<div><?php echo @$err;?></div>
				

			</form>
		</div>
	</header>

	<!-- form validation function is defined in the js file -->
	<script type="text/javascript" src="myscript.js">
		
	</script>


</body>
</html>
