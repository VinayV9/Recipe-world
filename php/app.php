
<?php

   $serverName= "localhost";
   $userName= "userName";
   $password= "password";
   $db= "recipeworld";

   $connection= new mysqli($serverName, $userName, $password);
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   } 
   echo "Connected successfully";

   mysqli_select_db($db)
?>