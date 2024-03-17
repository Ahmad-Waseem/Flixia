<?php
include("login_check.php");
include("connect.php");

if(check_login()){

	$check = 'true';
	echo "$check";
}
else{
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<header>
	<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				<li><a href="Watched.php">Watched</a></li>
				<li><a href="about.php" class="active">About</a></li>
                <li><a href="signup.php">Sign Up</a></li>
				<?php 
    if($check !== 'true') {
        echo '<a href="login.php">Login</a>';
    } else {
        echo '<a href="login.php">Logout</a>';
    }
    ?>
            </ul>
		</nav>
	</header>
	<main>
		<h2>About Us</h2>
		<p>This website is a project. The aim is to make a movie library from which movies can be accessed and their record can be kept.</p>
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
		<button>Contact</button>
	</footer>
</body>
</html>