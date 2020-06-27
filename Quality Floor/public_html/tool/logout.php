<!--
************************************************************************************
File: logout.php
Developer: Travis Bontrager
Developed: Jan/Feb 2017
Web address: qualityfloor.biz/tool/logout.php
Description: Destroy session variables and display logout message with link to 
             login screen 
************************************************************************************
-->

<?php   
  session_start();
  session_destroy();
?>

<!DOCTYPE html>

<html>
<head>
    <title>Logged out</title>
    <link rel="icon" type="image/ico" href="images/QF_icon.ico">
</head>

<body>
    <h1>You are now logged out</h1>
    <h2><a href="index.html">Login</a></h2>
</body>
</html>