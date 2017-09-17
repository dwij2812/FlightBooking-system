<html>

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>


<body background="airplane.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Signup</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="">About</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Signup</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="">About</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <center>
                    <form action="#">
                        <br><br>
                        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                            <br>
                            <b> <div class="mdl-typography--title">Name</div></b><br>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="First Name">
                                <label class="mdl-textfield__label" for="First Name">First Name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="Last Name">
                                <label class="mdl-textfield__label" for="Last Name">Last Name</label>
                            </div>
                        </div>
                        <br><b>
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <br>
                                <div class="mdl-typography--title">DATE OF BIRTH:</div></b><br>
                        <input type="date"><br>
                        <br>
                        <br>

                        <br><b><div class="mdl-typography--title">GENDER:</div></b>
                        <br>
                        <div>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                <span class="mdl-radio__label">Male</span>
        </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                <span class="mdl-radio__label">Female</span>
        </label>
                            <br><br><br>
                        </div>
            </div>
            <br><br>
            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Nationality">
                    <label class="mdl-textfield__label" for="Nationality">Nationality</label>
                </div>
                <center>
                    <br><b><div class="mdl-typography--title">OCCUPATION:</div></b><br>
                    <span class="mdl-radio__label">Student</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option1">
                <input type="radio" id="option1" class="mdl-radio__button" name="options" value="1">
                
        </label><br>
                <span class="mdl-radio__label">Teacher</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option2">
                <input type="radio" id="option2" class="mdl-radio__button" name="options" value="2">
                
        </label><br>
                <span class="mdl-radio__label">Employee</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option3">
                <input type="radio" id="option3" class="mdl-radio__button" name="options" value="3">
                
        </label><br>
                <span class="mdl-radio__label">Senior Citizen</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option4">
                <input type="radio" id="option4" class="mdl-radio__button" name="options" value="4">
                
        </label><br>
                <span class="mdl-radio__label">Armed forces</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option5">
                <input type="radio" id="option5" class="mdl-radio__button" name="options" value="5">
                
        </label><br><br><br>
                    <center>
            </div>
            <br><br>
            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <br>
                <b> <div class="mdl-typography--title">Address: </div></b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Address_1">
                    <label class="mdl-textfield__label" for="Address_1">Address Line 1</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Address_2">
                    <label class="mdl-textfield__label" for="Address_2">Address Line 2</label>
                </div>
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="City">
                    <label class="mdl-textfield__label" for="City">City</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="State">
                    <label class="mdl-textfield__label" for="State">State</label>
                </div>
                <br><br><br>
            </div>
            <br><br>
            <div class="demo-card-wide mdl-card mdl-shadow--2dp">

                <b> <br><div class="mdl-typography--title">Mobile No </div></b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Mobile No">
                    <label class="mdl-textfield__label" for="Mobile No">Mobile No</label>
                </div>
                <b> <br><div class="mdl-typography--title">Password</div> </b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Password">
                    <label class="mdl-textfield__label" for="Password">Password</label>
                </div>
                <b> <br><div class="mdl-typography--title">Re-Enter Your Password </div></b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="r_password">
                    <label class="mdl-textfield__label" for="r_password">Password</label>
                </div>
                <center>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Submit
        </button>
                </center>
                <br><br>
            </div>
    </div>
    </Form>
    </Center>

    </div>
    </main>
    </div>



</body>

</html>