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
	<title>Wishlist | My Website</title>
	<link rel="stylesheet" type="text/css" href="wishlist.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<header>
	<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="movies.php">Movies</a></li>
				<li><a href="wishlist.php" class="active">Wishlist</a></li>
				<li><a href="watched.php">Watched</a></li>
				<li><a href="about.php">About</a></li>
                <li><a href="signup.php">Sign Up</a>
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
		<h2>Wishlist</h2>
		<ul style="list-style: none;">
			<li><a href="#">Batman <br><img src="" alt="Superman"></a></li>
			<li><a href="#">Movie 3 <br></a></li>
			<li><a href="#">Movie 4 <br></a></li>
			<li><a href="#">Movie 5 <br></a></li>
		</ul>
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
		<button>Contact</button>
	</footer>
</body>
</html>
