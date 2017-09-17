<Html>

<Head>
    <Title>Flight Booking System</Title>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</Head>

<Body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Login</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="form.php">Signup</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="admin.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Login</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="admin.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="container">
                    <div class="header">
                        <Img Src="logo.jpg" align="left" height="19.5%" width="15%" ALT="Flight Logo">

                        <br>
                        <div class="mdl-typography--display-1">VIT Airlines</div>
                        <div class="mdl-typography--title">The Way To Fly</div><br><br>
                    </div>
                    <div class="section">
                        <Img Src="airplane.jpg" height="70%" ALT="Plane" align="left">
                    </div>
                    <br>
                    <br><br>
                    <div class="login">
                    <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff"><center>Log In</center></div>
                        <br>
                        </div><br><br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Login ID">
                            <label class="mdl-textfield__label" for="Login ID">Login Id</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Password">
                            <label class="mdl-textfield__label" for="Password">Password</label>
                        </div><br><br>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Login
                    </button>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Forgot Password
        </button>
                        <br><br>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
       Sign Up
        </button>

                    </div>
                    <br><br><br><br><br><br><br><br>

                    <div class="footer">
                        <font face="Brooklyn" size="3" color="red">POPULAR TOURISM PLACES
                            <BR>
                            <font face="monotype corsiva" size="3" color="green">
                                [ Mumbai [ Delhi [ Chennai [ Banglore ] Kolkata ] Banaras ] Ahemdabad ] Chandigarh ] Hyderabad ] Kochi ] Goa ]</font><br>|About Us|
                    </div>
                </div>
            </div>
        </main>
</Body>

</Html>