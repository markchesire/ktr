<?php
session_start();
//ob_start();
include "admin/assets/include/conn.php";

if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
if (isset($_POST['password'])) {
	$password = $_POST['password'];
	}
$sql=mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'") or die (mysql_error());
$numrows=mysql_num_rows($sql);
if($numrows == 0){
	header('Location: admin-login.php?err=1');
	}
else {
	$row=mysql_fetch_array($sql);
	//create session variables to be passed
		
     	 $_SESSION['username']= $row['username'];
		 $_SESSION['password']= $row['password'];
		 header('location:postacademics.php');
	 }
	 
	 
?>