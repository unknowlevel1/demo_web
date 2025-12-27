<?php 

  session_start();
  if(!isset($_SESSION['username']) and !isset($_SESSION['Id'])) {
    header("Location: login.html");
  }

?>
<?php

    $host = "arrr-server.mysql.database.azure.com";
    $username = "asfegqtrwz";
    $password = "sensen07@";
    $database = "websdemodata";

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
