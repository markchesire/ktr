<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">

		<title>Alumni | KTR</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="style/demo.css">
		<link rel="stylesheet" href="style/sky-forms.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	<body class="" id="body-bg">
		<div class="body body-s">
		<?php  
			 
				require"assets/include/conn.php";
				if(isset($_POST['submit']))
				{
				    $firstname = $_POST["firstname"];
				    $surname = $_POST["surname"];
				    $admno = $_POST["admno"];
				    $phone = $_POST["phone"]; 
				    $address = $_POST["address"];
                    $year = $_POST["year"];	
				    $endyear = $_POST["endyear"]; 
				    $name="";
				    $alert="";
				    $allowedExts = array(
					  "png","jpeg","jpg"
					); 
					$allowedMimeTypes = array( 
					  'image/png','image/jpeg','image/jpg'
					);
					$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
					//$extension = end(explode(".", $_FILES["file"]["name"]));
					$file_ext = strtolower($extension);
					if($extension == "png" || $extension == "jpeg" || $extension == "jpg")
					{
						//echo "ms word";
						$file = $_FILES["file"]["name"];
						$filePath = "alumniuploads/" . $file;    
						move_uploaded_file($_FILES["file"]["tmp_name"],$filePath); 
					}
					$sqlquery = mysqli_query($dblink,"INSERT INTO dir_alumni VALUES ('$firstname','$surname','$admno','$phone','$address','$year','$filePath','$endyear')");
				    $msg = "Thanks ".$name.", Registration Successful".$alert.",Welcome:"."<br/></br/>";
					
				}
					
				
             mysqli_close($dblink);       	
				
				
        ?>
		<div style="color:#ff0000;background-color:#ffe6e6;text-align:center;"><?php echo @$msg?></div>
			<form name='registerForm' onsubmit="return(checkRegister());" method="POST" enctype="multipart/form-data" class="sky-form">
				<header id="registration-header">Alumni Registration
				<a href="alumni.php"><img src="uploads/close.jpg" width="15px" height="15px" id="close-button"></img></a>
				
				</header>
				
				<fieldset>					
					
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="firstname"  placeholder="Enter your firstname" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only alphabets accepted</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="surname" placeholder="Enter your surname" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only alphabets accepted</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input name="admno" placeholder="Enter your admission number" type="text" required>
							<b class="tooltip tooltip-bottom-right">Use alphanumeric characters</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="phone" placeholder="Enter your phone number" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only numbers accepted</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="address" type="email" placeholder="Enter your email-address" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only alphabets and special characters accepted</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="year" placeholder="Enter period of study e.g 2008/2011" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only alphabets and special characters accepted</b>
						</label>
					</section>
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="endyear" placeholder="Enter year of form four completion" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only numbers accepted</b>
						</label>
					</section>
					
					
					<section style="margin-top:-10px;">
						<label class="input">
						     <label for="motion">upload your picture</label>
                                <input type="file"  id="file" name="file" required>
						</label>
					</section>
					
					<input type="submit" name="submit" value="Register" id="button-register" class="btn btn-success">
					
					
					
					
				</fieldset>
					
			
					
				
					
			
			</form>
			
		</div>
		
		
		<script src="js-js/validate_register_form.js"></script>
	
</body>
</html>