
<!DOCTYPE html>
<html>
<head>
	<title>Flixia | Admin</title>
	<link rel="stylesheet" href="add_movie.css">
</head>
<body>
	<header>
		<div class="container">
			<h1 id="title_name"><a href="home.php"><img src="../Flixialogo.png" alt="Flixia" width="120" height="50"></a></h1>
			<nav>
				<ul>
					<li><a href="add_producer.php">Add Producer</a></li>
					<li><a href="add_director.php">Add Director</a></li>
					<li><a href="add_genre.php">Add Genre</a></li>
                    <li><a href="add_movie.php">Add Movie</a></li>
					<li><a href="../login.php">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Add Movie</h2>
			<form action="add_movie.php" method="post">
				<!-- title -->
				<label for="title">Title</label>
				<input type="text" id="title" name="title" placeholder="title"  required >
				<!-- description -->
				<label for="description">Description</label>
				<textarea id="description" name="description" required></textarea>
				<!-- genre -->
				<label for="genre">Genre</label>
				<input type="text" id="genre" name="genre" required>
				<!-- image -->
				<label for="image_url">Image URL</label>
				<input type="text" id="image_url" name="image_url" required>
				<!-- trailer -->
				<label for="trailer_url">Trailer URL</label>
				<input type="text" id="trailer_url" name="trailer_url" required>
				<!-- release date -->
				<label for="release_date">Release Date</label>
				<input type="date" id="release_date" name="release_date" required>
				<!-- rating -->
				<label for="rating">Rating (0-10)</label>
				<input type="number" id="rating" name="rating" min="0" max="10" step="0.1" required>
				<!-- director -->
				<label for="director">Director Name</label>
				<input type="text" id="director" name="director" required>
				<!-- producer -->
				<label for="producer">Producer Name</label>
				<input type="text" id="producer" name="producer" required>
				<!-- movie time -->
				<label for="movie_time">Movie Time</label>
				<input type="time" id="movie_time" name="movie_time" required>				
				<!-- content type -->
				<label for="content-type">Content Type:</label>
				<select name="content-type" id="content-type" required>
					<option value="premium">Premium</option>
					<option value="non-premium">Non-Premium</option>
				</select>

				<button type="submit" name="submit">Add Movie</button>
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			<p style="color:#000000">&copy; 2023 Flixia. All rights reserved.</p>
			<button>Contact</button>
		</div>
	</footer>
</body>
</html>


<?php
include("connect.php");

if (isset($_POST['submit'])){
$title = $_POST['title'];
$description = $_POST['description'];
$genre = $_POST['genre'];
$image = $_POST['image_url'];
$trailer = $_POST['trailer_url'];
$release_date = $_POST['release_date'];
$rating = $_POST['rating'];
$director = $_POST['director'];
$producer = $_POST['producer'];
$content_type = $_POST['content-type'];
$movie_time = date('H:i', strtotime($_POST['movie_time'])); // format movie time

// Execute the SQL query to get the genre ID
$q1 = "SELECT * FROM genres WHERE name = '$genre'";
$result1 = mysqli_query($con, $q1);
$row1 = mysqli_fetch_assoc($result1);
$genre_id = $row1['id'];

// Execute the SQL query to get the director ID
$q2 = "SELECT * FROM directors WHERE name = '$director'";
$result2 = mysqli_query($con, $q2);
$row2 = mysqli_fetch_assoc($result2);
$director_id = $row2['id'];

// Execute the SQL query to get the producer ID
$q3 = "SELECT * FROM producers WHERE name = '$producer'";
$result3 = mysqli_query($con, $q3);
$row3 = mysqli_fetch_assoc($result3);
$producer_id = $row3['id'];


$query = "insert into movies(title, description, genre_id, image_url, trailer_url, release_date, rating, director_id, producer_id, content_type, movie_time) 
		  values ('$title', '$description', '$genre_id', '$image', '$trailer', '$release_date', '$rating', '$director_id', '$producer_id', '$content_type', '$movie_time')";
$result = mysqli_query($con, $query);

echo "<script> alert('Success') </script>";

}
else{
	echo "<script> alert('Failure') </script>";
}

?>