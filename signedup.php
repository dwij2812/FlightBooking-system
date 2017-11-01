<?php
	require 'db_conn.php';
    $first_name = $_POST['First-Name'];
    $last_name = $_POST['Last-Name'];
    $email = $_POST['Email'];
    $dob = $_POST['DOB'];
    $gender = $_POST['options'];
    $nationality  = $_POST['Nationality'];
    $occupation = $_POST['occupation'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
	$mob = $_POST['Mobile-No'];
    $password = $_POST['Password'];
    $r_password = $_POST['r_password'];
	if (isset($_POST['signup']))
	{
		if ($password==$r_password){
		$sql="INSERT INTO customerlogin VALUES(DEFAULT,'".$first_name."','".$last_name."','".$email."','".$dob."','".$gender."','".$nationality."','".$occupation."','".$address."','".$city."','".$state."','".$mob."','".$password."')";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
        }
        else
        {
			echo '<script type="text/javascript">alert("You have successfully Signed Up");(window.location = front.php");</script>';	
        }
        }
        else{
            echo '<script type="text/javascript">alert("Password Does not Match");history.go(-1);</script>';
        }
		
		
		
    }
?>