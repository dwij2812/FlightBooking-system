<html>

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script src="gen_validatorv4.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#DOB" ).datepicker({maxDate: "0",defaultDate: "-18y",changeMonth: true,
            changeYear: true,showButtonPanel: true,required: true,dateFormat: 'dd-mm-yy',yearRange: "1900:+nn",showOn: "focus",}).on('changeDate', function (e) {
                $("#DOB").datepicker('hide');
});;
  } );

  </script>
  
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
                    <a class="mdl-navigation__link" href="Aboutus.php">About</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="admin.php">Administrators</a>
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
                <a class="mdl-navigation__link" href="admin.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <center>
                    <form action="signedup.php" method="POST" id="signin">
<br><br>
                        <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                            <b> <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Name</div>
                        <br><br>
                        </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="First-Name" name="First-Name">
                                <label class="mdl-textfield__label" for="First-Name">First Name</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="Last-Name" name="Last-Name">
                                <label class="mdl-textfield__label" for="Last-Name">Last Name</label>
                            </div>    
                                <br>
                                <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Email Id</div>
                        <br><br>
                        </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="Email" name="Email">
                                <label class="mdl-textfield__label" for="Email">Email Id</label>
                            </div>
                            <br>
                            
                                <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Date Of Birth</div>
                        <br>
                        </div><br><br>
                        <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" id="DOB" onchange="checkDate()" name="DOB" required><br>
                        <label class="mdl-textfield__label" for="DOB">Date Of Birth</label>
                            </div>
                        <br>
                        <br>

                        <br><div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Gender</div>
                        <br>
                        </div><br><br>
                        <br>
                        <div>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="Male" required>
                <span class="mdl-radio__label">Male</span>
        </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="Female">
                <span class="mdl-radio__label">Female</span>
        </label>
                            <br><br><br>
                        </div>
            <br><br>
            <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Nationality</div>
                        <br>
                        </div><br><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Nationality" name="Nationality" required>
                    <label class="mdl-textfield__label" for="Nationality">Nationality</label>
                </div>
                <center>
                    <br><div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Occupation</div>
                        <br><br>
                        </div><br>
                    <span class="mdl-radio__label">Student</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Student">
                <input type="radio" id="Student" class="mdl-radio__button" name="occupation" value="Student" required>
                
        </label><br>
                <span class="mdl-radio__label">Teacher</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Teacher">
                <input type="radio" id="Teacher" class="mdl-radio__button" name="occupation" value="Teacher">
                
        </label><br>
                <span class="mdl-radio__label">Employee</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Employee">
                <input type="radio" id="Employee" class="mdl-radio__button" name="occupation" value="Employee">
                
        </label><br>
                <span class="mdl-radio__label">Senior Citizen</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Senior_Citizen">
                <input type="radio" id="Senior_Citizen" class="mdl-radio__button" name="occupation" value="Senior Citizen">
                
        </label><br>
                <span class="mdl-radio__label">Armed forces</span>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Armed_forces">
                <input type="radio" id="Armed_forces" class="mdl-radio__button" name="occupation" value="Armed forces">
                
        </label><br><br><br>
                    <center>
            
            <br><br>
                
                <b> <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Address</div>
                        <br>
                        </div></b><br><br><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Address" name="Address" required>
                    <label class="mdl-textfield__label" for="Address">Address</label>
                </div>
               
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="City" name="City" required>
                    <label class="mdl-textfield__label" for="City">City</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="State" name="State" required>
                    <label class="mdl-textfield__label" for="State">State</label>
                </div>
                <br>
            <br><br>

                <b> <br><div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Mobile No</div>
                        <br>
                        </div></b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="Mobile-No" name="Mobile-No">
                    <label class="mdl-textfield__label" for="Mobile-No">Mobile No</label>
                </div>
                <b> <br><div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Password</div>
                        <br>
                        </div> </b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="Password" name="Password">
                    <label class="mdl-textfield__label" for="Password">Password</label>
                </div>
                <b> <br><div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Re enter your Password</div>
                        <br>
                        </div></b><br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="r_password" name="r_password">
                    <label class="mdl-textfield__label" for="r_password">Password</label>
                </div>
                <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                <input type="Submit" name="signup" value="Sign Up" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            
        </button><br><br>
        </div>
            </div>
    </div>
    </Form>
    <script  type="text/javascript">
 var frmvalidator = new Validator("signin");
 frmvalidator.addValidation("First-Name","req","Please enter your First Name");
 frmvalidator.addValidation("First-Name","alphabetic","First Name can be in alphabetical form only");
 frmvalidator.addValidation("First-Name","maxlen=20","Max length for First Name is 20");
 
 frmvalidator.addValidation("Last-Name","req","Please enter your Last Name");
 frmvalidator.addValidation("Last-Name","alphabetic","Last Name can be in alphabetical form only");
 frmvalidator.addValidation("Last-Name","maxlen=20");
 
 frmvalidator.addValidation("Email","maxlen=50");
 frmvalidator.addValidation("Email","req");
 frmvalidator.addValidation("Email","email");
 
 frmvalidator.addValidation("Mobile-No","minlen=10","Please Enter a valid phone number");
 frmvalidator.addValidation("Mobile-No","maxlen=10","Please Enter a valid phone number");
 frmvalidator.addValidation("Mobile-No","req","Entering your mobile no is compulsory");
 frmvalidator.addValidation("Mobile-No","numeric","Please Enter a valid phone number");
 
 frmvalidator.addValidation("Address","maxlen=1000");

 frmvalidator.addValidation("r_password","req","Please confirm the password you want to set!");
 frmvalidator.addValidation("Password","req","Please Provide us with a Password to secure your account");

 frmvalidator.addValidation("r_password","eqelmnt=Password","The Re-entered password is not same as the password");

</script>
    </Center>

    </div>
    </main>
    </div>



</body>

</html>