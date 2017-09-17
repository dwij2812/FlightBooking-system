<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "dbmsproject");//dbmsproject here is the name of the database being referred to 
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error());
   }
   mysqli_select_db($conn, 'dbmsproject') or die(mysqli_error());
?>