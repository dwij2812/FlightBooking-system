<html>

<head>
    <title>Administrator </title>
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
                <span class="mdl-layout-title">Administrator</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="">About</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Administrator</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="">About</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <br><br>
            <div class="page-content"><center>
            <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="width:400px">
                        <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                            <h3 style="color:white">
                                Flights
                            </h3>
                        </div>
                        <div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="add_flight.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>ADD FLIGHT</b></div></a>
                        <br>
                        </div>
                        <div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="cancel_flight.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>CANCEL FLIGHT</b></div></a>
                        <br>
                        </div>
                    <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                            <h3 style="color:white">
                                Users
                            </h3>
                        </div>
                        <div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="viewuser.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>VIEW USER BOOKINGS</b></div></a>
                        <br>
                        </div>
                        <div class="mdl-shadow--16dp" style="background-color:#f4b342"><br>
                        <a class="mdl-navigation__link" href="delete_user.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px"><b>DELETE USERS</b></div></a>
                        <br>
                        </div>
                    
            </div>
            </div></center>
            <br><br><br>
        </div>
        </main>
    </body>
</html>