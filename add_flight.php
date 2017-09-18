<html>

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>


<body background="airplane.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Add a new Flight</span>
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
            <span class="mdl-layout-title">Add a new flight</span>
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
            <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="width:400px">
                        <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                            <h3 style="color:white">
                                Add a New Flight
                            </h3>
                        </div>
                <br><br>
                <form action="searchresultsmodified.php" method="POST">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="First Name" required>
                                <label class="mdl-textfield__label" for="First Name">Flight No.</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="Source" name="Source" required>
      <option></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkatta">Kolkatta</option>
      <option value="Bangalore">Bangalore</option>
    </select>
    <label class="mdl-textfield__label" for="Source">Source</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="Destination" name="Destination" required>
      <option></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkatta">Kolkatta</option>
      <option value="Bangalore">Bangalore</option>
    </select>
    <label class="mdl-textfield__label" for="Destination">Destination</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="First Name" required>
                                <label class="mdl-textfield__label" for="First Name">Departure</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
                                <input class="mdl-textfield__input" type="text" id="First Name" required>
                                <label class="mdl-textfield__label" for="First Name">Arrival</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
                                <input class="mdl-textfield__input" type="text" id="First Name" required>
                                <label class="mdl-textfield__label" for="First Name">Fare</label>
                            </div>
                            <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            <div class="mdl-typography--subtitle" style="color:black;font-weight:bolder" name="Search">Add a new flight</div>
        </button><br><br></div>
        
            
            </form>
            </div>
            </center>
            </div>
            </main>
            </body>
            </html>