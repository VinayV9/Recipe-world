<?php
   include "app.php";

   if(isset($_POST['register'])){
       $name= $_POST['name'];
       $email= $_POST['email'];
       $password= $_POST['password'];
       $qry= "INSERT  INTO  `register`
        ( `name`,
          `email`,
          `password`
        ) VALUES 
        (
          '$name',
          '$email',
          '$password' 
        ) ";  
   }
?>