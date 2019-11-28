<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	    <link rel="shortcut icon" href="uploads/logo.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                    <meta name="author" content="">
                <title>Alumni | KTR</title>
            <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/khs.css" rel="stylesheet">
	  <link href="css/sky-forms.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="calendar/jsDatePick_ltr.min.css" />
	
	<!--Javascript pop-up model module inactive-->
	<script type="text/javascript" src="js-js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js-js/jquery.leanModal.min.js"></script>

	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

	
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo"><img src="uploads/bannerlogo.jpg" width="300px" height="90px"></img></div>
		    <div class="name"><strong></strong></div>
				<p class="day">
				    <small>
				        <script type="text/javascript">
                            var d = new Date()
                            var weekday = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                            document.write(""+""+""+ weekday[d.getDay()]+":")
                        </script>
				    </small>
                </p>
				<p class="date">
				    <small>
                        <script type="text/javascript">
                            var d = new Date()
                            document.write(d.getDate())
                            document.write("/")
                            document.write(d.getMonth()+ 1)
                            document.write("/")
                            document.write(d.getFullYear()+",")
                        </script>
				    </small>
                </p>
				<p class="time">
				    <small>
                        <script type="text/javascript">
                            var t = new Date()
                            document.write(t.getHours())
                            document.write(":")
                            document.write(t.getMinutes()+ 1)
                            document.write(":")
                            document.write(t.getSeconds())
                        </script>
				    </small>
                </p>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
		        <li><a href="academics.php">Academics</a></li>
		        <li><a href="admissions.php">Admissions</a></li>
			    <li><a href="tenders.php">Tenders</a></li>
			    <li><a href="blog-post.php">Blog Post</a></li>
			    <li><a href="portfolio.php">Portfolio</a></li>
			    <li><a href="contact.php">Contact</a></li>
                <li class="active"><a href="about.php">About</a></li>
		    </ul>
        </div>
    </div>
</nav>
<div class="container" id="about-page-header">
   <div class="row" >
        <div class="col-lg-12" >
            <h1 class="about-page-header"><i class="fa fa-chevron-right" id="fa-fa-chevron-right"></i> Alumni
            <small id="title">Meet our Alumina here</small>
            </h1>
                <ol class="breadcrumb" id="alumni-links">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage </li>
					<li class="alumni-links-left"><a href="register-alumni.php"><i class="fa fa-user"></i>&nbsp;Register</a></li>
					<li id="home"><a href=""><i class="fa fa-calendar" ></i><button id="modal_trigger" href="#modal" class="btn">&nbsp;News/Events</button></a></li>
					<li onclick="myFunction()" class="dropbtn"><i class="fa fa-folder-open"></i>&nbsp;Directory
					<div id="myDropdown" class="dropdown-content">
					<a href="">2017</a>
					<a href="">2016</a>
					<a href="">2015</a>
					<a href="">2017</a>
					<a href="">2016</a>
					<a href="">2015</a>
					</div>
					</li>
                </ol>
				
        </div>
	</div>
	
				
				
				
                <!-- The Modal -->
								<div class="container" id="popup-form">
                <div id="modal" class="popupContainer" style="display:none;">
		        
				<section class="popupBody">
				<!--Social Login--> 
				<div>
				
			     
            <div class="body body-s">
			
		
			<form name='registerForm' onsubmit="return(checkRegister());" method="POST" enctype="multipart/form-data" class="sky-form">
				<header id="news-updates">News & Updates
				<span class="modal_close" ><a href="#" id="close-icon"><i class="fa fa-times"></i></a></span>
				</header>
				
				<fieldset>					
					<section id="section1">
						<label class="input">
						<p style="color:red"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i>&nbsp;<?php include"js-js/alumni-news2.js"?></p>
                        <hr/>
							<div class="span1 offset1">
                                <div class="circle">
                                    <span class="event-date">sept<br>13</span>
                                </div>
								<div id="blogpost-events-canvas">
				                    <strong id="blogpost-events-title">Science congress</strong>
				                </div>
                            </div>
							
						</label>
					</section>
					<hr/>
					<section id="section1">
						<label class="input">
				        <p style="color:"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i>&nbsp;<?php include"js-js/alumni-news.js"?></p>
                        <hr/>
							<div class="span1 offset1">
                                <div class="circle">
                                    <span class="event-date">sept<br>14</span>
                                </div>
								<div id="blogpost-events-canvas">
				                    <strong id="blogpost-events-title">Alumni matters</strong>
				                </div>
                            </div>
							
						</label>
					</section>
					
					<section id="section1">
						<label class="input">
						<p style="color:red"><i class="fa fa-clock-o" id="fa-fa-clock-o"></i>&nbsp;<?php include"js-js/alumni-news1.js"?></p>
                        <hr/>
							<div class="span1 offset1">
                                <div class="circle">
                                    <span class="event-date">sept<br>15</span>
                                </div>
								<div id="blogpost-events-canvas">
				                    <strong id="blogpost-events-title">Alumni party</strong>
				                </div>
                            </div>
							
							
						</label>
					</section>

					
				</fieldset>
					
				
				
				
			</form>
			
		</div>
								
                                    
								
               
			    </div>
				</section>
				</div>
				</div>
				<!---javascript popup module inactive-->
				<script type="text/javascript">
				$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
				$(function(){
				// Calling Login Form
				$("#login_form").click(function(){
				$(".social_login").hide();
				$(".user_login").show();
				return false;
				});
				// Calling Register Form
				$("#register_form").click(function(){
				$(".social_login").hide();
				$(".user_register").show();
				$(".header_title").text('Register');
				return false;
				});
				// Going back to Social Forms
				$(".back_btn").click(function(){
				$(".user_login").hide();
				$(".user_register").hide();
				$(".social_login").show();
				$(".header_title").text('Login');
				return false;
				});
				})
				</script>
                  
				 <!---->
	

