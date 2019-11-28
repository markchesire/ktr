<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">

		<title>Staff | KTR</title>
		
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
		<div style="color:#ff0000;background-color:#ffe6e6;text-align:center;"><?php echo @$msg?></div>
			<form name='registerForm' onsubmit="return(checkRegister());" method="POST" action="reset.php" enctype="multipart/form-data" class="sky-form">
				<header id="registration-header">Confirm Details
				<a href="staff-portal.php"><img src="uploads/close.jpg" width="15px" height="15px" id="close-button"></img></a>
				
				</header>
				
				<fieldset>					
					
					
					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="username"  placeholder="Enter your Username" type="text" required>
							<b class="tooltip tooltip-bottom-right">Only alphabets accepted</b>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input name="mobilenumber" type="text" placeholder="Enter Phonenumber e.g +254726179177"  required>
							<b class="tooltip tooltip-bottom-right">Only alphanumeric accepted</b>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input name="staffno" placeholder="Enter your staffNo" type="text" required>
							<b class="tooltip tooltip-bottom-right">Use numbers accepted</b>
						</label>
					</section>
					<input type="submit" name="submit" value="Reset Password" id="button-register" class="btn btn-success">
				</fieldset>
			</form>
		</div>
		<script src="js-js/validate_register_staff.js"></script>
</body>
</html>