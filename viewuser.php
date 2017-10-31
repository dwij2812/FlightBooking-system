<?php
require 'db_conn.php';
session_start();
?>

<html>

<head>
    <title>All bookings</title>
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
                <span class="mdl-layout-title">All Bookings</span>
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
            <span class="mdl-layout-title">All Bookings</span>
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
                        <div class="mdl-typography--title" style="color:#ffffff">All bookings</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
      <th>Ticket Id.</th>
      <th>Flight No.</th>
      <th>Origin</th>
      <th>Destination</th>
      <th>Cid</th>
      <th>Date </th>      
      <th>Fare</th>
    </tr>
  </thead>
  <tbody>
  <center>
        
            <?php
                $sql = "SELECT * from booking order by TicketID";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['TicketID'] . "</b></td>";
                    echo "<td>" . $row['F_no'] . "</td>";
                    echo "<td>" . $row['Source'] . "</td>";
                    echo "<td>" . $row['Destination'] . "</td>";
                    echo "<td>" . $row['Cid'] . "</td>";
   		    echo "<td>" . $row['Date'] . "</td>";
                    echo "<td>" . $row['Fare'] . "</td>";
                    echo "</tr>";
                }
	        ?>
            </center>
            </tbody>
</table>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="admin.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>Go Back</b></div></a>
                        <br>
                        </div>
                
                    </button>
                    <br><br>
                    </div>
                    </div>
                    <br><br><br>
                    </div>
        </div>
        </center>

            </div>
        </main>
    </body>
</html>