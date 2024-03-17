<?php
include("login_check.php");

if(check_login()){

	$check = 'true';
	echo "$check";
}
else{
	header('Location: login.php');
}

include("connect.php");
// Handle search query
$search_query = "";

if (isset($_GET["search_query"])) {
    $search_query = $_GET["search_query"];
    $sql = "SELECT * FROM movies WHERE title LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM movies";
}

// Execute SQL query
$result = mysqli_query($con, $sql); // you need to pass the connection variable as the first argument
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Flixia</title>
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
<header>
	<h1 id="title_name"><a href="home.php"><img src="Flixialogo.png" alt="Flixia" width="120" height="50"></h1></a>
		<nav>
			<ul>
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="movies.php">Movies</a></li>
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
				<br>
                <input type="text" id="home-search-bar" class='search' placeholder="Search movies...">
                <button id="home-search-button" class='search' >Search</button>
			</ul>
		</nav>
	</header>
	
	<main>
	<?php
    if ($result->num_rows > 0) {
        echo '<div class="watched-container">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="watched-movie">';
            echo '<img src="' . $row["poster_url"] . '" alt="' . $row["title"] . '">';
            echo '<h3>' . $row["title"] . '</h3>';
            echo '<p>' . $row["description"] . '</p>';
            echo '</div>';
        }
        echo '</div>';
    } 
	else {
        echo '<p>No movies found.</p>';
    }

    ?>
		
	</main>
	<footer>
		<p>&copy; 2023 Flixia. All rights reserved.</p>
		<button>Contact</button>
	</footer>
</body>
</html>