<br/>
<hr/>
<!-- Team Member Profiles -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-wrench" id="logo-user"></i>&nbsp;Recently registered</h3>
    </div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle" src="uploads/s1.jpg" width="85">
        <h3>Mr.John Chemaen<small>Principal</small></h3>
        <p>
		Mr.John Chamean is our current school principal and has served in the school for a period of six months.We are gratefull for his stewardship
		</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="" src="uploads/s7.jpeg" width="250px" height="100px">
        <h3>B.O.G Members<small>Directors</small></h3>
        <p>From the left B.O.G chairman Mr.xxx xxx with other board members who are the current B.O.G members of the school</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
		    <li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="" src="uploads/g.jpg" width="250px" height="100px">
        <h3>Alice Limo<small>Deputy Principal</small></h3>
        <p>Mrs.Alice Limo is our current deputy principal and we are grateful for her wonderful efforts to support learning as well as school management.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s2.jpg" width="75">
        <h3>Mr.John Chemaen<small>Head of science department</small></h3>
        <p>Mr.John Chemaen is the head of science department in the school,he manages all the sciences learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s5.jpeg" width="75">
        <h3>Mr.John Chemaen<small>Head of humanities department</small></h3>
        <p>Mr.Mark Chesire is the head of humanities department in the school,he manages all the humanities learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
		    <li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>
</div>
<div class="col-sm-4">
    <img class="img-responsive img-thumbnail img-circle"  src="uploads/s6.jpeg" width="75">
        <h3>Dorcas Kim's<small>Head of Mathematics department</small></h3>
        <p>Miss.Dorcas Kim's is the head of science department in the school,he manages all the mathematics learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
		</ul>
</div>
</div>
<div class="row" id="notify-us">
    <div class="col-lg-12">
         <h2 class="page-header"></h2>
    </div>
We are thankful for the efforts of all our staff,subordinate staff members,parents and students as well as other well wishers for their continued support to ensure that all learning activities in the school
runs on well.We also want to thank our surrounding community for their support.
</div>
<br/><br/>
</div>
<div class="container">
    <hr>
</div>
<!-- Footer -->
<?php include"footer.php"?>
<!-- Footer-->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/khs.js"></script>
	<script type="text/javascript" src="calendar/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="calendar/jsDatePick.jquery.min.1.3.js"></script>
	<script type="text/javascript" src="calendar/calender.js"></script>
</body>
</html>
