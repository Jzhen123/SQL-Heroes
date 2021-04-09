<?php 
  // Reusable connect block of code
  $servername = "localhost";
  $username = "root";
  $password = "JynaEBGQVstn62oU";
  $dbname = "sqlheroes";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>