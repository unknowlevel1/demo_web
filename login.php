<?php
session_start();

    $host = "websdemo.mysql.database.azure.com";
    $username = "zztimdbvxt";
    $password = "sensen07@";
    $database = "websdemodata";

    $conn = new mysqli($host, $username, $password, $database);
    //$conn = mysqli_connect($host,$user,$password,$database);

    if (!$conn) {                                            
       die("Connection failed: " . mysqli_connect_error());     
    }
   
    $user = $_POST['username'];
    $password = $_POST['password'];

    $Input_user = mysqli_real_escape_string($conn, $user);
    $Input_pass = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM `acount` WHERE username = '$Input_user' and password = '$Input_pass'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    ini_set('display_errors', '0');
    while($data = mysqli_fetch_array($result)){
         $user_name = $data['username'];
         $user_password = $data['password'];
    }
    if($count == 1){
           $_SESSION['username'] = $user_name;
           $_SESSION['password'] = $user_password;
           header('Location: index.php');
    }else{
           header('Location: login.html');
    }

?>

