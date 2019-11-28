<?php 
//all the functions required for db scripting
function connect_db()
{
		$host="localhost";
		$user="root";
		$pwd="";
		
	$conn=mysqli_connect($host,$user,$pwd);
	if(isset($conn)){
	return $conn;
		}
	else
		{
		echo "error connection".mysql_error()." ".mysql_errno();
		return false;
		}
}

function admin_login($POST)
{	
 session_start();
$db="agri_bs";
	$conn=connect_db();
	$db_sel=mysqli_select_db($conn,$db);
	extract($POST);
	$passwordmd= md5($password);
	if(isset($db_sel))
	    {
			  $query="select username from admin where username=trim('$username') AND password='$passwordmd'";
			 //echo $query;
			  $login=mysqli_query($conn,$query) or die(mysqli_error());
			if(mysqli_num_rows($login)==1)
				{
					$_SESSION['username'] = $username;
					header("location:index.php");
					//close_db_conn();
					return true;
				} 		
		   else
				{
					echo "<pre>Incorrect password or e-mail.</pre>";
					//close_db_conn();
					return false;		
		 		}
		 }		
}
function logout(){
	unset($_SESSION['username']);
	session_destroy();
	header("location:login.php");
		
}
?>