<?php 
   //connect to database

   $conn = mysqli_connect("localhost","root","","ninja_pizza");
   //mysqli_select_db("ninja_pizza");

   //check connection

   if(!$conn){
        echo "connection error: ".mysqli_connect_error(); //concatenates it to the error, the function catches the error
   }
?>