<?php
	include('session.php');
?>
<html>
	
	<head>
		<title>Welcome</title>
	</head>

	<body>
		<h1>Welcome <?php echo $login_session; ?></h1>
                <p>Dette er en test</p>
		<h2><a href="logout.php">Sign out</a></h2>
	</body>

</html>