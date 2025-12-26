<?php

     $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
     $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
     
     
     $conn = mysqli_connect("localhost", "username", "password","webpractice-database");
     
     $username = mysqli_real_escape_string($conn, $username);
     $password = mysqli_real_escape_string($conn, $password);
     
     header("X-Frame-Options: DENY");
     
     ini_set('display_errors', '0');
     
     session_start();
     session_regenerate_id(true);
    
?>
