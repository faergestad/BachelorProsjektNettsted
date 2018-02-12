<?php
	include 'db.php';
	session_start();

	if ($_POST['password'] == $_POST['repassword']) {
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['position'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$position = $_POST['position'];

			$query = "INSERT INTO users (username, password, position) VALUES ('$username', '$password', '$position')";
			$result = mysqli_query($db, $query);
			if ($result) {
				echo "User Created!";
			} else {
				echo "User Registration Failed..";
			}
		}
	} else {
		echo "The passwords do not match!";
	}
?>