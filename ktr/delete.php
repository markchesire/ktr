<?php
if(isset($_POST['comment_id'])){
	$comment_id=$_POST['comment_id'];
require"assets/include/conn.php";
$sql=mysql_query("delete from comments where comment_id='$id'");
$res = mysqli_query($conn, $query) or die(mysqli_error($conn)."there is problem with query statement");
		header("location:messages-opinions.php");
if($sql){
	echo '<div class="alert alert-success">Record successfully deleted</div>';
	}
  }
?>