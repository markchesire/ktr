<?php
function mysql_escape ($value){
	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists("mysql_real_escape_string");//new version exists
	if($new_enough_php){//version4.0 or higher
		//undo magic qoutes and mysql_real-escape does its work
		if($magic_quotes_active){$value = stripslashes($value);}
		$value = mysql_real_escape_string($value);
	}else {
		//version befor 4.0 magic quotes not available
	if(!$magic_quotes_active){$value = addslashes($value);}
	}
	return $value;
}
?>