<?php

  //************************************************************************************
  // File: del_product.php
  // Developer: Travis Bontrager
  // Developed: Jan/Feb 2017
  // Web address: qualityfloor.biz/scripts/del_product.php
  // Description: PHP script to delete a listing from Quality Floor's product price 
  //              listing page 
  //************************************************************************************

  $idnum=$_POST['idnum']; 

  //define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");
   
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  $sql = "DELETE FROM products WHERE id=" . $idnum;
  
  $conn->query($sql);
  $conn->close();

  header("location:tool.php");

?>