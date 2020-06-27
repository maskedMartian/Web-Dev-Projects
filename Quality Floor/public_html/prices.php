<!-- 
************************************************************************************
  File: prices.php
  Developer: Travis Bontrager
  Developed: Jan/Feb 2017
  Web address: qualityfloor.biz/prices.php
  Description: Quality Floor Product Pricing page
************************************************************************************
-->

<!DOCTYPE html>
<html>
<head>
    <title>Product Pricing</title>
    <link rel="icon" type="image/ico" href="images/QF_icon.ico">
    <meta name="viewport" content="width=device-width, intial-scale=1">

    <style>
        html {
          margin: 0;
          padding: 0;
        }
        body {
          width: 100%;
          margin: 0;
          padding: 0;
        }
        .wrapper {
          width: 100%;
          margin: 0;
          padding: 1em 0 0 0;
          background-image: url("images/blueback4.jpg");
        }
        .container {
          margin: 0 auto;
          width: 70%;
        }
        .leftHeader {
          width: 50%; 
          float: left;
        }
        .logoWrapper {
          width: 400px;
        }
        .logoWrapper img {
          max-width: 100%;
          margin-top: 0.5em;
        }
        .rightHeader {
          width: 50%;
          float: right;
          text-align: right;
        }
        .headerMenuWrapper {
          width: 360px;
          float: right;
          text-align: center;
        }
        .rightHeader h1 {
          margin-top: 0.1em;
          margin-bottom: 0.1em;
        }
        .headerMenu {
          float: right;
          padding: 0;
          text-align: center;
          background-color: white;
          width: 100%;
        }
        .headerMenu ul {
          margin: 0.5em 0 0.5em -2em;
        }
        .headerMenu ul li {
          display: inline-block;
          margin: 0 0.2em 0 0;
        }
        .headerMenu ul li a {
          font-weight: bold;
          color: #3333ff;
        }
        .clearFloat {
          clear: both;
        }
        .tagLine1 {
          text-align: center;
          color: #3333ff;
        }
        .tagLine1 h2 {
         margin: .5em 0 0 0; 
        }
        .tagLine2 {
          text-align: center;
          color: #3333ff;
        }
        .tagLine2 h2 {
         margin: .5em 0 0 0; 
        }
        .buttons {
          width: 100%;
        }
        .leftButton {
          width: 49%;
          float: left;
          text-align: center;
        }
        .leftB {
          float: right;
          color: white;
          padding: .4em 1em;
          background-color: red;
          border-radius: 20px;
        }
        .leftB h1 {
          margin: 0;
        }
        .rightButton {
          width: 49%;
          float: right;
          text-align: center;
        }
        .rightB {
          float: left;
          color: white;
          padding: .4em 1em;
          background-color: red;
          border-radius: 20px;
        }
        .rightB h1 {
          margin: 0;
        }
        .content {
          width: 98%;
          text-align: center;
          background-color:  #99ddff;
          border: .25em solid #3333ff;
          border-radius: 1em;
          padding-bottom: 1em;
          margin-top: 1.25em;
        }
        .content p {
          text-align: left;
          margin: 0 5em;
        }
        .content p b {
          color: #3333ff;
        }
        .content h1 {
          color: white;
          text-decoration: underline;
        }
        .content ul li {
          display: inline-block; 
        }
        .content ul li a {
          color: red;
        }
        .footerWrapper {
          margin: 0;
          padding: 0;
          height: auto;
        }
        .footerTop {
          margin: 0;
          padding: 0 0 1em 1em;
          background-color: #20DCFF;
        }
        .footerInfo {
          width: 45%;
          float: left;
        }
        .footerInfo p {
          margin: 0;
          padding: 0;
        }
        .footerInfo h2 {
          margin-bottom: .5em;
          color: white;
        }
        .footerInfo h3 {
          margin-bottom: .5em;
          color: white;
        }
        .footerMenu {
          float: right;
        }
        .footerMenu ul {
          margin: 0.5em 1em 0.5em -2em;
        }
        .footerMenu ul li {
          display: inline-block;
          margin: 0 0.2em;
        }
        .footerMenu ul li a {
          text-decoration: none;
          font-weight: bold;
          color: #3333ff;
        }
        .footerBottom { 
          margin: 0 0 0 0;
          padding: 0.1em 0;
          color: white;
          background-color: #00004d;
          text-align: center;
        }
        .footerBottom .container ul {
          margin: 0.5em 0 0.5em -2em;
        }
        .footerBottom .container ul li {
          display: inline-block;
          margin: 0 0.4em;
        }
        .footerBottom .container ul li h3 {
            margin: 0;
        }
        @media screen and (max-width: 1365px) {
          .container {
            width: 85%;
          }
        }
        @media screen and (max-width: 1150px) {
          .container {
           width: 98%;
          }
        }
       @media screen and (max-width: 890px) {
         .tagLine1 {
           display: none;
         }
       }
       @media screen and (min-width: 891px) {
         .tagLine2 {
           display: none;
         } 
       }
       @media screen and (max-width: 768px) {
          .logoWrapper {
            margin: auto;
          }
          .headerMenuWrapper {
            margin: auto;
            float: none;
          }
          .leftHeader {
            width: 100%; 
            float: none;
          }  
          .rightHeader {
            width: 100%; 
            float: none;
            text-align: center;
          }  
          .rightHeader h1 {
            font-size: 150%;
          }
          .headerMenu {
            float: none;
            margin: 0 auto;
          } 
          .tagLine2 {
            display: none;
          }
          .content ul {
            margin-left: -2em;
          }
          .content ul li {
            display: block; 
          }
          .content p {
            margin: 0 .3em;
          }
          .lines {
            display: none;
          }
          .footerInfo {
            width: 100%;
            float: none;
          }
          .footerBottom .container ul li {
            display: block;
            margin: 0 0.4em;
          }
          .spacer {
              display: none;
          }
        }
        @media screen and (max-width: 400px) {
          .logoWrapper {
            width: 300px;
          }
          .headerMenuWrapper {
            width: 315px;
          }
          .footerMenu {
            float: none;
          }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container"> 

<!-- 
************************************************************************************
Header
************************************************************************************
-->

            <div class="headerWrapper">
                <div class="leftHeader">
                    <div class="logoWrapper">

                        <img src="images/QF_logo.jpg" alt="Quality Floor">

                    </div> <!-- /end .logoWrapper -->
                </div> <!-- /end .leftHeader -->

                <div class="rightHeader">
                    <div class="headerMenuWrapper">

                        <h1>Call Us: (260)593-2213</h1>
                        <div class="headerMenu">
                            <ul>
                                <li><a href="index.html">Home</a></li> 
                                <li>||</li> 
                                <li><a href="about.html">About Us</a></li>
                                <li>||</li>
                                <li><a href="map.html">Map</a></li> 
                                <li>||</li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </div> <!-- /end .headerMenu -->

                    </div> <!-- /end .headerMenuWrapper -->
                </div> <!-- /end .rightHeader -->
                
                <div class="clearFloat"></div>
            </div> <!-- /end .headerWrapper -->

<!-- 
************************************************************************************
tagline
************************************************************************************
-->

            <div class="tagLine1">

                <h2>Quality Products and Professional Installations at Discount Prices since 1987</h2>

            </div> <!-- /end .tagLine1 -->

            <div class="tagLine2">

                <h3>Quality Products and Professional Installations at Discount Prices since 1987</h3>

            </div> <!-- /end .tagLine2 --><br>

<!-- 
************************************************************************************
main buttons
************************************************************************************
-->

            <div class="buttons">
                <div class="leftButton">
                    <a href="prices.php"><div class="leftB">
         
                        <h1>Product Pricing</h1>

                    </div></a> <!-- /end .leftB -->
                </div> <!-- leftButton -->

                <div class="rightButton">
                    <a href="estimate.html"><div class="rightB">

                        <h1>Online Estimate</h1>

                    </div></a> <!-- /end .rightB -->
                </div> <!-- /end .rightButton -->

                <div class="clearFloat"></div>
            </div> <!-- /end .buttons --> 

<!-- 
************************************************************************************
content
************************************************************************************
-->

            <div class="content">
                <br>
                <p><b>***Our manufacturers offer us a better price on sheet goods (carpet/resilient/vinyl) when we order an entire roll as opposed to just ordering enough product for a single job. At Quality Floor we order rolls of products that are popular and pass the savings on to you the customer. If we have the product you want in stock, we will give you the "roll price" rather than the "special order price."</b></p>
                <ul>
                    <li><a href="#carpet">Carpet</a></li> 
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#vinyl">Resilient/Vinyl</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#laminate">Laminate</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#tile">Tile</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#wood">Hardwood</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#ceramic">Ceramic</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#stone">Stone</a></li>
                </ul>

<!-- 
************************************************************************************
PHP script

Description: Connects to database to load and insert all current price listings for
             each separate category of flooring type
************************************************************************************
-->

<?php
    
  // define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");

  // define constants to query data from products table
  define("MAKER", "maker");
  define("STYLE", "style");
  define("DESCRIPTION", "description");
  define("PRICE", "price");
  define("UNITS", "units");
  define("INSTOCK", "instock");
  
  //open database conection
  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    
  //check for database connectin error
  if ($conn->connect_error) {
      die ("There was an error - connection failed");
  } 

  // ---------------------------------- Carpet ----------------------------------

  //make query to database
  $sql = "SELECT * FROM products WHERE type='carpet'";
  $result = $conn->query($sql);
  echo '<h1 id="carpet">Carpet</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Vinyl ----------------------------------

  //make query to database
  $sql = "SELECT * FROM products WHERE type='vinyl'";
  $result = $conn->query($sql);
  echo '<h1 id="vinyl">Vinyl</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Laminate ----------------------------------

//make query to database
  $sql = "SELECT * FROM products WHERE type='laminate'";
  $result = $conn->query($sql);
  echo '<h1 id="laminate">Laminate</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Tile ----------------------------------

//make query to database
  $sql = "SELECT * FROM products WHERE type='tile'";
  $result = $conn->query($sql);
  echo '<h1 id="tile">Tile</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Wood ----------------------------------

//make query to database
  $sql = "SELECT * FROM products WHERE type='wood'";
  $result = $conn->query($sql);
  echo '<h1 id="wood">Hardwood</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Ceramic ----------------------------------

//make query to database
  $sql = "SELECT * FROM products WHERE type='ceramic'";
  $result = $conn->query($sql);
  echo '<h1 id="ceramic">Ceramic</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  echo '<span class="spacer">
            <ul>
              <li><a href="#carpet">Carpet</a></li> 
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#vinyl">Resilient/Vinyl</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#laminate">Laminate</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#tile">Tile</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#wood">Hardwood</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#ceramic">Ceramic</a></li>
                  <span class="lines">&nbsp;||&nbsp;</span>
              <li><a href="#stone">Stone</a></li>
            </ul> <br>
        </span>';

  // ---------------------------------- Stone ----------------------------------

//make query to database
  $sql = "SELECT * FROM products WHERE type='Stone'";
  $result = $conn->query($sql);
  echo '<h1 id="stone">Stone</h1>';

  //if database table not empty 
  if ($result->num_rows > 0) {
    
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<p><b>Manufacturer:</b> " . $row[MAKER] . "</p>" . 
           "<p><b>Style:</b> " . $row[STYLE] . "</p>" . 
           "<p><b>Description:</b> " . $row[DESCRIPTION] . "</p>" . 
           "<p><b>Price:</b> " . $row[PRICE] . $row[UNITS] . "</p>" . 
           "<p><b>In stock:</b> " . $row[INSTOCK] . '</p><br><span class="spacer"><br></span>';
    }
    echo '<span class="spacer"><br></span>';
  } else {
    echo "<p>No pricing at this time</p>";
  }

  //close database connection 
  $conn->close();
