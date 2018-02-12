<?php
	require 'db.php';
	session_start();
?>
<html>
	<head>
		<title>Bachelorprosjekt</title>
    	<meta charset='UTF-8'>
    	<meta name='beskrivelse' content='BackEnd system'>
    	<meta name='forfatter' content='Georg Persen'>
    	<meta name='Bachelorprosjekt' content='hjemmeside'>
    	<link rel='stylesheet' type='text/css' href='style.css'>
	</head>

	<body>
		<div class='loginContainer'>
        	<h1>Please register</h1>
        	<form action="registerUser.php" method="post">
        		<input type='text' placeholder='Enter Employee Number' name='username' required size='30'>
        			<br>
        		<input type='text' placeholder='Enter Your Position' name='position' required size='30'>
        			<br>
        		<input type='password' placeholder='Enter A Password' name='password' required size='30'>
        			<br>
        		<input type='password' placeholder='Retype Your Password' name='repassword' required size='30'>
        			<br>
        		<button type='submit'>Register</button>
    		</form>
    	</div>
	</body>
</html>