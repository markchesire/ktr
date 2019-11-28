<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="shortcut icon" href="uploads/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KITURO HIGH SCHOOL</title>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/khs.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style-style.css">
	<link type="text/css" rel="stylesheet" href="css/register-style.css" />
	
	<!--
	Javascript pop-up model module inactive
	<script type="text/javascript" src="js-js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js-js/jquery.leanModal.min.js"></script>
	-->
	
	
	
	
	
	<script>
	
	  // When the document loads do everything inside here ...
	  $(document).ready(function(){
		
		// When a link is clicked
//		$("a.tab").click(function () {
			
			
			// switch all tabs off
		//	$(".active").removeClass("active");
			
			// switch this tab on
		//	$(this).addClass("active");
			
			// slide all content up
		//	$(".content").slideUp();
			
			// slide this content up
		//	var content_show = $(this).attr("title");
		//	$("#"+content_show).slideDown();
//return false;

		  
	//	});

  $('.flexslider').flexslider({
 animation: "fade"
  });
  $('.tooltip').tooltipster({
		animation: 'grow',
		position:'bottom-left',
                offsetY:-5,
                maxWidth: 300,
                theme: '.tooltipster-light',
		interactive:true,
		content:'' //$(this).parent().find('p').html()
	
	});	
	  });
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
                    <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                    <div class="logo"><img src="uploads/bannerlogo.jpg" width="300px" height="90px"></img></div>
				        <div class="name"><strong></strong></div>
				                <p class="day"><small>
                                    <script type="text/javascript">
                                    var d = new Date()
                                    var weekday = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                                    document.write(""+""+""+ weekday[d.getDay()]+":")
                                    </script>
				                    </small>
                                </p>
				                <p class="date"><small>
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
				                    <p class="time"><small>
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
                
            </div>
        </nav>
        
               <div id="homebanner" class="homebanner-elearn-login">
				    <div class="flexslider">
                        <ul class="slides">
                            <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;"><img src="img/a.jpg" alt="" border="0"></li>
                            <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;"><img src="img/b.jpg" alt="" border="0"></li>
                            <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/c.jpg" alt="" border="0"></li>
                            <li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/d.jpg" alt="" border="0"></li>
							<li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/e.jpg" alt="" border="0"></li>
							<li style="width: 100%; float: left; margin-right: -100%; position: relative;"><img src="img/g.jpg" alt="" border="0"></li>
                        </ul>
                       <div id="homebannerstrip"><img src="img/innerbannerstrip.png" alt="" height="157" width="1050"></div>
                    </div>
                </div>
                
<!--login form-->
	<div class="content-wrapper">
            <div class="container">
                <div class="row">
				    <div class="col-lg-4 col-md-4 col-sm-4 ">
                        <div class="portfolio-item wow rotateIn animated" data-wow-delay="0.4s">
                        <h4 class="elearn-head-line">E-learn 
						<img src="uploads/read.jpg"  class="knowmore-read" alt="image" />
                        <img src="uploads/knowmore.jpg"  class="knowmore" alt="image" />
						<span id="elearn-message">Login to access system resources below<em>[Applicable for KTR students only!]</em></span>
						</h4>
                        <div class="overlay">
                        </div>
                        </div>
                    </div>
				</div>
                <!-- The Modal -->
                  
				 <!---->
                    <div class="row">
                        <div class="col-md-6">
                                <div id="elearn-login-header">
								
                                <p>
                                <?php 
                                $errors = array(
                                    1=>"Wrong details provided,please try again!",
                                    
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<span id="fans-error-return">'.$errors[$error_id].'</span>';
                                    }
                               ?>       
                                </p>
								
								</div>
								<hr/>
								<div id="elearn-login-content">
								<form name='myForm' onsubmit="return(validate());" action="authenticatestudents3.php" method="POST" role="form" id="elearn-login">     
                                    <h4 id="elearn-firstname">firstname:
									<input id="fnameplaceholder" type="text" name="firstname"  placeholder="Enter your firstname here" class="enter-admission"><br/>
									</h4>
									
									<h4 id="elearn-surname">surname:
									<input id="surnameplaceholder" type="text" name="surname"  placeholder="Enter your surname here" class="enter-admission"><br/>
									</h4>
									
									<h4 id="admission-No">adm no:
									<input id="admissionplaceholder" type="password" name="admnumber"  placeholder="Enter admission number here" class="enter-admission"><br/>
									</h4>
								
                                    <button  class="btn btn-lg btn-primary btn-block" type="submit" id="elearn-login-button" ><h3 id="elearn-login-button-text">Login </h3>
                                    </button>
								
                                 </form>
								 
								 <div id="elearn-login-left-column">
								 <?php include"animatebooks.php"; ?>
								 <div id="elearn-login-middle-column">
								 <div id="matrix">KNOWLEDGE POWER</div>
								 
								</div>
								</div>
							
                                <br/><br/>
								</div>
								
								<!--PASSWORD RESET NOT APPLICABLE FOR NOW-->
                                <!--<a href="#" id="forgot-pass"> forgot password </a>
                                <hr />
                                <div id="pass-reset" class="alert alert-info">
                                    <table>
                        	            <tr>
										    <td><input type="text" id="id-number" class="form-control" placeholder="enter your id number"/></td>
                        	                <td><button class="form-control btn btn-default btn-sm" id="btn-res" ><i class="fa fa-send"></i> submit</button></td>	
                        	            </tr>
                                    </table>
                                </div>-->
								<!--END PASSWORD RESET-->
								
                        </div>
						
                    </div>
					
			</div>
			
        </div>
	<!--end of login form-->
             <!--scripts-->
        <script src="js-js/jquery_002.js"></script>
		<script src="js-js/jquery_003.js"></script>
		<script src="js-js/decor.js"></script>
		<script src="matrix/animatetitle.js"></script>
		<script src="js-js/validate_user_input2.js"></script>
		<script src="js-js/validate_user_input3.js"></script>
		
	
		   </div>
 <?php include"elearn-footer.php"?>
 <link href="assets/include/animation.css" rel="stylesheet" />
</body>
</html>
