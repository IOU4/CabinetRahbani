<?php

  $dbName = 'cabinet';
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPass = 'emad';

  $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName) or die(mysqli(mysqli_error($conn)));

  function add_doctor($conn, $nom, $prenom, $naissance, $speciality)
  {
      $query = "INSERT INTO doctors (nom, prenom, naissance, specialty) VALUES ('$nom','$prenom','$naissance','$speciality');";
      $conn->query($query) or die($conn->error);
  }

  function update_doctor($conn, $id, $nom, $prenom, $naissance, $speciality)
  {
      $query = "UPDATE doctors SET nom = '$nom', prenom = '$prenom', naissance = '$naissance', specialty = '$speciality' WHERE id = $id;";
      $conn->query($query) or die($conn->error);
  }

  function remove_doctor($conn, $id)
  {
      $query = "DELETE FROM doctors WHERE id = $id";
      $conn->query($query) or die($conn->error);
  }
