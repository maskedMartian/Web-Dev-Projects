<?php

  //************************************************************************************
  // File: checklogin.php
  // Developer: Travis Bontrager
  // Developed: Jan/Feb 2017
  // Web address: qualityfloor.biz/tool/checklogin.php
  // Description: PHP script to validate login information
  //************************************************************************************

  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");
   
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  $sql = "SELECT pass FROM toolpass";
  
  $pass = $conn->query($sql);
  $comparePass = $pass->fetch_assoc();
  $conn->close();

  // username and password sent from form 
  $myusername=$_POST['myusername']; 
  $mypassword=$_POST['mypassword']; 
  if ($myusername == 'Admin' && md5($mypassword) == $comparePass[pass]) {  //&& md5($mypassword) == $comparePass[pass]) {
  //if ($myusername == 'Lisa') {
    session_start();
    $_SESSION["myusername"] = $myusername;
    $_SESSION["mypassword"] = $mypassword; 
    header("location:/Floor/scripts/tool.php");
  }
  else
    header("location:fail.html");
?>