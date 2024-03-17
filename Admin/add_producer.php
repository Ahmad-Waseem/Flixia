<!DOCTYPE html>
<html>
<head>
	<title>Flixia | Admin - Add Director</title>
	<link rel="stylesheet" href="ad.css">
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
			<h2>Add Director</h2>
			<form action="add_producer.php" method="post">
                <br>
				<!-- producer name -->
				<label for="producer_name">Producer Name</label>
				<input type="text" id="producer_name" name="producer_name" placeholder="Producer Name" required>
				<!-- biography -->
				<label for="biography">Biography</label>
				<textarea id="biography" name="biography" required></textarea>
				<!-- birthdate -->
				<label for="birthdate">Birthdate</label>
				<input type="date" id="birthdate" name="birthdate">
                <br>
				<button type="submit" name="submit">Add Producer</button>
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			<p>&copy; 2023 Flixia. All rights reserved.</p>
			<button>Contact</button>
		</div>
	</footer>
</body>
</html>


<?php
include("connect.php");

if (isset($_POST['submit'])) {
	$name = $_POST['producer_name'];
	$biography = $_POST['biography'];
	$dob = $_POST['birthdate'];

	$query = "insert into `producers` (name, bio, dob) values ('$name', '$biography', '$dob')";

	$result = mysqli_query($con, $query);

	echo "<script> alert('Successfully added, Congrats');  </script>";
}
else{
	echo "<script> alert('Not successful');  </script>";
}

?>