<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="language" content="en">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-yii.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.css">
	<link rel="stylesheet" type="text/css" media="all" href="calendar3/jsDatePick_ltr.min.css" />
    <title>Students Portal</title>	
</head>
<body>
    <div class="container" id="page">
	    <div id="header">
		   <div id="contents-page"><br></div>
	    </div>
	    <div id="mainmenu">
	        <div class="navbar navbar-fixed-top">
	            <div class="navbar-inner">
	                <div class="container">
	                    <p class="brand">
	                       <span id="header-portal">Students Portal</span>
	                    </p>
	                    <div class="nav-collapse" id="collapse_0">
	                        <ul class="pull-left nav" id="yw3">
	                            <li><a href="index.php" id="portal1" data-toggle="tooltip" title="Homepage"><i class="fa fa-home" id="icon-home"></i> Home |</span></a></li>
                                <li><a  href="#" id="portal1" data-toggle="tooltip" title="Any Query Contact Admin 0726179177"><i class="fa fa-flag" id="icon-flag"></i> Help </span></a></li>
	</div>
	</div>
	</div>
	</div>		
	</div>
	<div class="span-18">
	<div id="content">
<table class="table table-condensed">

<tbody><tr>
	<td>
	<div id="student-login-page-content1">
		<p id="portal-login-header">Student Login</p>
		
		<hr>
		
		
		<br>
		
                                    
                               
		<div id="">
			                <?php 
                                $errors = array(
                                    1=>"Wrong details provided,try it again!",
                                    
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<span id="fans-error-return2">'.$errors[$error_id].'</span>';
                                    }
                            ?> 
								<form name='myForm' onsubmit="return(validate());" action="authenticatestudents2.php" method="POST" role="form">     
                                    <h4 id="parents-portal-login1">enter your firstname:</h4><br/><br/>
									<h4 id="parents-second-name">enter your surname:</h4><br/><br/>
									<h4 id="parents-second-name">enter your ADM-NO:</h4>
									<input id="parents-placeholder" type="text" name="firstname" placeholder="enter your firstname here." class="enter-admission"><br/><br/>
									<input id="placeholder-second-name" type="text" name="surname" placeholder="enter your surname here" class="enter-admission"><br/><br>
									<input id="id-number-placeholder" type="password" name="admnumber" placeholder="enter admission number here" class="enter-admission">
                                    <button  id="parents-button-submit" class="btn btn-lg btn-primary btn-block" type="submit"><h3 id="submit-text">SUBMIT </h3>
                                    </button>
                                 </form>

								
		</div>
		</div>		
	</div>
	</td>
		<td>
		<div id="student-login-page-content1">
		<p id="portal-login-header"><?php include"js-js/newstitle1.js"?> 
		</p><hr>
		    <div class="hover3">View Calendar
		        <span class="hovertext3"><div id="div3_example" style="margin:0px 0 0px 0;width:205px; height:146px;"> </span></div>
		    </div>
		<ul>
		<li class="fa fa-check" id="student-notices">
		<em id="notices-style">No notices at the moment,we will get in touch if there is any,welcome.</em>
		</li>
		</ul>
		</div>
	</td>
	</tr>
</tbody></table>	</div><!-- content -->
</div>
<div class="span-6 last">
	<div id="sidebar">
		</div><!-- sidebar -->
</div>

	<div style="clear:both"></div>
	

</div><!-- page -->
<br/>
<!-- Footer -->
<?php include"footer.php"?>
<!-- scripts-->
	<script type="text/javascript" src="calendar3/jquery.1.4.2.js"></script>
	<script type="text/javascript" src="calendar3/jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript" src="calendar3/calender.js"></script>
	<script src="js-js/portalheader.js"></script>
	<script src="js-js/validate_user_input2.js"></script>

</body>
</html>