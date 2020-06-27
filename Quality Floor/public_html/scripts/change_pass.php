<?php

  //************************************************************************************
  // File: change_pass.php
  // Developer: Travis Bontrager
  // Developed: Jan/Feb 2017
  // Web address: qualityfloor.biz/scripts/change_pass.php
  // Description: PHP script to change login password for Quality Floor's product 
  //              price listing 
  //************************************************************************************

  $pass=$_POST['pass']; 
  $pass = md5($pass);
  
  //define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");
   
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  $sql = "UPDATE toolpass SET pass='" . $pass . "'";
  
  $conn->query($sql);
  $conn->close();

  header("location:tool.php");

?>