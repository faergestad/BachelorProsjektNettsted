<?php
	// variabler for tilkobling til databasen
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'bachelordb');
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if (!$db) {
		die("Database connetion failed!" . mysqli_error($db));
	}
?>