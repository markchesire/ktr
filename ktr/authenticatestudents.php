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
$sql=mysql_query("SELECT admnumber FROM students WHERE admnumber=trim('$admnumber') AND firstname=trim('$firstname')AND surname=trim('$surname')") or die (mysql_error());
$numrows=mysql_num_rows($sql);
if($numrows == 0){
	header('Location: elearn-login.php?err=1');
	}
else {
	$row=mysql_fetch_array($sql);
	//create session variables to be passed
		
     	 $_SESSION['admnumber']= $row['admnumber'];
		 $_SESSION['firstname']= $row['firstname'];
		 $_SESSION['surname']= $row['surname'];
		 header('location:elearn-index.php');
	 }
	 
	 
?>