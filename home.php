<?php
session_start();
?>
<html>
<Title>Homepage</title>
<head>
<link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script src="gen_validatorv4.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>//mindate=0, dateFormat: "dd-mm-yy",
  $(document).ready(function () {
    var d = new Date();
    var monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"];
    today = monthNames[d.getMonth()] + ' ' + d.getDate() + ' ' + d.getFullYear();

    $('#to').attr('disabled', 'disabled');
    $('#from').datepicker({
        defaultDate: "+1d",
        minDate: 0,
        maxDate: "+3M",
        dateFormat: 'dd-mm-yy',
        showOtherMonths: true,
        selectOtherMonths: true,
        required: true,
        showOn: "focus",
        showButtonPanel: true,
        numberOfMonths: 2,
    });

    $('#from').change(function () {
        var from = $('#from').datepicker('getDate');
        var date_diff = Math.ceil((from.getTime() - Date.parse(today)) / 86400000);
        var maxDate_d = date_diff+3+'m';
        date_diff = date_diff + 'd';
        $('#to').val('').removeAttr('disabled').removeClass('hasDatepicker').datepicker({
            dateFormat: 'dd-mm-yy',
            minDate: date_diff,
            maxDate: maxDate_d,
        });
    });

    $('#to').keyup(function () {
        $(this).val('');
        alert('Please select date from Calendar');
    });
    $('#from').keyup(function () {
        $('#from,#to').val('');
        $('#to').attr('disabled', 'disabled');
        alert('Please select date from Calendar');
    });

});

  </script>
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
                        <hr>
                        <form action="searchresultsmodified.php" method="POST" id="search">
                            <br>
                            <div>
                            <div class="mdl-typography--subtitle" for="Source">Journey Date:</div>
                            <input type="text" id="from" name="journey_date" required>
                            </div>
                            <div>
                            <div class="mdl-typography--subtitle" for="Source">Return Date</div>
                            <input type="text" id="to" name="return_date" required>
                            </div>
                            <Br>
                            <br>
                            <div class="mdl-typography--subtitle">
                                Where are you flying to ?
                            </div>
                            
                            <br>
                            <br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="Source" name="Source" required>
      <option value=000><i>Origin City</i></option>
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
      <option value=000><i>Lets Discover Places</i></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkatta">Kolkatta</option>
      <option value="Bangalore">Bangalore</option>
    </select>
    <label class="mdl-textfield__label" for="Destination">Destination</label>
  </div>

                            <br>
                            <br>
                            <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        <div class="mdl-typography--subtitle" style="color:black;font-weight:bolder" name="Search">Search for Flights</div>
                    </button>
                    <br><br>
                    </div>
                    </div>
                    </form>
<script  type="text/javascript">
 var frmvalidator = new Validator("search");
 frmvalidator.addValidation("Source","dontselect=000","Please enter the Departure City");
 frmvalidator.addValidation("Destination","dontselect=000","Please enter the arrival city");
 frmvalidator.addValidation("Destination","neelmnt=Source","Source and Destination cannot be the same");
</script>
                </center>


                <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Tap<span></span>tick</h3>

            <p class="footer-links">
                <a href="home.php">Home</a> ·
                <a href="form.php">Signup</a> .
                <a href="front.php">Login</a> ·
                <a href="Aboutus.php">About Us</a> ·
                <a href="Admin_login.php">Administrators</a>
            </p>

            <p class="footer-company-name">Taptick &copy; 2017</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>VIT UNIVERSITY</span> Chennai, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 67856 73456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:dwijhariket@gmail.com">support@taptick.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span> Providing the best ticket booking experience with the least use of user inputs to deliver a hassle free experience and the best fares on our flights.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/dwij2812/FlightBooking-system"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
                
        </main>
</body>

</html>