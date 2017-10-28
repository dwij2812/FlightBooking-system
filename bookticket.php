<?php
require 'db_conn.php';
session_start();
$Flight_no1= $_SESSION["dep"];
$Flight_no2= $_SESSION["arr"];
$Source = $_SESSION["Source"];
$Destination = $_SESSION["Destination"];
$Fare1= $_SESSION["Fare1"];
$Fare2= $_SESSION["Fare2"];

if (isset($_POST['Confirm and Procceed'])){
    $sql1="INSERT INTO booking VALUES(DEFAULT,'".$Flight_no1."','".$Source."','".$Destination."','".$_SESSION["Customer_id"]."','".$Fare1."')";
    $sql2="INSERT INTO booking VALUES(DEFAULT,'".$Flight_no2."','".$Destination."','".$Source."','".$_SESSION["Customer_id"]."','".$Fare2."')";
    $result1=mysqli_query($conn1,$sql1);
    $result2=mysqli_query($conn2,$sql2);
    if(!$result1 OR !result2)
    {
        echo '<script type="text/javascript">alert("'.mysqli_error($conn1).'");history.go(-1);</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Flight Successfully added");(window.location = "admin.php");</script>';	
    }
}
?>