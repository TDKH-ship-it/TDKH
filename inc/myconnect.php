<?php
$conn=mysqli_connect("mysql-demo45.mysql.database.azure.com","admin45","Tdc@12345","bansach");
// Check connection
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $conn->set_charset("utf8")
?>
