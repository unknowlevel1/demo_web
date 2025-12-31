<?php

     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
     $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
     
     $host = "web-ru-server.mysql.database.azure.com";
     $username = "mglrhyfmjy";
     $password = "sensen07@";
     $database = "web-ru-database";
 
     $conn = new mysqli($host, $username, $password, $database ,'3306');
     if ($conn->connect_error) {
         die("error " . $conn->connect_error);
     }

     $username = mysqli_real_escape_string($conn, $username);
     $password = mysqli_real_escape_string($conn, $password);
     
     header("X-Frame-Options: DENY");
     
     ini_set('display_errors', '0');
     
     session_start();
     session_regenerate_id(true);




?>
