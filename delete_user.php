<?php
require 'db_conn.php';
?>

<html>

<head>
    <title>Delete user</title>
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
                <span class="mdl-layout-title">Delete a user</span>
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
            <span class="mdl-layout-title">Remove a user</span>
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
        <div class="mdl-card mdl-shadow--16dp" style="width:750px"><center>
        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search Results</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
    
<th>Customer ID</th>
      <th>First Name</th>
      <th>Email-ID</th>
      <th>Select user</th>  
    </tr>
  </thead>
  <tbody>
        <form action='user_deleted.php' method="POST">
            <?php
                $sql = "SELECT Customer_id,First_name,email_id from customerlogin order by Customer_id";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['Customer_id'] . "</b></td>";
                    echo "<td>" . $row['First_name'] . "</td>";
                    echo "<td>" . $row['email_id'] . "</td>";
                    echo "<td><label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"".$row['Customer_id']."\">
                    <input type=\"radio\" id=\"".$row['Customer_id']."\" class=\"mdl-radio__button\" name=\"cancel_flight\" value=\"".$row['Customer_id']."\">
                    </label></td>";
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table></center>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<input type="Submit" name="cancel" value="Delete the selected user" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                
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