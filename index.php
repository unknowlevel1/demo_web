<?php 

  session_start();
  if(!isset($_SESSION['username']) and !isset($_SESSION['Id'])) {
    header("Location: login.html");
  }

?>
<?php

    $host = "websdemo.mysql.database.azure.com";
    $username = "zztimdbvxt";
    $password = "sensen07@";
    $database = "websdemodata";


  
     $conN = mysqli_init();
     mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
     mysqli_real_connect($conn, "websdemo.mysql.database.azure.com", "zztimdbvxt", "sensen07@", "websdemodata", 3306, MYSQLI_CLIENT_SSL);

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("error " . $conn->connect_error);
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
