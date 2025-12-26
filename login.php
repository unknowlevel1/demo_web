<?php
       session_start();

       $host = "webpractice-server.mysql.database.azure.com";
       $username = "brksyjredx";
       $password = "SeLfJTxN9ki2W$FY";
       $database = "webpractice-database";

        $conn = new mysqli($host, $username, $password, $database);
   
        if ($conn->connect_error) {
           die("error" . $conn->connect_error);
        }else{
           echo ("connected");
        }
   
       $User = $_POST["username"];
       $Password = $_POST["Password"];


       $Input_user = mysqli_real_escape_string($conn, $User);
       $Input_pass = mysqli_real_escape_string($conn, $Password);



       $sql = "SELECT * FROM `account` WHERE username = '$Input_user' and password = '$Input_pass'";

      
       $result = mysqli_query($conn, $sql);
       ini_set('display_errors', '0');
       $count = mysqli_num_rows($result);
   
        if($count == 1){
   
           $_SESSION['username'] = $User;
           $_SESSION['id'] = 1; 
           header('Location: index.php');
   
        } else{
   
           header('Location: login.html');
   
        }
?>

