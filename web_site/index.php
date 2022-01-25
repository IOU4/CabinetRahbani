<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Cabinet</title>
    <link rel="shortcut icon" href="assets/ico.ico"/>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/normalise.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;500;600;700&display=swap" rel="stylesheet">
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
    <?php include './components/header.php';?>
    <!-- start header -->
    <!-- start content -->   
    <?php include './components/home.php';?>
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
    <?php include'./components/footer.php'; ?>
    <!-- end footer -->
</body>
</html>