<?php
	// Logg inn-side som sjekker brukeren opp mot databasen
	include("db.php");
	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$myusername = $mysqli->escape_string($db, $_POST['username']);
		$mypassword = $mysqli->escape_string(password_hash($db, $_POST['password'],PASSWORD_BCRYPT));
                $hash = $mysqli->escape_string(md5(rand(0,1000)));

		$sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);

		if ($count == 1) {
			$_SESSION['login_user'] = $myusername;

			header("location: welcome.php");
		} else {
			header("location: error.php");
		}
	}
?>