?>

<!-- 
************************************************************************************
END - PHP script
************************************************************************************
-->
         
                <ul>
                    <li><a href="#carpet">Carpet</a></li> 
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#vinyl">Resilient/Vinyl</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#laminate">Laminate</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#tile">Tile</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#wood">Hardwood</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#ceramic">Ceramic</a></li>
                        <span class="lines">&nbsp;||&nbsp;</span>
                    <li><a href="#stone">Stone</a></li>
                </ul> 
                 <p><b>***Our manufacturers offer us a better price on sheet goods (carpet/resilient/vinyl) when we order an entire roll as opposed to just ordering enough product for a single job. At Quality Floor we order rolls of products that are popular and pass the savings on to you the customer. If we have the product you want in stock, we will give you the "roll price" rather than the "special order price."</b></p>   
            </div> <!-- /end .content --> <br><br><br>
        </div> <!-- /end .container -->
         
        <div class="spacer">
            <br>
        </div> <!-- /end .spacer -->

<!-- 
************************************************************************************
footer
************************************************************************************
-->

        <div class="footerWrapper">
            <div class="footerTop">
                <div class="container">
                    <div class="footerInfo">

                        <h2>Quality Floor</h2>
                        <p>3665 S 600 W</p>
                        <p>Topeka, In 46571</p>
                        <p>Phone: (260) 593-2213</p>
                        <p>Email: qualityf@ligtel.com</p>
                        <h3>Store hours:</h3>
                        <table>
                            <tr>
                                <td>Monday-Friday:</td> <td>8:00 am ~ 5:00 pm<td>
                            </tr><tr> 
                                <td>Saturday:</td> <td>9:00 am ~ 2:00 pm<td>
                            </tr><tr>
                                <td>Sunday:</td> <td>Closed<td>
                            </tr>
                        </table>

                    </div> <!-- /end .footerInfo -->

                    <div class="footerMenu">
             
                        <br><br>
                        <div class="spacer">
                            <br><br><br><br> <br><br><br><br> <br><br>
                        </div> <!-- /end .spacer -->
                        
                        <ul>
                          <li><p><a href="index.html">Home</a></p></li> 
                          <li>||</li> 
                          <li><a href="about.html">About Us</a></li>
                          <li>||</li>
                          <li><a href="map.html">Map</a></li> 
                          <li>||</li>
                          <li><a href="faq.html">FAQ</a></li>
                        </ul>                   

                    </div> <!-- /end .footerMenu -->

                    <div class="clearFloat"></div>
                </div> <!-- /end .container -->
            </div> <!-- /end .footerTop -->

            <div class="footerBottom">
                <div class="container">

                    <ul>
                        <li>Products by:&nbsp;</li>
                        <li><h3>Armstrong</h3></li>
                        <span class="spacer"><li><h3>&#176;</h3></li></span>
                        <li><h3>Congoleum</h3></li>
                        <span class="spacer"><li><h3>&#176;</h3></li></span>
                        <li><h3>Mannington</h3></li>
                        <span class="spacer"><li><h3>&#176;</h3></li></span>
                        <li><h3>Mohawk</h3></li>                        
                        <span class="spacer"><li><h3>&#176;</h3></li></span>
                        <li><h3>Shaw</h3></li>                        
                        <li>&nbsp;...and many more</li>
                    </ul>

                </div> <!-- /end .container -->
            </div> <!-- /end .footerBottom --> 
        </div> <!-- /end .footerWrapper -->
    </div> <!-- /end .wrapper -->
</body>
</html>