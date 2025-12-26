<?php 

  session_start();
  if(!isset($_SESSION['username']) and !isset($_SESSION['id'])) {
    header("Location: login.html");
  }

?>
<?php

    $host = "webpractice-server.mysql.database.azure.com";
    $username = "brksyjredx";
    $password = "SeLfJTxN9ki2W$FY";
    $database = "webpractice-database";


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

<?php

   $stmt = $conn->prepare("Select * From student Where id = ?");
   $stmt->bind_param("s", $id);
   
   $id = $_SESSION['id'];
   
   $stmt->execute();
   
   $result = $stmt->get_result();
   $row = mysqli_fetch_assoc($result); 
   ini_set('display_errors', '0');
   
?>

<body>

    <div class="wraper">

        <div class="header">
            <div class="header__title">
                <div class="header__title__description" style="color: #fff;">
                </div>

                <div class="header__title__user">
                    <h3>Sinh Viên: <?php echo $row['Name'] ?></h3>
                </div>

            </div>
            <div class="header__system">
                <a href="" class="header__system__link">Trang chủ</a>
                <a href="logout.php" class="header__system__link">Đăng xuất</a>
                <a href="" class="header__system__link">hỏi đáp</a>
                <a href="" class="header__system__link">Trợ giúp</a>
                <select class="header__system__link-op" name="Product_Type" >
                    <option value="">VN</option>
                    <option value="">EN</option>
                  </select>
            </div>
        </div>

        <div class="container">

               <?php echo $_SESSION['username']; ?>

        </div>

    </div>
</body>

</html>
