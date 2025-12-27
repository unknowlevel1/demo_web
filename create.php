<?php

   //echo $username = '';
    $host = "arrr-server.mysql.database.azure.com";
    $username = "asfegqtrwz";
    $password = "sensen07@";
    $database = "array-database";
      
     $conn = mysqli_init();

      mysqli_ssl_set($conn, NULL, NULL,"C:/cert/DigiCertGlobalRootG2.crt.pem",NULL,NULL);
      mysqli_real_connect($conn, $host, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL);


      if (mysqli_connect_errno($conn)) {
          die('Failed to connect to MySQL: '.mysqli_connect_error());
      }
      
      if (mysqli_query($conn,
        'CREATE TABLE acount (`username` VARCHAR(50) NOT NULL  ,`password` VARCHAR(50) NOT NULL ,`Id INT(30) NOT NULL`PRIMARY KEY (`User`));
        '
      )) {
        printf("Table created\n");
      }
        mysqli_close($conn);

?>

