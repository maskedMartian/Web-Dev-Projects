<?php

  //************************************************************************************
  // File: add_product.php
  // Developer: Travis Bontrager
  // Developed: Jan/Feb 2017
  // Web address: qualityfloor.biz/scripts/checklogin.php
  // Description: PHP script to add a listing to Quality Floor's product price listing 
  //************************************************************************************

  $type=$_POST['type']; 
  $maker=$_POST['maker'];
  $style=$_POST['style'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  $units=$_POST['units'];
  $instock=$_POST['instock'];

  //define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");
   
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  $sql = "INSERT INTO products VALUES (NULL, '" . $type . "', '" . $maker . "', '" . $style . "', '" . $description . "', '" . $price . "', '" . $units . "','" . $instock . "')"; 
  
  $conn->query($sql);
  $conn->close();

  header("location:tool.php");

?>