<?php
include "assets/include/conn.php";
function logoutadmin(){
	unset($_SESSION['username']);
	session_destroy();
	header("location:admin-login.php");
		
}
function logoutstudent(){
	unset($_SESSION['username']);
	session_destroy();
	header("location:student-portal.php");
		
}
function logoutstudent2(){
	unset($_SESSION['idnumber']);
	unset($_SESSION['firstname']);
	unset($_SESSION['surname']);
	session_start();
	session_destroy();
	header("location:elearn-login.php");
		
}
function logoutparent(){
	unset($_SESSION['idnumber']);
	unset($_SESSION['firstname']);
	unset($_SESSION['surname']);
	session_destroy();
	header("location:parents-portal.php");
		
}
function logoutstaff(){
	//unset($_SESSION['idnumber']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_start();
	session_destroy();
	header("location:staff-portal.php");
		
}
function logoutstudent3(){
	unset($_SESSION['admnumber']);
	
	session_destroy();
	header("location:fee-login.php");
		
}


?>