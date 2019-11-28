<?php
session_start();
//ob_start();
include "assets/include/conn.php";

if(isset($_POST['admnumber'])){
		$admnumber = $_POST['admnumber'];
	}
$sql=mysql_query("SELECT admnumber FROM students WHERE admnumber=trim('$admnumber')") or die (mysql_error());
$numrows=mysql_num_rows($sql);
if($numrows == 0){
	header('Location: fee-login.php?err=1');
	}
else {
	$row=mysql_fetch_array($sql);
	//create session variables to be passed
		
     	 $_SESSION['admnumber']= $row['admnumber'];
		 header('location:fee.php');
	 }
	 
	 
?>