<?php
require 'db_conn.php';
?>

<html>

<head>
    <title>Cancel Flight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>


<body background="airplane.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Cancel a Flight</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="">About</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="admin.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Cancel a Flight</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="">About</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="admin.php">Administrators</a>
            </nav>
        </div>
        <br><br>
            <div class="page-content"><center>
                <br><br><br>
                <center>
        <br><br><br><br>
        <div class="mdl-card mdl-shadow--16dp" style="width:800px">
        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search Results</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
      <th>Flight No.</th>
      <th>Origin</th>
      <th>Destination</th>
      <th>Departure</th>
      <th>Arrival</th>
      <th>Fare</th>
      <th>Select Flight</th>
    </tr>
  </thead>
  <tbody>
        <form action='cancel_flight_success.php' method="POST">
            <?php
                $sql = "SELECT * from flight";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['F_no'] . "</b></td>";
                    echo "<td>" . $row['Origin'] . "</td>";
                    echo "<td>" . $row['Destination'] . "</td>";
                    echo "<td>" . $row['Dep'] . "</td>";
                    echo "<td>" . $row['Arr'] . "</td>";
                    echo "<td>" . $row['Fare'] . "</td>";
                    echo "<td><label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"".$row['F_no']."\">
                    <input type=\"radio\" id=\"".$row['F_no']."\" class=\"mdl-radio__button\" name=\"cancel_flight\" value=\"".$row['F_no']."\">
                    </label></td>";
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<input type="Submit" name="cancel" value="Cancel the selected Flight" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                
                    </button>
                    <br><br>
                    </div>
                    </div>
                    <br><br><br>
                    </div>
        </form>
        </div>
        </center>

            </div>
            
        </main>
    </body>
</html>
