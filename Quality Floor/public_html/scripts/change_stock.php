<?php

  //************************************************************************************
  // File: change_stock.php
  // Developer: Travis Bontrager
  // Developed: Jan/Feb 2017
  // Web address: qualityfloor.biz/scripts/change_stock.php
  // Description: PHP script to chnage the in stock status of an existing listing on 
  //              Quality Floor's product price listing page 
  //************************************************************************************

  $idnum=$_POST['idnum']; 
  $instock=$_POST['instock'];

  //define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");;
   
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  $sql = "UPDATE products SET instock='" . $instock . "' WHERE id=" . $idnum;
  
  $conn->query($sql);
  $conn->close();

  header("location:tool.php");

?>