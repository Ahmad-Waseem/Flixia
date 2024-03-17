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
	<title>Watched</title>
	<link rel="stylesheet" type="text/css" href="watched.css">
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
				<li><a href="watched.php" class="active">Watched</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <?php 
    if($check !== 'true') {
        echo '<a href="login.php">Login</a>';
    } else {
        echo '<a href="login.php">Logout</a>';
    }
    ?>
			</ul>
            <input type="text" id="search-bar" placeholder="Search movies...">
            <button id="search-button">Search</button>
			
		</nav>
	</header>
	<main>
		<h2>Recently Watched</h2>
		<div class="watched-container">
			<div class="movie-card">
				<img src="movie1.jpg" alt="Movie 1">
				<h3>Movie 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="movie-card">
				<img src="movie2.jpg" alt="Movie 2">
				<h3>Movie 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="movie-card">
				<img src="movie3.jpg" alt="Movie 3">
				<h3>Movie 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="movie-card">
				<img src="movie4.jpg" alt="Movie 4">
				<h3>Movie 4</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="movie-card">
				<img src="movie5.jpg" alt="Movie 5">
				<h3>Movie 5</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="movie-card">
				<img src="movie6.jpg" alt="Movie 6">
				<h3>Movie 6</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
		<button>Contact</button>
	</footer>
</body>
</html>
