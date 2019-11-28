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
                                        function current_time(id)
                                        {
                                            now = new Date;
                                            h = now.getHours();
                                            if(h<10){h = "0"+h;}
                                            m = now.getMinutes();
                                            if(m<10){m = "0"+m;}
                                            s = now.getSeconds();
                                            if(s<10){s = "0"+s;}
                                            result = ''+h+':'+m+':'+s;
                                            document.getElementById(id).innerHTML = result;
                                            setTimeout('current_time("'+id+'");',);
                                            return true;
                                        }
                                    </script>
                                    <span id="current_time"></span>
                                    <script type="text/javascript"> window.onload = current_time('current_time');
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
<div class="container" id="alumni-page-header">
   <div class="row" >
        <div class="col-lg-12" >
            <h1 class="alumni-page-header"><i class="fa fa-chevron-right" id="fa-fa-chevron-right"></i> Alumni
            <small id="title">Meet our Alumina here</small>
            </h1>
                <ol class="breadcrumb" id="alumni-links">
                    <li id="home"><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li class="active" id="title">&laquo;&nbsp;Homepage </li>
					<li class="alumni-links-left"><a href="register-alumni.php"><i class="fa fa-user"></i>&nbsp;Register</a></li>
					<li id="home"><a href=""><i class="fa fa-calendar" ></i><button id="modal_trigger" href="#modal" class="btn">&nbsp;News/Events</button></a></li>
					<li><a href="directory.php"><i class="fa fa-folder-open"></i>&nbsp;Directory</a></li>
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
        <h3 class="page-header"><i id="logo-user"></i>&nbsp;Alumni</h3>
    </div>
<div class="col-sm-4">
    <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00100'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'>
				        <h4 id='name'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]&nbsp;(Head Girl)</small></h4>
						<h4 id='name'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>

    
</div>
<div class="col-sm-4">
     <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00101'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image-center' class='img-responsive img-thumbnail img-circle'>
						<h4 id='name-center'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]&nbsp;</small></h4>
						<h4 id='name-center'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name-center'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name-center'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons'id='icons-center'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>
    
</div>
<div class="col-sm-4">
     <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00102'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image-right' class='img-responsive img-thumbnail img-circle'>
						<h4 id='name-right'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]</small></h4>
						<h4 id='name-right'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name-right'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name-right'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons' id='name-icons'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>
    
</div>
<div class="col-sm-4">
     <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00103'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image' class='img-responsive img-thumbnail img-circle'>
						<h4 id='name'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]</small></h4>
						<h4 id='name'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>
   
</div>
<div class="col-sm-4">
     <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00104'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image-center' class='img-responsive img-thumbnail img-circle'>
						<h4 id='name-center'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]</small></h4>
						<h4 id='name-center'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name-center'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name-center'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons' id='icons-center'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>
    <!--<div id="uploaded-image"><img class="img-responsive img-thumbnail img-circle"  src="uploads/s5.jpeg"></img></div>
        <h3>Mr.John Chemaen<small>Head of humanities department</small></h3>
        <p>Mr.Mark Chesire is the head of humanities department in the school,he manages all the humanities learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
		    <li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
        </ul>-->
</div>
<div class="col-sm-4">
     <?php  
	    require"assets/include/conn.php";
	?>
    <?php  
			 
				$sqlquery = "select * from dir_alumni where admno = 'ktr/203/00105'";
				$result = mysqli_query($dblink,$sqlquery);
				while($row = mysqli_fetch_array($result))
					echo "
				        <img src='".$row['img']."' id='uploaded-image-right' class='img-responsive img-thumbnail img-circle'>
						<h4 id='name-right'>Names:<small id='pull-name'>&nbsp;$row[0]&nbsp;&nbsp;&nbsp;$row[1]</small></h4>
						<h4 id='name-right'>Adm No:<small id='pull-adm'>&nbsp;$row[2]</small></h4>
						<h4 id='name-right'>Year:<small id='pull-year'>&nbsp;$row[5]</small></h4>
				        <h4 id='name-right'>E-mail:<small id='pull-mail'>&nbsp;$row[4]</small></h4>
						<ul class='list-unstyled list-inline list-social-icons' id='name-icons'>
                            <li class='tooltip-social facebook-link'><a href='#facebook-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Facebook'><i class='fa fa-facebook-square fa-2x'></i></a></li>
                            <li class='tooltip-social twitter-link'><a href='#twitter-profile' data-toggle='tooltip' data-placement='top' title='Follow us on Twitter'><i class='fa fa-twitter-square fa-2x'></i></a></li>
			                <li class='fa fa-phone'>&nbsp; $row[3]</li>
                        </ul>
						 
				            ";
						
	?>
    <!--<div id="uploaded-image"><img class="img-responsive img-thumbnail img-circle"  src="uploads/s6.jpeg"></img></div>
        <h3>Dorcas Kim's<small>Head of Mathematics department</small></h3>
        <p>Miss.Dorcas Kim's is the head of science department in the school,he manages all the mathematics learning activities in the school.</p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Follow us on Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			<li class="fa fa-phone">&nbsp; (+254) 0726 179 177</li>
		</ul>-->
</div>
</div>
<div class="row" id="notify-us">
    <div class="col-lg-12">
         <h2 class="page-header"></h2>
    </div>
Let's all talk
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
