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
	<title>Movies Page</title>
	<link rel="stylesheet" type="text/css" href="movies.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<header>
	<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="movies.php" class="active">Movies</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				<li><a href="watched.php">Watched</a></li>
				<li><a href="about.php">About</a></li>
				<li class="dropdown">
				<div class="dropdown-content">
    <a href="signup.php">Sign Up</a>
    <?php 
    if($check !== 'true') {
        echo '<a href="login.php">Login</a>';
    } else {
        echo '<a href="login.php">Logout</a>';
    }
    ?>
</div>

				</li>
                <input type="text" id="search-bar" class='search' placeholder="Search movies...">
                <button id="search-button" class='search' >Search</button>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Movies</h2>
        <div class="movie-container">
		<div class="movie">
			<img src="" alt="Batman">
			<h3>Batman</h3>
			<p>Release Date: January 1, 2023</p>
			<p>Rating: 8.5/10</p>
			<p>Description: I am Batman.</p>
			<button>Add to Wishlist</button>
		</div>
		<div class="movie">
			<img src="movie2.jpg" alt="Movie 2">
			<h3>Movie 2</h3>
			<p>Release Date: February 1, 2023</p>
			<p>Rating: 9.0/10</p>
			<p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel felis a dolor accumsan iaculis a eu nulla. Praesent at augue at risus eleifend scelerisque euismod eget est.</p>
			<button>Add to Wishlist</button>
		</div>
		<div class="movie">
			<img src="movie3.jpg" alt="Movie 3">
			<h3>Movie 3</h3>
			<p>Release Date: March 1, 2023</p>
			<p>Rating: 8.8/10</p>
			<p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel felis a dolor accumsan iaculis a eu nulla. Praesent at augue at risus eleifend scelerisque euismod eget est.</p>
			<button>Add to Wishlist</button>
		</div>
    </div>
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
		<button>Contact</button>
	</footer>
</body>
</html>


