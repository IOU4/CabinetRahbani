<?php include './database/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabinetRahbani-dashboard</title>
    <link rel="stylesheet" href="./src/styles/main.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <body>
    <header>
      <?php include './src/components/header.php'; ?>
    </header>
    <nav>
      <?php include './src/components/sidebar.php'; ?>
    </nav>
    <main>
    <?php
      if (isset($_GET['delete-doctor'])) {
          remove_doctor($conn, $_GET['id']);
      } elseif (!empty($_POST['id'])) {
          update_doctor($conn, $_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['naissance'], $_POST['speciality']);
      } elseif (!empty($_POST['nom'])) {
          add_doctor($conn, $_POST['nom'], $_POST['prenom'], $_POST['naissance'], $_POST['speciality']);
      }
      if (isset($_GET['add-doctor'])) {
          include './src/components/add_doctor.php';
      } else {
          include './src/components/dashboard.php';
      }
    ?>
    </main>
    <footer>
      <?php include './src/components/footer.php'; ?>
    </footer>
  </body>
</html>
