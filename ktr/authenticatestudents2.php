<?php
session_start();
//ob_start();
include "assets/include/conn.php";

if(isset($_POST['admnumber'])){
		$admnumber = $_POST['admnumber'];
	}
if(isset($_POST['firstname'])){
		$firstname = $_POST['firstname'];
	}
if(isset($_POST['surname'])){
		$surname = $_POST['surname'];
	}
$sql=mysqli_query($dblink,"SELECT admnumber FROM students WHERE admnumber=trim('$admnumber') AND firstname=trim('$firstname')AND surname=trim('$surname')") or die (mysqli_error());
$numrows=mysqli_num_rows($sql);
if($numrows == 0){
	header('Location: student-portal.php?err=1');
	}
else {
	$row=mysqli_fetch_array($sql);
	//create session variables to be passed
		
     	 $_SESSION['admnumber']= $row['admnumber'];
		 $_SESSION['firstname']= $row['firstname'];
		 $_SESSION['surname']= $row['surname'];
		 header('location:student-dashboard.php');
	 }
	 
	 mysqli_close($dblink);
?>