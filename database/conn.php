<?php

  $dbName = 'db';
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPass = 'emad';
  $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName) or die($conn->error);

  $result =  $conn->query("DESC $table") or die($conn->error);
  $result->data_seek(1);
  $headers = array(); // used in table head, and form plceholders
  $types = array(); // used to determine the type of form input
  $keys = array(); // used to in case of foreign keys
  while ($column = $result->fetch_assoc()):
    $headers[] = $column['Field'];
    $types[] = $column['Type'];
    $keys[] = $column['Key'];
  endwhile;     

  function add_to_table($table, $array)
  {
      global $conn;
      foreach( $array as $field => $value)
        if($value){
          $values[] = "'$value'";
          $fields[] = $field;
        }
      $fields = implode(',', $fields);
      $values = implode(',', $values);
      $query = "INSERT INTO $table ($fields) VALUES ($values);";
      $stmnt = $conn->prepare($query);
      $stmnt->execute() or die($conn->error);
  }
  function update_in_table($table, $array)
  {
      global $conn;
      $id = 0;
      $attributes = array();
      foreach( $array as $field => $value){
        if($value){
          if($field == 'id')
            $id = $value;
          else {
            $attributes[] = "$field = '$value'";
          }
        }
      }
      $attributes = implode(',', $attributes);
      $query = "UPDATE $table SET $attributes WHERE id = $id";
      $stmnt = $conn->prepare($query);
      $stmnt->execute() or die($conn->error);
  }

  function remove_from_table($table, $id)
  {
      global $conn;
      $query = "DELETE FROM $table WHERE id = $id";
      $stmnt = $conn->prepare($query);
      $stmnt->execute() or die($conn->error);
  }
