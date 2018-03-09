<?php
	include('session.php');
        ?>

<html><!DOCTYPE html>
<html>
    <head>
<title>Bachelor Prosjekt</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
       <div class="jumbotron text-center">
  <h1>Bachelor GAKK</h1>
  <p>Georg F. Persen, Kim Allergodt, Kjetil Skårdal, Andreas Leite</p> 

    
  
  <!-- Links -->
   
  <nav class="navbar-expand-sm">
  <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="home.php">Hjem</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ansatt.php">Ansatt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Oppdrag</a>
    </li>
  </ul>
</div>
<div class="container section-ansatt">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 ansatt-hedding text-center">
			<h1>Ansatte</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="row section-success ansatt-box text-center">
				<div class="col-md-12 section1">
					<img src="">
				</div>
				<div class="col-md-12 section2">
					<p>GEORG FAERGESTAD</p><br>
					<h1>MASTER</h1><br>
				</div>
				<div class="col-md-12 section3">
					<p>
						Master of doom
						Flink i det meste.
					</p>
				</div>
				<div class="col-md-12 section4">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="row section-info ansatt-box text-center">
				<div class="col-md-12 section1">
					<img src="">
				</div>
				<div class="col-md-12 section2">
					<p>KIM ALLERGODT</p><br>
					<h1>APPUTVIKLER</h1><br>
				</div>
				<div class="col-md-12 section3">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					</p>
				</div>
				<div class="col-md-12 section4">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-google-plus" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="row section-danger ansatt-box text-center">
				<div class="col-md-12 section1">
					<img src="">
				</div>
				<div class="col-md-12 section2">
					<p>ANDREAS LEITE</p><br>
					<h1>WEBDESIGNER</h1>
				</div>
				<div class="col-md-12 section3">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					</p>
				</div>
				<div class="col-md-12 section4">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-google-plus" aria-hidden="true"></i>
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Hjem</a></li>
        <li><a href="ansatt.php">Ansatt</a></li>
        <li><a href="oppdrag.php">Oppdrag</a></li>
        <li><a href="#">Historikk</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav> 
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Top</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Velkommen til GAKK Bachelorprosjekt</h1>
      <p>For å gjøre shit, naviger deg til ønsket side. </p>
      <hr>
      <h3>Oppdrag Mars 2018</h3>
      <p>Ferdigstille alpha versjon av system</p>
    </div>
    
  </div>
</div>

</body>
</html>