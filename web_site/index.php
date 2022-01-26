<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Rahabni</title>
    <link rel="shortcut icon" href="./src/assets/ico.ico"/>
    <link rel="stylesheet" href="./src/styles/home/base.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- start header -->
    <!-- <div class="header">
        <div class="container">
            <img src="assets/Logo.png" alt="" class="logo">    
            <a class="login-1" href="./login.php">Login</a>
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <span>rahbanirafik@gmail.com</span>
                <i class="fas fa-phone-alt"></i>
                <span class="seconde-icon">+212 561-753209</span>
            </div>
        </div>
    </div> -->
    <?php include './src/components/header.php';?>
    <!-- start header -->
    <!-- start content -->   
    <?php 
      if(isset($_GET['login']))
        include './src/components/home/login.php';
      else
        include './src/components/home/home.php';
    ?>
    <!-- end content -->
    <!-- start footer -->
    <!-- <div class="footer">
        <div class="container">
            <img src="assets/Logo.png" class="logo" alt="">
            <p>WE ARE SOCIAL</p>
            <div class="social-icons">
                <i class="fas fa-globe"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-youtube"></i>
            </div>
            <p class="copyright" >
                &copy; 2022 - <span>Cabinet Rahbani</span> All right Reserved
            </p>
        </div>
    </div> -->
    <?php include'./src/components/footer.php'; ?>
    <!-- end footer -->
</body>
</html>
