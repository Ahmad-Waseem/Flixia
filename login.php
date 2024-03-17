<?php
session_start();

include("connect.php");

if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM people WHERE username = '$username' AND password='$password'";
	$admin = "SELECT * FROM people WHERE name = '$username' AND password='$password' AND role='admin'";
	$result1 = mysqli_query($con, $query);
	$result2 = mysqli_query($con, $admin);
  
	if (mysqli_num_rows($result1) > 0) {
		$_SESSION['loggedin'] = true;
    	$_SESSION['username'] = $username;
		if(mysqli_num_rows($result2) > 0){
			echo "<script> alert('Successfully entered account'); setTimeout(function(){ window.location.href = 'Admin/admin.php'; }, 100); </script>";
		}
		else{
			echo "<script> alert('Successfully entered account'); setTimeout(function(){ window.location.href = 'home.php'; }, 100); </script>";
		}
	}
  
	else {
  
	  echo "<script> alert('Incorrect username or password');  </script>";
  
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
	<div class="login-box">
		<h1>Login</h1>

		<form method="post" id="form">
			<label for="name">Username</label>
			<input type="text" id="name" name="name" placeholder="Enter your name" required>

			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter your password" required>

			<button type="submit" class="btn" name="submit">Login</button>
		</form>

		<p>Don't have an account? <a href="signup.php">Sign up</a></p>
	</div>
</body>
</html>

