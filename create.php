<?php

      $host = '';
      //echo $username = '';
      $username = '';
      $password = '';
      $db_name = '';
      
      $conn = mysqli_init();

          mysqli_ssl_set($conn, NULL, NULL,"D:\study\DigiCertGlobalRootCA.crt",NULL,NULL);
          mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
          if (mysqli_connect_errno($conn)) {
          die('Failed to connect to MySQL: '.mysqli_connect_error());

      }
      
  
      if (mysqli_query($conn,'  
           CREATE TABLE account (
          `User` VARCHAR(50) NOT NULL  ,
          `Password` VARCHAR(50) NOT NULL ,
          `id INT(30) NOT NULL  `
          
          PRIMARY KEY (`User`)
          );
      ')) {
      printf("Table created\n");
      }
      
      mysqli_close($conn);

?>

