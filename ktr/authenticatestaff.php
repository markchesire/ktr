<?php
session_start();
//ob_start();
include "assets/include/conn.php";
if(isset($_POST['staffno'])){
		$staffno = $_POST['staffno'];
	}
if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
if(isset($_POST['password'])){
		$password = $_POST['password'];
	}
$sql=mysqli_query($dblink,"SELECT * FROM staffs WHERE username=trim('$username') AND password=trim('$password')")  or die (mysqli_error());
$numrows=mysqli_num_rows($sql);
if($numrows == 0){
	header('Location: staff-portal.php?err=1');
	}
else {
	$row=mysqli_fetch_array($sql);
	//create session variables to be passed
		 $_SESSION['staffno']= $row['staffno'];
     	 $_SESSION['username']= $row['username'];
		 $_SESSION['password']= $row['password'];
		 header('location:staff-dashboard.php');
	 }
	 mysqli_close($dblink);
	 
?>