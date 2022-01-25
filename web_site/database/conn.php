<?php

  $dbName = 'db';
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPass = '';
  $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName) or die($conn->error);

  $result =  $conn->query("DESC $table") or die($conn->error);
  $result->data_seek(1);
  $headers = array();
  $types = array();
  $keys = array();
  while ($column = $result->fetch_assoc()):
    $headers[] = $column['Field'];
    $types[] = $column['Type'];
    $keys[] = $column['Key'];
  endwhile;     

  function add_to_table($conn, $table, $array)
  {
      foreach( $array as $field => $value)
        if($value){
          $values[] = "'$value'";
          $fields[] = $field;
        }
      $fields = implode(',', $fields);
      $values = implode(',', $values);
      $query = "INSERT INTO $table ($fields) VALUES ($values);";
      $conn->query($query) or die($conn->error);
  }
  function update_in_table($conn, $table, $array)
  {
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
      $conn->query($query) or die($conn->error);
  }

  function remove_from_table($conn, $table, $id)
  {
      $query = "DELETE FROM $table WHERE id = $id";
      $conn->query($query) or die($conn->error);
  }
