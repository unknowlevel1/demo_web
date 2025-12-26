<?php


    $host = "websdemo.mysql.database.azure.com";
    $username = "zztimdbvxt";
    $password = "sensen07@";
    $db_name = "websdemodata";
      
   $conn = mysqli_init();
   mysqli_ssl_set($conn, NULL, NULL,"c:\cert\DigiCertGlobalRootG2.crt.pem",NULL,NULL);
   mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL);
   if (mysqli_connect_errno($conn)) {
   die('Failed to connect to MySQL: '.mysqli_connect_error());
   }
   
   $User = '';
   $Password= '';
   $id='';
   
   if($stmt = mysqli_prepare($conn, "INSERT INTO acount (username, password) VALUES (? , ? , ?)")){
       mysqli_stmt_bind_param($stmt, 'ssd',$User,$Password,$id);
       mysqli_stmt_execute($stmt);
       printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
       mysqli_stmt_close($stmt);
   }
   
   mysqli_close($conn);

?>
