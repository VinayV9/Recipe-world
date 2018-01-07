
<?php
   $serverName= "localhost";
   $userName= "userName";
   $password= "password";

   $connection= new mysqli($serverName, $userName, $password);
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   } 
   echo "Connected successfully";
?>