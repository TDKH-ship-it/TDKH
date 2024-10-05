<?php
$conn=mysqli_connect("webbanhang.cjoe08s4kpvt.ap-southeast-2.rds.amazonaws.com","admin","Pkt285941","bansach");
// Check connection
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $conn->set_charset("utf8")
?>
