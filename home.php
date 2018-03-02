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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bachelorprosjekt/BachelorProsjektNettsted/css/bootstrap.min.css">
    
    
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="/bachelorprosjekt/BachelorProsjektNettsted/js"></script>
	<div class='container'>
            <div class="row">
            <div class='center-block'>
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
                </div>
    </div>
</body>
</html>
