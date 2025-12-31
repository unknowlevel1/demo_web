<?php 

  session_start();
  if(!isset($_SESSION['username']) and !isset($_SESSION['Id'])) {
    header("Location: login.html");
  }

?>
<?php

    $host = "web-ru-server.mysql.database.azure.com";
    $username = "mglrhyfmjy";
    $password = "sensen07@";
    $database = "web-ru-database";

    $conn = new mysqli($host, $username, $password, $database ,'3306');
    if ($conn->connect_error) {
        die("error " . $conn->connect_error);
    }

    $conn = mysqli_init();
    mysqli_ssl_set($conn,NULL,NULL, "C:/cert/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
    mysqli_real_connect($conn, 'web-ru-server.mysql.database.azure.com', 'mglrhyfmjy', 'sensen@', 'web-ru-database', 3306, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

    <div class="wraper">

        <div class="container">
               <?php echo $_SESSION['username']; ?>
        </div>

    </div>
  
</body>

</html>
