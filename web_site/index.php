<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Rahabni</title>
    <link rel="shortcut icon" href="./src/assets/ico.ico"/>
    <link rel="stylesheet" href="./src/styles/home/base.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
</head>
<body>
    <!-- header -->
    <?php include './src/components/header.php';?>

    <!-- main -->
    <?php 
      if(isset($_GET['login'])) include './src/components/home/login.php';
      else include './src/components/home/home.php';
    ?>
  
    <!-- footer -->
    <?php include'./src/components/footer.php'; ?>
</body>
</html>
