<?php
// Hovedside med et enkelt innloggingsskjema
require 'db.php';
session_start();
?>
<!DOCTYPE html>
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
        <h1>Please log in</h1>
        <form action="login.php" method="POST">
        	<input type='text' placeholder='Enter Username' name='username' required size='30'>
        	<br>
        	<input type='password' placeholder='Enter Password' name='password' required size='30'>
        	<br>
        	<button type='submit'>Login</button>
    	</form>
        <br>
        <form action="register.php">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
