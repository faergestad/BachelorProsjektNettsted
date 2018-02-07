<?php
   define("SERVER", "localhost");
   define("USERNAME", "root");
   define("PASSWORD", "");
   define("DATABASE", "mydb");
   $db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE) or die("Kunne ikke koble til db-server");
   $db->set_charset("utf8");

?>