<?php


function topp() {
    echo "
    <!doctype html>

    <html lang='no'>
    <head>
    <title>Bachelorprosjekt</title>
    <meta charset='UTF-8'>
    <meta name='beskrivelse' content='BackEnd system'>
    <meta name='forfatter' content='Georg Persen'>
    <meta name='Bachelorprosjekt' content='hjemmeside'>
    <link rel='stylesheet' type='text/css' href='includes/style.css'>
    <meta name='viewport' content='width=device-widthm initial-scale=1.0'>
    </head>
    <br><br>
    <body>
        <div class='loginContainer'>
            <h1>Please log in</h1>
            <input type='text' placeholder='Enter Username' name='uname' required size='30'>
            <br>
            <input type='password' placeholder='Enter Password' name='psw' required size='30'>
            <br>
            <button type='submit'>Login</button>
        </div>
    </body>
 ";}
?>