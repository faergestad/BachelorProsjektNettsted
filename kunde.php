<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bachelor GAKK</title>
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
      <a class="navbar-brand" href="home.php">Logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Hjem</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registrer
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="oppdrag.php">Oppdrag</a></li>
          <li><a href="ansatt.php">Ansatt</a></li>
          <li><a href="kunde.php">Kunde</a></li>
        </ul>
      </li>
      <li><a href="oppdrag">Oppdrag</a></li>
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
   
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Registrer kunde</h1>
      <p>Fyll ut skjema for å registrere en ny kunde</p>
      <hr>
<form action="/lag_oppdrag.php" id="oppdragform">
      <div class="form-group">
    <label for="text">Kunde:</label>
    <input type="text" class="form-control" id="kunde">
  </div>
     <div class="form-group">
    <label for="text">Email:</label>
    <input type="text" class="form-control" id="email">
  </div>
    
  <div class="form-group">
    <label for="text">Addresse:</label>
    <input type="text" class="form-control" id="addresse">
  </div>


  <button type="submit" class="btn btn-default">Registrer</button>
</form>
    </div>
    
  </div>
</div>

</body>
</html>