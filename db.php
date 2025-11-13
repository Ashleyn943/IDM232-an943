<?php
  $user = 'root';
  $password = 'root';
  $db = 'personal_tests';
  $host = 'localhost';
  $port = 3306;

  $connection = mysqli_connect($host, $user, $password, $db);
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
