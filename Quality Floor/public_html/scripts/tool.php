<!--
************************************************************************************
File: tool.php
Developer: Travis Bontrager
Developed: Jan/Feb 2017
Web address: qualityfloor.biz/scripts/tool.php
Description: Quality Floor price listing editor tool
************************************************************************************
-->

<?php
	session_start();
	if (!isset($_SESSION["myusername"]))
		header("location:/tool/fail.html");
?>

<!DOCTYPE HTML>
<html>

  <head>
    <title>Admin Tools</title>
    <link rel="icon" type="image/ico" href="images/QF_icon.ico">

    <style>
      h1 {
        color:blue;
        text-align: center;
      }
      h2 {
        text-align: right;
      }
      h2 a {
        color: red;
        margin-right: 20px;
      }
      h3 {
        color:blue;
        border: black solid 1px;
      }
      .listing {
        margin: 0 auto;
        //padding: 10px;
      }
      .listing table{
        margin: 0 auto;
      }
      .listing table tr th {
        padding: 0 10px 5px 10px;
        text-decoration: underline;
      }
      .listing table tr td {
        padding: 5px 10px;
      }
      .tools div {
        width: 50%;
        margin: 0 auto;
        text-align: center;
      }
      
    </style>
  </head>

  <body>
    <div class="container">
      <h2><a href="/Floor/tool/logout.php">Logout</a></h2>
      <h1>In-Stock Product Listing Editor</h1>
      <hr>
      <div class="listing">
<!--
************************************************************************************
PHP script

Description: Connects to database to load and insert all current price listings for
             each separate category of flooring type
************************************************************************************
-->    

<?php
    
  //define constants for database connection
  define("HOSTNAME", "localhost");
  define("USERNAME", "admin");
  define("PASSWORD", "zyx123$$00qt");
  define("DATABASE", "floordata");

  // define constants to query data from products table
  define("ID", "id");
  define("TYPE", "type");
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

  //make query to database
  $sql = "SELECT * FROM products";
  $result = $conn->query($sql);

  //if database table not empty 
  if ($result->num_rows > 0) {
    echo "<table>
            <tr> 
              <th>ID</th> 
              <th>Type</th> 
              <th>Manufacturer</th> 
              <th>Style</th> 
              <th>Description</th> 
              <th>Price</th>
              <th>InStock</th>
            </tr>";
    // output data from each row in table
    while ($row = $result->fetch_assoc()) {
      echo "<tr> 
              <td>" . $row[ID] . "</td> 
              <td>" . $row[TYPE] . "</td> 
              <td>" . $row[MAKER] . "</td> 
              <td>" . $row[STYLE] . "</td> 
              <td>" . $row[DESCRIPTION] . "</td> 
              <td>" . $row[PRICE] . $row[UNITS] . "</td> 
              <td>" . $row[INSTOCK] . "</td>
            </tr>";
    }
    echo "</table>";
  } else {
    echo "<h2>No product listings</h2>";
  }

  //close database connection 
  $conn->close();
?>

      </div> <!-- /end .listing -->

      <hr>

      <div class="tools">

<!-- 
************************************************************************************
change in-stock status form
************************************************************************************
-->

        <div class="stock">
          <h3>Change in stock status</h3>
          <center>
            <form action="change_stock.php" method="post">
              <table>
                <tr>
                  <th>ID</th>
                  <th>:</th>
                  <td><input type="number" name="idnum" autocomplete="off"></td>
                </tr>
                <tr>
                  <th>In stock</th>
                  <th>:</th>
                  <td><select name="instock" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="Change"> </td>
                </tr>
              </table> 
            </form>
          </center>
        </div> <!-- /end .stock -->

<!-- 
************************************************************************************
change price form
************************************************************************************
-->
        
        <div class="price">
          <h3>Change price</h3>
          <center>
            <form action="change_price.php" method="post">
              <table>
                <tr>
                  <th>ID</th>
                  <th>:</th>
                  <td><input type="number" name="idnum" autocomplete="off"></td> 
                </tr>
                <tr>
                  <th>New price</th>
                  <th>:</th>
                  <td><input type="number" step="0.01" name="price" autocomplete="off"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="Change"> </td>
                </tr>
              </table> 
            </form>
          </center>
        </div> <!-- /end .change -->

<!-- 
************************************************************************************
delete listing form
************************************************************************************
-->
        
        <div class="delete">
          <h3>Delete product listing</h3>
          <center>
            <form action="del_product.php" method="post">
              <table>
                <tr>
                  <th>ID</th>
                  <th>:</th>
                  <td><input type="number" name="idnum" autocomplete="off"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="Delete"></td>
                </tr>
              </table>  
            </form> 
          </center>
        </div> <!-- /end .delete -->

<!-- 
************************************************************************************
add listing form
************************************************************************************
-->

        <div class ="add">
          <h3>Add product listing</h3>
          <center>
            <form action="add_product.php" method="post">
              <table>
                <tr>
                  <th>Type</th>
                  <th>:</th> 
                  <td><select name="type" required>
                        <option value="Carpet">Carpet</option>
                        <option value="Vinyl">Vinyl</option>
                        <option value="Laminate">Laminate</option>
                        <option value="Tile">Tile</option>
                        <option value="Wood">Wood</option>
                        <option value="Ceramic">Ceramic</option>
                        <option value="Stone">Stone</option>
                      </select></td>
                </tr>
                </tr>
                <tr>  
                  <th>Manufacturer</th>
                  <th>:</th>
                  <td><input type="text" name="maker" autocomplete="off"><td> 
                </tr>
                <tr>
                  <th>Style</th>
                  <th>:</th> 
                  <td><input type="text" name="style" autocomplete="off"><td>
                </tr>
                <tr>
                  <th>Description</th>
                  <th>:</th> 
                  <td><textarea rows="4" cols="25" name="description" autocomplete="off"></textarea></td>
                </tr>
                <tr>
                  <th>Price</th> 
                  <th>:</th> 
                  <td><input type="number" step="0.01" name="price" autocomplete="off"></td>
                </tr>
                <tr>
                  <th>Units</th>
                  <th>:</th>
                  <td><select name="units" required>
                        <option value="sy">square yards</option>
                        <option value="sf">square feet</option>
                      </select></td>
                </tr>
                </tr>
                <tr>
                  <th>In Stock</th>
                  <th>:</th>
                  <td><select name="instock" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select></td>
                </tr>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="Add"></td>
                </tr>
              </table> 
            </form> 
          </center>
        </div> <!-- /end .add -->

<!-- 
************************************************************************************
change password form
************************************************************************************
-->

        <div class="password">
          <h3>Change password</h3>
          <center>
            <form action="change_pass.php" method="post">
              <table>
                <tr>
                  <th>New Password</th>
                  <th>:</th>
                  <td><input type="text" name="pass" autocomplete="off"></td>
                </tr>
                  <td></td>
                  <td></td>
                  <td><input type="submit" value="Change"> </td>
                </tr>
              </table> 
            </form>
          </center>
        </div> <!-- /end .password -->

      </div> <!-- /end .tools -->
      <h2><a href="/tool/logout.php">Logout</a></h2>
    </div> <!-- /end .container -->
  </body>
</html>