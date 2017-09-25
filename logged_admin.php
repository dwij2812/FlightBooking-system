<?php
	require 'db_conn.php';
	$login = $_POST['Loginid'];
	$pass = $_POST['Password'];
	if (isset($_POST['Login']))
?>
<html>
<head>
<style>
div{
	box-shadow:0 4px 8px 0 rgb(0,0,255);
	transition:0.3s;
	width:45%;
}
body{
	background-image:url(travel.jpg);
	background-size:cover;
}

</style>
<title>User Info</title>
</head>
<body>
	<?php
	$sql="SELECT * FROM customerlogin where email_id='".$login."' and password='".$pass."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo '<script type="text/javascript">alert("You have successfully Logged in")</script>';
		$row=mysqli_fetch_assoc($result);
		echo '<br><br><br><br><br><br><br><font color="Black"size="30"><center><div>Customer ID: '.$row['Customer_id'].'<br>First name: '.$row['First_name'].'<br>Last name: '.$row['Last_name'].'<br>Mobile Number: '.$row['Mobile_no'].'</div></center></font>';
		echo '<p style="position:fixed;bottom:10%;width:100%;text-align:center;"><a href="home.php"><input type="button" value="Log Out"></a></p>';

		
    }
   else
    {   
		echo '<script type="text/javascript">alert("Invalid Email-Id or Password");history.go(-1);</script>';
	}
	
	?>
</body>
</html>