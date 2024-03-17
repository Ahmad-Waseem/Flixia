<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Flixia</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<header>
	<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				<li><a href="watched.php">Watched</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="signup.php" class="active">Sign Up</a></li>
				<a href="login.php">Login</a>
            </ul>
		</nav>
	</header>
	<main>
		<h2>Sign Up</h2>
		<form method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
                <br>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
                <br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
                <br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
            <br>
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="confirm_password" required>
            <br>
			<!-- <button><input type="submit" name="submit" value="Sign Up"></button> -->
			<button name="submit" type="submit" class="btn">Sign Up</button>
		</form>
		<p>Already have an account? <a href="login.php">Login</a></p>
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
	</footer>
</body>
</html>

<?php
include("connect.php");

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];

	$number = preg_match('@[0-9]@', $password);
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);
 
	if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
	 echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
	} 
	else {
	$query = "insert into `people` (name, username, email, password, role) values ('$name', '$username', '$email', '$password', 'user')";

	$result = mysqli_query($con, $query);
  
		if ($result) {
			echo "<script> alert('Successfully entered account'); setTimeout(function(){ window.location.href = 'login.php'; }, 100); </script>";
		}
		else{
			echo "<script> alert('no sorry') </script>";
  		}
	}
}
?>
  