<?php
require 'db_conn.php';
session_start();
$Flight_no1= $_SESSION["dep"];
$Flight_no2= $_SESSION["arr"];
$Source = $_SESSION["Source"];
$Destination = $_SESSION["Destination"];
$Fare1= $_SESSION["Fare1"];
$Fare2= $_SESSION["Fare2"];

if (isset($_POST['pay'])){
    $sql1="INSERT INTO booking VALUES(DEFAULT,'".$Flight_no1."','".$Source."','".$Destination."','".$_SESSION["Customer_id"]."','".$_SESSION["jd"]."','".$Fare1."')";
    $sql2="INSERT INTO booking VALUES(DEFAULT,'".$Flight_no2."','".$Destination."','".$Source."','".$_SESSION["Customer_id"]."','".$_SESSION["rd"]."','".$Fare2."')";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);
    if(!$result1 OR !$result2)
    {
        echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Your Tickets Have been booked!");</script>';	
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <span class="mdl-layout-title">Confirmation</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="form.php">Signup</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Confirmation</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
        <center>
        <br><br><br><br>
        <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search for Flights:</div>
                        <br>
                        </div>
        <br><br><br>
        <Img Src="confirm.png" align="center" height="25%" ALT="confirmation tick">
        <br><br><br>
        <div class="mdl-typography--title">Your Flight has been booked </div>
        <br><br>
        <div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="home.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>Home</b></div></a>
                        <br>
                        </div>
                
                    </button>
                    <br><br>
                    </div>
                    </div>
        </div>


        </div>
        
        </main>
        </body>
        </html>