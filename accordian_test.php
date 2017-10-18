<html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="Stylesheet" href="accordian.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>

<body background="airplane.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Home</span>
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
            <span class="mdl-layout-title">Home</span>
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
                <!-- Your content goes here -->

                <!--ul>
                    <li><a href="">Home</a></li>
                    <li><a href="front.html">Login</a></li>
                    <li><a href="form.html">Sign Up</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul-->
                <div align="right">
                <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="text-align:center;width:350px;padding:1em 0;height:50px" >  <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Asia%2FKolkata" width="100%" height="150" frameborder="0" seamless></iframe></div>
                
                </div><br><br>
                <center>
                    <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search for Flights:</div>
                        <br>
                        </div>
                        <button id="show-modal-example" type="button" class="mdl-button mdl-button--raised">Show Modal</button>
                        
                        
                        <p>
                          Remember that the Dialog component requires the <a href="https://github.com/GoogleChrome/dialog-polyfill">Dialog polyfill</a> in order to function.
                          It takes advantage of the native dialog element to provide the most robust experience possible.
                        </p>
                        
                        <dialog class="mdl-dialog" id="modal-example">
                            <div class="mdl-dialog__content">
                                <p>
                                    This is an example of the MDL Dialog being used as a modal.
                                    It is using the full width action design intended for use with buttons
                                    that do not fit within the specified <a href="https://www.google.com/design/spec/components/dialogs.html#dialogs-specs">length metrics</a>.
                                </p>
                            </div>
                            <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
                                <button type="button" class="mdl-button">Close</button>
                                <button type="button" class="mdl-button" disabled>Inactive action</button>
                            </div>
                        </dialog>
                        
                </center>
                
        </main>
</body>

</html>