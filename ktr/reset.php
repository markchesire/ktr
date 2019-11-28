<?php
        session_start();
        require 'assets/include/conn.php';
        require_once("AfricasTalkingGateway.php");
        $username1 = "harryshaulin";
        $apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";
        $username = $_POST['username'];
        $mobilenumber = $_POST['mobilenumber'];
        $staffno = $_POST['staffno'];
        $sql = mysql_query("SELECT * FROM staffs WHERE staffno = '$staffno' AND username='$username' AND mobilenumber='$mobilenumber'");
        $numrows=mysql_num_rows($sql);

        if($numrows == 0)
        {
            
            echo"<script type='text/javascript'> alert('Sorry,No such User in our System');window.location='resetpassword.php';</script>";
	    }
        //if a user is found      
        else 
        {
        $length = 8;
		 $str = "";
		 $characters = array_merge(
		 range('A','Z'),
		 range('a','z'),
		 range('0','9'));
		 $max = count($characters) - 1;
		 for ($i = 0; $i < $length; $i++)
		 {
			 $rand = mt_rand(0,$max);
			 $str .= $characters[$rand];
			 }
        mysql_query("UPDATE `kth`.`staffs` SET `password` = '$str' WHERE `staffs`.`staffno` =$staffno") or die (mysql_error());
        //start of sms notification.
        while($q = mysql_fetch_array($sql))
                {
            $data[] = $q['mobilenumber'];
                }
                $recipients = implode(",",$data);
                $r = mysql_fetch_array($sql);
	        $message = "Hello [".$r['name']."], your new password is: ".$str." .";
		$gateway  = new AfricasTalkingGateway($username, $apiKey);
			try
			{
				$results = $gateway->sendMessage($recipients, $message);
				}
			 //...........
			catch
		 (AfricasTalkingGatewayException $e)
		 {
			// echo "<p class='fans'>Encountered an error while sending: </p>". $e -> getMessage();
			 }
                          echo"<script type='text/javascript'> alert('We have sent password to your phone number');window.location='staff-portal.php';</script>";
         } 
        ?>