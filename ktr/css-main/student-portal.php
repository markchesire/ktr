<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="language" content="en">

	

	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="shortcut icon" href="http://portal.tukenya.ac.ke/images/favicon.ico" mce_href="/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-yii.css">


<link rel="stylesheet" type="text/css" href="font-awesome.css">

<title>Students Online Portal</title>
	<meta name="keywords" content="students portal, student login, TUK students portal">
	<meta name="description" content="Students portal for the Technical University of Kenya. This portal provides a centralized one-stop place where a student can get access to the University Services">
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<div id="logo"><br></div>
	</div><!-- header -->

	<div id="mainmenu">
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	<a class="btn btn-navbar" data-toggle="collapse" data-target="#collapse_0">
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	</a>
	<a href="http://portal.tukenya.ac.ke/" class="brand">
	    <span id="brand">Students Online Portal</span>
	</a>
	<div class="nav-collapse" id="collapse_0">
	<ul class="pull-left nav" id="yw3">
	<li><a href="http://portal.tukenya.ac.ke/"><i class="icon-home"></i> Home</a></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-globe"></i> Links <span class="caret"></span></a>
	<ul id="yw4" class="dropdown-menu"><li><a target="_blank" tabindex="-1" href="http://tukenya.ac.ke/"><i class="icon-globe"></i> TU-K Main Website</a></li>
	<li><a target="_blank" tabindex="-1" href="http://library.tukenya.ac.ke/"><i class="icon-book"></i> TU-K Library Website</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?r=site/feeStatement"><i class="icon-briefcase"></i> Students Fees Portal</a></li>
	<li><a target="_blank" tabindex="-1" href="http://tukenya.ac.ke/sites/default/files"><i class="icon-download-alt"></i> SATUK Constitution</a></li>
	<li><a target="_blank" tabindex="-1" href="https://mail.google.c"><i class="icon-envelope"></i> Students Official Email through Google</a></li>
	<li><a target="_blank" tabindex="-1" href="http://www.tukenya."><i class="icon-thumbs-up"></i> Recommended List of Private Hostels</a></li></ul></li>
	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-group"></i> Services <span class="caret"></span></a>
	<ul id="yw5" class="dropdown-menu"><li><a tabindex="-1" href="http://p"><i class="icon-thumbs-up"></i> Course Unit and Lecturer Evaluation</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?r=portal/studentAspirant/apply"><i class="icon-download-alt"></i> SATUK Elections</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?r=portal/bursary/apply"><i class="icon-download-alt"></i> SATUK Bursary Form</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?"><i class="icon-download-alt"></i> Ratansi Bursary Form</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?r=portal/hostel/bookRoom"><i class="icon-pencil"></i> Apply for Accommodation</a></li>
	<li><a target="_blank" tabindex="-1" href="http://www.tukenya.a"><i class="icon-thumbs-up"></i> Recommended List of Private Hostels</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/index.php?r=portal/studentClub/register"><i class="icon-pencil"></i> Register/ Renew Club</a></li>
	<li><a tabindex="-1" href="http://portal.tukenya.ac.ke/inde"><i class="icon-briefcase"></i> Register as Class Representative</a></li></ul></li></ul>
	<ul class="pull-right nav" id="yw6"><li><a href="http://portal.tukenya.ac.ke/index.php?r=site/help"><i class="icon-flag"></i> Help</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>		
	</div><!-- mainmenu -->

	<!-- breadcrumbs -->

	<div class="span-18">
	<div id="content">
		

<table class="table table-condensed">

<tbody><tr>
	<td>
		<div class="well">
		<form class="form-horizontal" id="user-form" action="/index.php?r=site/login" method="post">		<h1>Student's Sign In</h1>
		<hr>
		
		<!-- Google Sign In-->
		<div class="control-group hint">
		<label class="control-label">
		</label>
		<a class="login" href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=http%3A%2F%2Fportal.tukenya.ac.ke%2Findex.php%3Fr%3Dsite%2Flogin&amp;client_id=393161318136-8aikd9ehusejqev79fs0h8v4cshcot0b.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;access_type=offline&amp;hd=students.tukenya.ac.ke&amp;approval_prompt=force"><img src="Students%20Online%20Portal_files/google-login-button.png" height="50"></a>
		
		</div>
		<br>
		<div class="control-group "><label class="control-label required" for="LoginForm_username">Username <span class="required">*</span></label><div class="controls"><div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input maxlength="255" autocomplete="off" name="LoginForm[username]" id="LoginForm_username" type="text"></div></div></div>		<div class="control-group hint">
		<label class="control-label">
		</label>
		
		
		
		</div>
		
		<br>
		<br>
		<div class="control-group "><label class="control-label required" for="LoginForm_password">Password <span class="required">*</span></label><div class="controls"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input maxlength="255" value="" name="LoginForm[password]" id="LoginForm_password" type="password"></div></div></div>		
		
		
		<hr>
		<div class="control-group hint">
		<label class="control-label">
		</label>
			<button id="yw0" class="btn btn-success btn-large" type="submit" name="yt0">Log into the Portal</button>		<br><br><br>
		
		
		</div>
	<hr>	
		<div class="control-group hint">
		<label class="control-label">
		</label>
		<i>Unable to login?&nbsp;
		<a href="http://portal.tukenya.ac.ke/index.php?r=site/help">Seek for assistance.</a>
		</i>
		
		</div>
		
		</form>		</div>
	</td>
		<td>
	<h1>STUDENT NOTICES:</h1><hr>
		<ul>
		<li><b>HOSTEL BOOKING: </b><span><span class="icon-flag">&nbsp;</span>&nbsp;<span class="unread">Application Closed ( 2 months 1 day 10 hours 34 minutes  ago)</span></span>
		| Because of less bed capacity,
		<a href="http://www.tukenya.ac.ke/sites/default/files/downloads/TUK-Recommended-Private-Hostel-List.pdf" target="_blank">TUK Recommends these hostels </a>
		to students opting for alternative accommodation. 
		</li>
		<li>2016 SEPTEMBER INTAKE <span style="font-size:14px;letter-spacing:2px;"><span>&nbsp;</span>&nbsp;<span class="pending">Open for Masters and PhD Programmes ONLY</span></span> | 
			<a href="http://intake.tukenya.ac.ke/" target="_blank">Apply Now!</a></li>
		<li>SATUK Constitutional Review in progress. <i class="unread">Deadline: 24th Jun 2016.</i>
		<a href="http://tukenya.ac.ke/satuk-constitutional-review" target="_blank">Learn more</a></li>
		<li>SATUK Tender 2016/17. <i class="unread">Deadline: 30th Jun 2016.</i>
		<a href="http://tukenya.ac.ke/satuk-tender-201617" target="_blank">Learn more</a></li>
		</ul>
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

<

</body></html>