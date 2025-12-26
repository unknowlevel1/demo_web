<?php
       session_start();

       $host = "webpractice-server.mysql.database.azure.com";
       $username = "brksyjredx";
       $password = "SeLfJTxN9ki2W$FY";
       $database = "webpractice-database";
       $conn = new mysqli($host, $username, $password, $database);

       if (!$conn) {                                             
           die("Connection failed: " . mysqli_connect_error());     
       }
   

    $Input_user = $_POST['username'];
    $Input_pass = $_POST['password'];

    $sql = "SELECT * FROM `acount` WHERE username = '$Input_user' and password = '$Input_pass'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    while ($data = mysqli_fetch_array($result)){
         $user_id = $data['Id'];
         $user_name = $data['username'];
         $user_password = $data['password'];
    }

    if($count == 1){
           $_SESSION['username'] = $user_id;
           $_SESSION['Id'] = 1; 
           header('Location: index.php');
    }else{
           header('Location: login.html');
    }

         $conn -> close();
}



?>

