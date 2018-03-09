<?php

include 'db.php';


  //$oppdragsgiver = mysqli_real_escape_string($db, $_POST['oppdragsgiver']);
  //  $tjenester = mysqli_real_escape_string($db, $_POST['tjenester']);
    $beskrivelse = $_POST['description'];
    $addresse = $_POST['address'];
 //   $start = mysqli_real_escape_string($db, $_POST['start']);
 // $slutt = mysqli_real_escape_string($db, $_POST['slutt']); 
    
    $query = "INSERT INTO project (description, address) VALUES ('$beskrivelse', '$addresse')";
    
    $result = mysqli_query($db, $query);
    if($result) {
        echo "Oppdrag opprettet!";
    } else {
        echo "noe gikk galt..";
        print_r($_POST);
    }
            


?>

